<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDevelopersTable extends Migration
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

            'first_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],

            'last_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],

            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],

            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'hourly_rate' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],

            'location' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],

            'language' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],

            'preferred_hours' => [
                'type' => 'INT',
                'constraint' => 4,
            ],

            'contact_info' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],

            'bio' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],


        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('Developers');
        
    }

    public function down()
    {
        $this->forge->dropTable('Developers');

    }
}
