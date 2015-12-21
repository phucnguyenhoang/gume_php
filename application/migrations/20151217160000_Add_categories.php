<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_categories extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'alias' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 250
            ),
            'thumb' => array(
                'type' => 'VARCHAR',
                'constraint' => 250,
                'null' => TRUE
            ),
            'is_publish' => array(
                'type' => 'BOOLEAN',
                'default' => false,
                'null' => TRUE
            ),
            'created_at' => array(
                'type' => 'DATETIME'
            ),
            'updated_at' => array(
                'type' => 'DATETIME'
            ),
            'deleted_at' => array(
                'type' => 'DATETIME',
                'null' => TRUE
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('categories');
    }

    public function down()
    {
        $this->dbforge->drop_table('categories');
    }
}