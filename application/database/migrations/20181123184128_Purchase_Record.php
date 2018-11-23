<?php

      class Migration_Purchase_Record extends CI_Migration {

        public function up() {

          $this->dbforge->add_field(array(
            'purchase_id' => array(
              'type' => 'INT',
              'constraint' => 11,
              'auto_increment' => TRUE,
            ),
            'eartag_id' => array(
              'type' => 'INT',
              'constraint' => 11,
            ),
            'purchase_weight' => array(
              'type' => 'FLOAT',
              'constraint' => '8,2',
            ),
            'amount' => array(
              'type' => 'FLOAT',
              'constraint' => '8,2',
            ),
            'vendor_name' => array(
              'type' => 'VARCHAR',
              'constraint' => '255',
              'default' => 'N/A',
            ),
            'description' => array(
              'type' => 'TEXT',
            ),
            'purchase_date' => array(
              'type' => 'DATE',
            ),
            'user_id' => array(
              'type' => 'INT',
              'constraint' => 11,
            ),            
          ));

          $this->dbforge->add_key('purchase_id', TRUE);

          $this->dbforge->add_field('CONSTRAINT fk_purchase_user FOREIGN KEY (`user_id`) REFERENCES User_Account(`user_id`)');

          $this->dbforge->add_field('CONSTRAINT fk_purchase_goat FOREIGN KEY (`eartag_id`) REFERENCES Goat_Profile(`eartag_id`)');          

          $this->dbforge->create_table('purchase_record',TRUE,array('AUTO_INCREMENT' => '1',));

        }

        public function down() {
          $this->dbforge->drop_table('purchase_record');
        }

      }