<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OurService extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "judul" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "service" => [
                "type"=> "VARCHAR",
                "constraint" => "10000",
            ],
            "photo" => [
                "type"=> "TEXT",
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('servicecontroller', true); 
    }

    public function down()
    {
        $this->forge->dropTable('servicecontroller', true); 
    }
}
