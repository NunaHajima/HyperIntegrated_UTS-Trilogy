<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class News extends Migration
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
            "berita" => [
                "type"=> "VARCHAR",
                "constraint" => "10000",
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('newscontroller', true); 
    }

    public function down()
    {
        $this->forge->dropTable('newscontroller', true); 
    }
}
