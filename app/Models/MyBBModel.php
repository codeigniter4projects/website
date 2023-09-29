<?php

namespace App\Models;

use CodeIgniter\Model;

/**
 * Class MyBBModel
 *
 * Interacts with the fx_threads table on either
 * a local MyBB installation, or a local database
 * to simulate a MyBB install.
 */
class MyBBModel extends Model
{
    protected $table            = 'fx_threads';
    protected $primaryKey       = 'tid';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'fid', 'tid', 'subject', 'username', 'lastpost', 'lastposter', 'visible', 'deletetime',
    ];

    /**
     * Grabs the most recently active threads from the forums.
     *
     * @return array|null
     */
    public function getRecentPosts(int $limit = 5, string $order = 'desc')
    {
        $forumId = config('MyBB')->newsForumId;

        $where = [
            'visible'    => 1,
            'deletetime' => 0,
        ];

        $builder = $this->db->table('fx_threads');
        $query   = $builder->select('tid, subject, username, lastpost, lastposter')
            ->where($where)
            ->where('fid != ' . $forumId)
            ->limit($limit, 0)
            ->orderBy('lastpost', $order)
            ->get();

        return $query->getResultArray();
    }

    /**
     * Grabs the most recent announcements from the forums.
     *
     * @return array
     */
    public function getRecentNews(int $limit = 5, string $order = 'desc')
    {
        $admins  = config('MyBB')->newsUsernames;
        $forumId = config('MyBB')->newsForumId;

        $where = [
            'fid'        => $forumId,
            'visible'    => 1,
            'deletetime' => 0,
        ];

        $builder = $this->db->table('fx_threads');
        $query   = $builder->select('tid, subject, username, lastpost, lastposter')
            ->where($where)
            ->whereIn('username', $admins)
            ->limit($limit, 0)
            ->orderBy('lastpost', $order)
            ->get();

        return $query->getResultArray();
    }
}
