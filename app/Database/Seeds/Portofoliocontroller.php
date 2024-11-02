<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Portofoliocontroller extends Seeder
{
    public function run()
    {
        $data = [
            'judul' => 'contoh',
            'deskripsi' => 'ini deskripsinya',
            'photo'    => 1,
            'photo2'    => 1,
            'photo3'    => 1,
        ];
        // Simple Queries
        $this->db->table('portofoliocontroller')->insert($data);
    }
}
