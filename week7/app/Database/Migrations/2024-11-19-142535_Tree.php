<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tree extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'price' => [
                'type'       => 'INT',
                'constraint'     => 5,
                'unsigned'       => true
            ],
            'species_id' => [
                'type'       => 'INT',
                'constraint'     => 5,
                'unsigned'       => true
            ]

        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('species_id', 'species', 'id');
        $this->forge->createTable('trees');
    }

    public function down()
    {
        $this->forge->dropTable('trees');
    }
}
