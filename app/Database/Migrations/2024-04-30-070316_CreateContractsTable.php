<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateContractsTable extends Migration
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

            'business_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],

            'developer_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],

            'project_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],

            'description' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'est_duration' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],

            'start_date' => [
                'type' => 'DATE',
            ],

            'end_date' => [
                'type' => 'DATE',
            ],

            'hourly_rate' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],

            'weekly_hours' => [
                'type' => 'INT',
                'constraint' => 4,
            ],

            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('business_id', 'Businesses', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('developer_id', 'Developers', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('Contracts');
    }

    public function down()
    {
        $this->forge->dropTable('Contracts');

    }
}
