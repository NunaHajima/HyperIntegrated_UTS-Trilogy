<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTestimoni extends Migration
{
    public function up()
    {
        $fields = [
            "rating" => [
                "type" => "TINYINT",
                "constraint" => 1, // Menggunakan skala 1-5
                "unsigned" => true,
                "default" => 0, // Default rating 0 jika belum diisi
            ],
        ];

        $this->forge->addColumn('testimonicontroller', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('testimonicontroller', 'photo');
    }
}
