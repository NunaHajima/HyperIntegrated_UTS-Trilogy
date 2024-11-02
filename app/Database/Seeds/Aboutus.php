<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Aboutus extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'contoh',
            'job'    => 'contoh',
            'photo'    => 1,
        ];
        // Simple Queries
        $this->db->table('aboutuscontroller')->insert($data);
    }
}
