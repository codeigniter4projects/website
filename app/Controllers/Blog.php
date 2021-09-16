<?php

namespace App\Controllers;

use App\Libraries\Blog as BlogLibrary;
use CodeIgniter\Exceptions\PageNotFoundException;
use Config\Blog as BlogConfig;

class Blog extends BaseController
{
    /**
     * @var BlogConfig
     */
    protected $config;

    /**
     * @var BlogLibrary
     */
    protected $blog;

    public function __construct()
    {
        $this->config = config(BlogConfig::class);
        $this->blog   = new BlogLibrary();
    }

    /**
     * Displays posts based on date (reverse chronological order)
     */
    public function index()
    {
        echo $this->render('blog/list', [
            'posts' => $this->blog->getRecentPosts($this->config->perPage),
        ]);
    }

    /**
     * Displays posts based on category.
     */
    public function category(string $category)
    {
        echo $this->render('blog/list', [
            'posts'     => $this->blog->getRecentPosts($this->config->perPage, 0, $category),
            'pageTitle' => "Category: {$category}",
            'category'  => $category,
        ]);
    }

    /**
     * Displays a single post
     */
    public function post(string $slug)
    {
        $post = $this->blog->getPost($slug);

        if (empty($post)) {
            throw PageNotFoundException::forPageNotFound();
        }

        // Save a hit to this page. Will go simple for now and
        // just record every time someone refreshes the page
        // but at some point we might need to make it a little smarter.
        $this->blog->recordVisit($slug);

        echo $this->render('blog/single', [
            'post'  => $this->blog->getPost($slug),
            'title' => $post->title ?? 'Some Post',
        ]);
    }
}
