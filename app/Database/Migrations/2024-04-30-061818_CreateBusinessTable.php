<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBusinessTable extends Migration
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

            'company_name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],

            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],

            'industry' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],

            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],

            'budget' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],

            'location' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('Businesses');
        
    }

    public function down()
    {
        $this->forge->dropTable('Businesses');
    }
}
