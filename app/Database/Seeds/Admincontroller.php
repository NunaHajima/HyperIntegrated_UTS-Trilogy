<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Admincontroller extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            $data = [
                'name' => $faker->firstName() . " " . $faker->lastName(),
                'email'    => $faker->email(),
                'password'    =>  md5("secret"),
            ];
            $this->db->table('admin')->insert($data);
        }
    }
}
