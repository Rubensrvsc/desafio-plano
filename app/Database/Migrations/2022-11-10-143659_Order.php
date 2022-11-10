<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Order extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'description' => [
                'type' => 'VARCHAR',
                'constraint' => 300
            ],
            'value' => [
                'type' => 'FLOAT'
            ],
            'cnpj' => [
                'type' => 'VARCHAR',
                'constraint' => 14
            ]
        ]);

        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('orders', true);

    }

    public function down()
    {
        $this->forge->dropTable('orders');
    }
}
