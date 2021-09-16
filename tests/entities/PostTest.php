<?php

use App\Entities\Post;
use Tests\Support\ProjectTestCase;

/**
 * @internal
 */
final class PostTest extends ProjectTestCase
{
    /**
     * @var Post
     */
    protected $post;

    protected function setUp(): void
    {
        parent::setUp();

        $this->post = new Post([
            'title'  => 'A Simple Post',
            'slug'   => 'a-simple-post',
            'date'   => date('Y-m-d', strtotime('-1 week')),
            'author' => 'Ian Fleming',
            'tags'   => 'news, releases',
        ]);
    }

    public function testLink()
    {
        $this->assertSame(site_url('news/a-simple-post'), $this->post->link());
    }

    public function testLinkNoSlug()
    {
        $this->post->slug = null;

        $this->assertSame(site_url('news/'), $this->post->link());
    }

    public function testGetTagsNoData()
    {
        $this->post->tags = null;

        $this->assertSame([], $this->post->getTags());
    }

    public function testGetTags()
    {
        $this->assertSame(['news', 'releases'], $this->post->getTags());
    }
}
