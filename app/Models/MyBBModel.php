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
        'tid', 'subject', 'username', 'lastpost', 'lastposter', 'visible', 'deletetime',
    ];

    /**
     * Grabs the most recently active threads from the forums.
     *
     * @param int    $limit
     * @param string $order
     *
     * @return array|null
     */
    public function getRecentPosts($limit = 5, $order = 'desc')
    {
        $where = [
            'visible'    => 1,
            'deletetime' => 0,
        ];

        $builder = $this->db->table('fx_threads');
        $query   = $builder->select('tid, subject, username, lastpost, lastposter')
            ->where($where)
            ->limit($limit, 0)
            ->orderBy('lastpost', $order)
            ->get();

        return $query->getResultArray();
    }
}
