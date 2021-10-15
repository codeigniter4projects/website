<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Class CreateForumsTable
 *
 * This is a simulation of tables used within
 * MyBB for when developing locally with no
 * local MyBB installation available.
 *
 * You should also use the ForumSeeder to populate
 * some bogus material in the tables.
 */
class CreateForumsTable extends Migration
{
    public function up()
    {
        // fx_threads
        $this->forge->addField([
            'tid'        => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'autoincrement' => true],
            'subject'    => ['type' => 'varchar', 'constraint' => 255],
            'username'   => ['type' => 'varchar', 'constraint' => 255],
            'lastpost'   => ['type' => 'varchar', 'constraint' => 255],  // timestamp
            'lastposter' => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'visible'    => ['type' => 'tinyint', 'constraint' => 2, 'default' => 1],
            'deletetime' => ['type' => 'int', 'constraint' => 2, 'default' => 0],
        ]);
        $this->forge->addPrimaryKey('tid');
        $this->forge->createTable('fx_threads', true);
    }

    public function down()
    {
        $this->forge->dropTable('fx_threads', true);
    }
}
