<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDeveloperIdToSkills extends Migration
{
    public function up()
    {
        $fields = [
            'developer_id' => [
                'type' => 'INT',
                'constraint' => 5,
            ]
        ];

        $this->forge->addColumn('Skills', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('Skills', 'developer_id');
    }
}