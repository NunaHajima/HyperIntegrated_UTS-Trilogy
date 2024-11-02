<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Testimoni extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "name" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "desc" => [
                "type"=> "VARCHAR",
                "constraint" => "10000",
            ],
            "photo" => [
                "type"=> "TEXT",
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('testimonicontroller', true); 
    }

    public function down()
    {
        $this->forge->dropTable('testimonicontroller', true); 
    }
}
