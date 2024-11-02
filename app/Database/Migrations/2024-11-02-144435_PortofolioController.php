<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PortofolioController extends Migration
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
            "photo" => [
                "type"=> "TEXT",
            ],
            "photo2" => [
                "type"=> "TEXT",
            ],
            "photo3" => [
                "type"=> "TEXT",
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('portofoliocontroller', true); 
    }

    public function down()
    {
        $this->forge->dropTable('portofoliocontroller', true); 
    }
}
