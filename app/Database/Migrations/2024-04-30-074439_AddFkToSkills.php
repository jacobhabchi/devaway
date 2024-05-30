<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddFkToSkills extends Migration
{
    public function up()
    {
        $this->forge->addForeignKey('developer_id', 'developers', 'id', 'CASCADE', 'CASCADE');

    }

    public function down()
    {
        $this->forge->dropForeignKey('skills', 'skills_developer_id_foreign');
    }
}
