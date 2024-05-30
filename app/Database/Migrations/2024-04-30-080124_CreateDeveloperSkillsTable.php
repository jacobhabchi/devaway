<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDeveloperSkillsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'developer_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'skill_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
        ]);

        $this->forge->addForeignKey('developer_id', 'developers', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('skill_id', 'skills', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('developer_skills');
    }

    public function down()
    {
        $this->forge->dropTable('developer_skills', true);
    }
}
