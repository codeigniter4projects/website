<?php

namespace App\Libraries;

use App\Models\MyBBModel;

/**
 * Provides View Cell functionality
 * for displaying recent posts from the forums.
 */
class Forums
{
    /**
     * @var MyBBModel
     */
    protected $mybb;

    protected $forumUrl;

    /**
     * Number of items to display by default.
     *
     * @var int
     */
    protected $limit = 5;

    public function __construct()
    {
        $this->mybb     = new MyBBModel();
        $this->forumUrl = config('MyBB')->forumURL;
    }

    /**
     * Process the latest posts from the forum
     *
     * @param array $params
     *
     * @return string
     */
    public function posts($params = [])
    {
        $limit = $params['limit'] ?? $this->limit;

        // get the forum posts
        if (! $items = cache('bb_posts')) {
            $items = $this->mybb->getRecentPosts($limit);
            $ttl   = 60 * 60 * 4; // time to live s/b 4 hours
            cache()->save('bb_posts', $items, $ttl);
        }

        if (! empty($items) && is_array($items)) {
            // massage the date formats
            foreach ($items as &$item) {
                $item['lastpost']       = date('Y.m.d', $item['lastpost']);
                $item['mybb_forum_url'] = $this->forumUrl;
                $item['subject']        = strip_tags($item['subject']); // fix #79
            }

            return view('forum/_posts', ['posts' => $items]);
        }

        return view('forum/_drats');
    }

    public function news($params = [])
    {
        $limit = $params['limit'] ?? $this->limit;

        // get the forum posts
        if (! $items = cache('bb_news')) {
            $items = $this->mybb->getRecentNews($limit);
            $ttl   = 60 * 60 * 4; // time to live s/b 4 hours
            cache()->save('bb_news', $items, $ttl);
        }

        if (! empty($items) && is_array($items)) {
            // massage the date formats
            foreach ($items as &$item) {
                $item['lastpost']       = date('Y.m.d', $item['lastpost']);
                $item['mybb_forum_url'] = $this->forumUrl;
                $item['subject']        = strip_tags($item['subject']); // fix #79
            }

            return view('forum/_posts', ['posts' => $items]);
        }

        return view('forum/_drats');
    }
}
