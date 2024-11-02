<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Testimoni extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'contoh',
            'desc'    => 'contoh',
            'photo'    => 1,
            'rating'    => 4,
        ];
        // Simple Queries
        $this->db->table('testimonicontroller')->insert($data);
    }
}
