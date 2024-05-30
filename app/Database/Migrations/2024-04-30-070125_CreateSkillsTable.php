<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSkillsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],

            'programming_languages' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],

            'category' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],

            'frameworks' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],

            'apps' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],

        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('Skills');
    }

    public function down()
    {
        $this->forge->dropTable('Skills');

    }
}
