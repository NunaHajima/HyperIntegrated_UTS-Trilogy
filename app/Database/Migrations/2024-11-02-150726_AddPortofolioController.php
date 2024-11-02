<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPortofolioController extends Migration
{
    public function up()
    {
        $fields = [
            "deskripsi" => [
                "type"=> "TEXT",
            ],
        ];

        $this->forge->addColumn('portofoliocontroller', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('portofoliocontroller', 'photo');
    }
}
