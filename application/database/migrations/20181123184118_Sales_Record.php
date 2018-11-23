<?php

      class Migration_Sales_Record extends CI_Migration {

        public function up() {

          $this->dbforge->add_field(array(
            'sales_id' => array(
              'type' => 'INT',
              'constraint' => 11,
              'auto_increment' => TRUE,
            ),
            'transact_date' => array(
              'type' => 'DATE',
            ),
            'price' => array(
              'type' => 'FLOAT',
              'constraint' => '8,2',
            ),
            'weight' => array(
              'type' => 'FLOAT',
              'constraint' => '8,2',
            ),
            'amount' => array(
              'type' => 'FLOAT',
              'constraint' => '8,2',
            ),
            'description' => array(
              'type' => 'TEXT',
              'null' => TRUE,
            ),
            'user_id' => array(
              'type' => 'INT',
              'constraint' => 11,
            ),
            'eartag_id' => array(
              'type' => 'INT',
              'constraint' => 11,
            ),
          ));

          $this->dbforge->add_field('CONSTRAINT fk_sales_goat FOREIGN KEY (`eartag_id`) REFERENCES Goat_Profile(`eartag_id`)');

          $this->dbforge->add_field('CONSTRAINT fk_sales_user FOREIGN KEY (`user_id`) REFERENCES User_Account(`user_id`)');

          $this->dbforge->add_key('sales_id', TRUE);

          $this->dbforge->create_table('sales_record',TRUE,array('AUTO_INCREMENT' => '1',));


        }

        public function down() {
          $this->dbforge->drop_table('sales_record');
        }

      }