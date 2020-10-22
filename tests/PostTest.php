<?php

use App\Entities\Post;

class PostTest extends \CodeIgniter\Test\CIUnitTestCase
{
    /**
     * @var Post
     */
    protected $post;

    public function setUp(): void
    {
        parent::setUp();

        $this->post = new Post([
            'title' => 'A Simple Post',
            'slug' => 'a-simple-post',
            'date' => date('Y-m-d', strtotime('-1 week')),
            'author' => 'Ian Fleming',
            'tags'=> 'news, releases'
        ]);
    }

    public function testLink()
    {
        $this->assertEquals(site_url('news/a-simple-post'), $this->post->link());
    }

    public function testLinkNoSlug()
    {
        $this->post->slug = null;

        $this->assertEquals(site_url('news/'), $this->post->link());
    }

    public function testGetTagsNoData()
    {
        $this->post->tags = null;

        $this->assertEquals([], $this->post->getTags());
    }

    public function testGetTags()
    {
        $this->assertEquals(['news', 'releases'], $this->post->getTags());
    }
}
