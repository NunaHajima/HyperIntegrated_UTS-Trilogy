<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Newscontroller extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 100; $i++) {
            $data = [
                'judul' => $faker->word(),
                'berita' => $faker->word(),
            ];
            $this->db->table('newscontroller')->insert($data);
        }
    }
}
