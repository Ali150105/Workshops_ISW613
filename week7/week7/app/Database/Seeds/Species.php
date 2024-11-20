<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Species extends Seeder
{
    public function run()
    {
        $data = ['name' => 'Poró', 'scientific_name' => 'Poromious'];
        $this->db->table('species')->insert($data);
        $data = ['name' => 'Guanacaste', 'scientific_name' => 'Guanatree'];
        $this->db->table('species')->insert($data);
        $data = ['name' => 'Ciprés', 'scientific_name' => 'Cipress Hill'];
        $this->db->table('species')->insert($data);
    }
}
