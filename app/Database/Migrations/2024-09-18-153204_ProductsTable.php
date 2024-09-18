<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        =>  [
                'type'          =>  'INT',
                'constraint'    =>  '11',
                'unsigned'      =>  true,
                'auto_increment'=>  true
            ],

            'name'      =>  [
                'type'          =>  'VARCHAR',
                'constraint'    =>  '200'
            ],

            'quantity'      =>  [
                'type'          =>  'INT',
                'constraint'    =>  '5'
            ],

            'price'      =>  [
                'type'          =>  'INT',
                'constraint'    =>  '11'
            ],

            'created_at'      =>  [
                'type'          =>  'DATETIME',
            ],

            'updated_at'      =>  [
                'type'          =>  'DATETIME',
            ],
        ]);

        $this->forge->addKey( 'id', true );
        $this->forge->createTable( 'products', true );
    }

    public function down()
    {
        $this->forge->dropTable( 'products', true );
    }
}
