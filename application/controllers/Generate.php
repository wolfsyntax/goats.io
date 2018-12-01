<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Generate extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		
		parent::__construct();
		$this->input->is_cli_request() or exit("Execute via Command Line: php index.php generate <option>:\n");

	}
	
	public function index()
	{	
		echo "Usage: php index.php generate <option>\n:options:\tcontroller";
	}

	public function controller($name){
		
		echo "Controller: $name";
		
		$path = APPPATH ."controllers/".$name."s.php";
		$_file = fopen($path,"w") or die("Error ");

		$template = "<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class $name extends CI_Controller {

		public function __construct(){
			
			\$parent::__construct();
			\$this->load->model('".$name."_model');
		}

		public function index(){
			\$data = array(
				'title' => '',
				'body' => '',
			);

				\$this->load->view('layouts\application',\$data);
			}

		}
	?>";

		fwrite($_file,$template);
		fclose($_file);

		$template = "<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Goat_model extends CI_Model {

		public function __construct(){
			
			parent::__construct();
			\$this-load->dbforge();
		}

	}
		?>";

		$_file = fopen(APPPATH."models/".$name."_model.php","w") or die("Cannot Create file");
		fwrite($_file,$template);
		fclose($_file);

		mkdir (APPPATH."views/$name", 0700);

		$_file = fopen(APPPATH."views/$name/_forms.php","w") or die("Cannot Create file");
		fwrite($_file,"");
		fclose($_file);

		$_file = fopen(APPPATH."views/$name/edit.php","w") or die("Cannot Create file");
		fwrite($_file,"");
		fclose($_file);

		$_file = fopen(APPPATH."views/$name/index.php","w") or die("Cannot Create file");
		fwrite($_file,"");
		fclose($_file);

		$_file = fopen(APPPATH."views/$name/new.php","w") or die("Cannot Create file");
		fwrite($_file,"");
		fclose($_file);

		$_file = fopen(APPPATH."views/$name/show.php","w") or die("Cannot Create file");
		fwrite($_file,"");
		fclose($_file);


		echo "$path controller has successfully created". PHP_EOL;

	}
}

