<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Ourservicecontroller extends Seeder
{
    public function run()
    {
        $data = [
            'judul' => 'contoh',
            'service'    => 'contoh',
            'photo'    => 1,
        ];
        // Simple Queries
        $this->db->table('servicecontroller')->insert($data);
    }
}
