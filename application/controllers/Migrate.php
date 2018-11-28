<?php defined ( "BASEPATH" ) or exit ( "No direct script access allowed" );

class Migrate extends CI_Controller {
  public function __construct() {
    parent::__construct ();
    
    $this->input->is_cli_request () or exit ( "Execute via command line: php index.php migrate" );
    
    $this->load->library('migration');
    $this->load->dbforge();

  }

  public function index() {

    if (! $this->migration->current ()) {

      show_error ( $this->migration->error_string () );

    } else {
      
      echo 'Migrations ran successfully!'.PHP_EOL;
      echo "version: ";
      echo $this->migration->current ();

    }

  }

  public function migration($name){
    $this->make_migration_file($name);
  }

  #*
  public function latest(){
    
    $this->migration->latest();
    echo $this->migration->error_string() . PHP_EOL;

  }

  public function reset(){
    
    $this->migration->version(0);
    echo $this->migration->error_string(). PHP_EOL;

  }

  public function migrate($version = null) {
    
    if ($version != null) {
      if ($this->migration->version($version) === FALSE) {

        show_error($this->migration->error_string());
      } else {
        echo "Migrations run successfully" . PHP_EOL;
      }

      return;
    }

    if ($this->migration->latest() === FALSE) {
      show_error($this->migration->error_string());
    } else {
      echo "Migrations run successfully" . PHP_EOL;
    }

  }

  public function seeder($name) {
    self::make_seed_file($name);
  }

  public function seed($name) {
  
    $seeder = new Seeder();
    $seeder->call($name);
  
  }

  protected function make_migration_file($name) {
    
    $date = new DateTime();
    $timestamp = $date->format('YmdHis');

    $table_name = strtolower($name);

    $path = APPPATH . "database/migrations/$timestamp" . "_" . "$name.php";

    $my_migration = fopen($path, "w") or die("Unable to create migration file!");

    $migration_template = "<?php

      class Migration_$name extends CI_Migration {

        public function up() {
          \$this->dbforge->add_field(array(
            'id' => array(
              'type' => 'INT',
              'constraint' => 11,
              'auto_increment' => TRUE
            )
          ));

          \$this->dbforge->add_key('id', TRUE);
          \$this->dbforge->create_table('$table_name');

        }

        public function down() {
          \$this->dbforge->drop_table('$table_name');
        }

      }";

    fwrite($my_migration, $migration_template);

    fclose($my_migration);

    echo "$path migration has successfully been created." . PHP_EOL;

  }

  protected function make_seed_file($name) {
    $path = APPPATH . "database/seeds/$name.php";

    $my_seed = fopen($path, "w") or die("Unable to create seed file!");

    $seed_template = "<?php

      class $name extends Seeder {

        private \$table = 'users';

        public function run() {
          \$this->db->truncate(\$this->table);

          //seed records manually
          \$data = [
            'user_name' => 'admin',
            'password' => '9871'
          ];

          \$this->db->insert(\$this->table, \$data);

          //seed many records using faker
          \$limit = 33;

          echo \"seeding \$limit user accounts\";

          for (\$i = 0; \$i < \$limit; \$i++) {
            echo \".\";

            \$data = array(
              'user_name' => \$this->faker->unique()->userName,
              'password' => '1234',
            );

            \$this->db->insert(\$this->table, \$data);
          }

          echo PHP_EOL;
        }
      }";

    fwrite($my_seed, $seed_template);

    fclose($my_seed);

    echo "$path seeder has successfully been created." . PHP_EOL;
  }

}
?>