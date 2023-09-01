<?php

namespace App\Database\Seeds;

use App\Models\MyBBModel;
use CodeIgniter\Database\Seeder;

/**
 * Class ForumSeeder
 *
 * Creates mock data that can be used by
 * the MyBBModel that simulates what we
 * would get from the forums if we had them
 * installed locally.
 *
 * This is to allow the site to be developed
 * even without a full MyBB install locally.
 */
class ForumSeeder extends Seeder
{
    protected $threads = [
        ['subject' => 'Multi Table Select (Active Records)', 'username' => 'Han Solo', 'lastpost' => '1414737566', 'tid' => '407', 'fid' => 1],
        ['subject' => 'unexpected end of file', 'username' => 'Yoda', 'lastpost' => '1414567370', 'tid' => '408', 'fid' => 1],
        ['subject' => 'Status Enable & Disable Not Working', 'username' => 'Luke Skywalker', 'lastpost' => '1414567370', 'tid' => '409', 'fid' => 1],
        ['subject' => 'waiting for CI3.0 version', 'username' => 'Princess Leia', 'lastpost' => '1414567370', 'tid' => '410', 'fid' => 1],
        ['subject' => 'How i can select most common value with codeigniter', 'username' => 'Obi Wan Kenobi', 'lastpost' => '1414567370', 'tid' => '411', 'fid' => 1],
        ['subject' => 'CodeIgniter 4.3.7 released', 'username' => 'ciadmin', 'lastpost' => '1414737566', 'tid' => '412', 'fid' => 2],
        ['subject' => 'CodeIgniter 4.3.6 released', 'username' => 'ciadmin', 'lastpost' => '1414567370', 'tid' => '413', 'fid' => 2],
        ['subject' => 'Shield Authentication Library', 'username' => 'ciadmin', 'lastpost' => '1414567370', 'tid' => '414', 'fid' => 2],
        ['subject' => 'Settings Library released', 'username' => 'ciadmin', 'lastpost' => '1414567370', 'tid' => '415', 'fid' => 2],
        ['subject' => 'Tasks Library released', 'username' => 'ciadmin', 'lastpost' => '1414567370', 'tid' => '416', 'fid' => 2],
    ];

    public function run()
    {
        $this->db->table('fx_threads')->truncate();
        $model = new MyBBModel();

        foreach ($this->threads as $thread) {
            $model->insert($thread);
        }
    }
}
