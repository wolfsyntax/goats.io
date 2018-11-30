<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Financial extends CI_Controller {

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


/*	public function index()
*	{
*		$this->load->view('welcome_message');
*	}
*/

	public function __construct(){

		parent::__construct();

		//Controller: Plural (AppController)	
		//Model: Singular (ModelName)

		$this->load->model('Goat_model');

	}

	public function index()
	{
		
	
		$data['title'] = 'Home';
		$data['body'] = 'financials/expense';

		$this->load->view('layouts/application',$data);



	}

	public function purchase()
	{
		
	
		$data['title'] = 'Home';
		$data['body'] = 'financials/purchases';

		$this->load->view('layouts/application',$data);



	}




}
