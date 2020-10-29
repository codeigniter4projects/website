<?php

use App\Libraries\Blog;
use org\bovigo\vfs\vfsStream;
use CodeIgniter\Test\CIUnitTestCase;

class BlogLibraryTest extends CIUnitTestCase
{
    /**
     * Our fake filesystem
     * @var vfsStream
     */
    protected $root;

    /**
     * @var Blog
     */
    protected $blog;

    public function setUp(): void
    {
        parent::setUp();

        $this->blog = new Blog();
        $config = config(\Config\Blog::class);
        $config->contentPath = TESTPATH.'_support/blog/';
        \CodeIgniter\Config\Config::injectMock(Blog::class, $config);

        cache()->clean();
    }

    public function testGetPostsNoData()
    {
        $config = config(\Config\Blog::class);
        $config->contentPath = WRITEPATH.'uploads';
        \CodeIgniter\Config\Config::injectMock(Blog::class, $config);

        $this->expectException(\App\Exceptions\BlogException::class);
        $this->expectExceptionMessage(lang('Blog.invalidContent'));

        $this->assertEquals([], $this->blog->getRecentPosts());
    }

    public function testGetPostsSuccess()
    {
        helper('filesystem');
        $posts = $this->blog->getRecentPosts();

        // Should only read the one file in top-level, not in sub-folder.
        $this->assertCount(1, $posts);
        $this->assertEquals('CodeIgniter 4.0.4 Released', $posts[0]->title);
        $this->assertEquals('codeigniter-404-released', $posts[0]->slug);
        $this->assertEquals('2020-07-15', $posts[0]->date);
        $this->assertEquals(['news' , 'releases'], $posts[0]->tags);
        $this->assertEquals('Lonnie Ezell', $posts[0]->author);
        $this->assertNotEmpty($posts[0]->body);
        $this->assertNotEmpty($posts[0]->html);
    }

    public function testGetPostSuccess()
    {
        helper('filesystem');
        $post = $this->blog->getPost('codeigniter-404-released');

        // Should only read the one file in top-level, not in sub-folder.
        $this->assertEquals('CodeIgniter 4.0.4 Released', $post->title);
        $this->assertEquals('codeigniter-404-released', $post->slug);
        $this->assertEquals('2020-07-15', $post->date);
        $this->assertEquals(['news' , 'releases'], $post->tags);
        $this->assertEquals('Lonnie Ezell', $post->author);
        $this->assertNotEmpty($post->body);
        $this->assertNotEmpty($post->html);
    }

    public function testRecordVisit()
    {
        @unlink(WRITEPATH .'blog_visits.txt');

        $this->blog->recordVisit('codeigniter-404-released');

        $this->assertTrue(is_file(WRITEPATH .'blog_visits.txt'));

        $records = unserialize(file_get_contents(WRITEPATH .'blog_visits.txt'));
        $this->assertTrue(array_key_exists('codeigniter-404-released', $records));
        $this->assertEquals(1, $records['codeigniter-404-released']);
    }

    public function testRecentPostsWidget()
    {
        $widget = $this->blog->recentPostsWidget(1);

        $this->assertTrue(strpos($widget, 'Recent Posts') !== false);
        $this->assertTrue(strpos($widget, 'CodeIgniter 4.0.4 Released') !== false);
    }

    public function testPopularPostsWidget()
    {
        $widget = $this->blog->popularPostsWidget(1);

        $this->assertTrue(strpos($widget, 'Popular Posts') !== false);
        $this->assertTrue(strpos($widget, 'CodeIgniter 4.0.4 Released') !== false);
    }
}
