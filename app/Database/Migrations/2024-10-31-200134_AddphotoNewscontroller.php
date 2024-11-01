<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddphotoNewscontroller extends Migration
{
    public function up()
    {
        $fields = [
            "photo" => [
                "type"=> "TEXT",
            ],
        ];

        $this->forge->addColumn('newscontroller', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('newscontroller', 'photo');
    }
}
