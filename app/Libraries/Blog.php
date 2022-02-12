<?php

namespace App\Libraries;

use App\Entities\Post;
use App\Exceptions\BlogException;
use CodeIgniter\Exceptions\PageNotFoundException;
use Config\Blog as BlogConfig;
use League\CommonMark\CommonMarkConverter;

/**
 * Class Blog
 *
 * Handles reading and parsing content posts.
 * Posts are markdown files versioned with the
 * site repo, with a simple yaml header section
 * to define meta data.
 */
class Blog
{
    /**
     * @var BlogConfig
     */
    protected $config;

    public function __construct()
    {
        $this->config = config(BlogConfig::class);
    }

    /**
     * Gets the posts, sorted by most recent first.
     * If $category is present, will locate within a
     * subfolder of that name.
     *
     * @throws BlogException
     */
    public function getRecentPosts(int $limit = 5, int $offset = 0, ?string $category = null)
    {
        $cacheKey = "blog_files_{$offset}_{$limit}_{$category}";

        if (! $posts = cache($cacheKey)) {
            helper('filesystem');

            if (! is_dir($this->config->contentPath)) {
                log_message('error', 'Blog Content Path is not a valid directory: ' . $this->config->contentPath);

                throw BlogException::forInvalidContent();
            }

            // Restrict files to the main directory for now - no sub-directories.
            $files = directory_map($this->config->contentPath, 1);

            // We only want .md files.
            $files = array_filter($files, static function ($file) {
                return substr(strrchr($file, '.'), 1) === 'md';
            });

            if (! count($files)) {
                throw BlogException::forInvalidContent();
            }

            // Don't trust filesystem, order by date.
            arsort($files);

            // Get the current page's worth.
            $files = array_splice($files, $offset, $limit);

            $posts = [];

            foreach ($files as $file) {
                $temp = $this->readPost($this->config->contentPath, $file);

                // Only collect from the correct category.
                if (! empty($category) && ! in_array($category, $temp->tags, true)) {
                    continue;
                }

                $posts[] = $temp;
            }

            cache()->save($cacheKey, $posts);
        }

        return $posts;
    }

    public function getPopularPosts(int $limit = 5)
    {
        helper('filesystem');
        $path = WRITEPATH . 'blog_visits.txt';

        if (! is_file($path)) {
            return [];
        }

        $lines = unserialize(file_get_contents($path));

        if (! count($lines)) {
            return [];
        }

        arsort($lines);

        $slugs = array_slice($lines, 0, $limit);

        // Restrict files to the main directory for now - no sub-directories.
        $files = directory_map($this->config->contentPath, 1);

        // We only want .md files.
        $files = array_filter($files, static function ($file) {
            return substr(strrchr($file, '.'), 1) === 'md';
        });

        $posts = [];

        foreach ($files as $file) {
            foreach ($slugs as $slug => $count) {
                try {
                    if (stripos($file, $slug) !== false) {
                        $posts[$count] = $this->getPost($slug);
                    }
                }
                // Don't fail if we can't find the file anymore...
                catch (\Throwable $e) {
                    continue;
                }
            }
        }

        // It seems to lose it's ordering above,
        // so ensure we're sorted.
        krsort($posts);

        return $posts;
    }

    /**
     * Gets a single post
     */
    public function getPost(string $slug)
    {
        $cacheKey = "blog_post_{$slug}";

        if (! $post = cache($cacheKey)) {
            $files = glob("{$this->config->contentPath}*.{$slug}.md");

            if (! count($files)) {
                throw PageNotFoundException::forPageNotFound();
            }

            $post = $this->readPost($this->config->contentPath, basename($files[0]));

            cache()->save($cacheKey, $post);
        }

        return $post;
    }

    /**
     * Records a single "hit", or visit to a page
     * so that we can track "popular" pages.
     */
    public function recordVisit(string $slug)
    {
        $path = WRITEPATH . 'blog_visits.txt';

        $lines = file_exists($path)
            ? unserialize(file_get_contents($path))
            : [];

        if (! isset($lines[$slug])) {
            $lines[$slug] = 1;
        } else {
            $lines[$slug]++;
        }

        // Update our records
        helper('filesystem');
        write_file($path, serialize($lines));
    }

    /**
     * Displays the HTML "widget" for the list of recent posts
     * in the sidebar.
     */
    public function recentPostsWidget(int $limit, string $view = 'blog/_widget'): string
    {
        $posts = $this->getRecentPosts($limit);

        if (! count($posts)) {
            return '';
        }

        return view($view, [
            'title' => 'Recent Posts',
            'rows'  => $posts,
        ]);
    }

    /**
     * Displays the HTML "widget" for the list of popular posts
     * in the sidebar.
     */
    public function popularPostsWidget(int $limit): string
    {
        $posts = $this->getPopularPosts($limit);

        if (! count($posts)) {
            return '';
        }

        return view('blog/_widget', [
            'title' => 'Popular Posts',
            'rows'  => $posts,
        ]);
    }

    /**
     * Reads in a post from file and parses it
     * into a Post Entity.
     */
    protected function readPost(string $folder, string $filename)
    {
        $contents = file($folder . $filename);

        if (empty($contents)) {
            return null;
        }

        $post = new Post();

        // Get slug and date
        preg_match('|^([\d-]+).(\S+).md$|i', $filename, $matches);

        if (! count($matches)) {
            return null;
        }

        $post->date = $matches[1];
        $post->slug = $matches[2];

        // Get the attributes from the front-matter of the file (between lines with ---)
        $inFrontMatter = false;
        $inBody        = false;
        $body          = [];

        foreach ($contents as $line) {
            if (trim($line) === '---') {
                $inFrontMatter = ! $inFrontMatter;
                if (! $inFrontMatter) {
                    $inBody = true;
                }

                continue;
            }

            if (! $inBody) {
                $key   = substr($line, 0, strpos($line, ':'));
                $value = trim(substr($line, strpos($line, ':') + 1));

                $post->{$key} = $value;

                continue;
            }

            $body[] = trim($line);
        }
        $post->body = implode("\n", $body);

        // Convert body using Markdown
        $markdown   = new CommonMarkConverter();
        $post->html = $markdown->convertToHtml($post->body);
        $post->html = $this->parseVideoTags($post->html);

        return $post;
    }

    /**
     * Parses the post body for our custom video tags
     * and provides embeds for the video.
     *
     * Embed syntax:
     *   !video[ https://www.youtube.com/watch?v=1GYoEMiXcX0&feature=youtu.be ]
     *
     * @return string|string[]|null
     */
    protected function parseVideoTags(?string $html = null)
    {
        helper('video');

        // Since the plugin doesn't support video embeds, yet,
        // wire our own up. The syntax for video embeds is
        //     ![[ https://youtube.com/watch?v=xlkjsdfhlk ]]
        preg_match_all('|!video\[([\s\w:/.?=&;]*)\]|i', $html, $matches);

        if (! count($matches)) {
            return $html;
        }

        for ($i = 0; $i < count($matches) - 1; $i++) {
            if (empty($matches[0]) || empty($matches[1])) {
                continue;
            }

            $html = str_replace($matches[0][$i], embedVideo($matches[1][$i]), $html);
        }

        return $html;
    }
}
