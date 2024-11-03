<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Slider extends Seeder
{
    public function run()
    {
        $data = [            
            'photo'    => 1,
        ];
        // Simple Queries
        $this->db->table('slidercontroller')->insert($data);
    }
}
