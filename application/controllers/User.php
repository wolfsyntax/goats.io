<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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

		$this->load->library('form_validation');

	}

	public function index()
	{
		
		$data['title'] = 'Register';
		$data['body'] = 'users/register';
		
		$this->load->view('layouts/application',$data);

	}

	public function register()
	{
		
		$data['title'] = 'Register';
		$data['body'] = 'users/register';
		
		$this->load->view('layouts/application',$data);

	}

	public function verify_signup()
	{
		
		echo "<script>alert('Verifying')</script>";

#		$this->load->view('welcome_message');
		$data['title'] = 'Verify: Registration';
		$data['body'] = 'users/register';
		
		$this->load->view('layouts/application',$data);

	}	

	public function login()
	{
		//echo validation_errors('<span class="error">', '</span>');
		$data['title'] = 'Login';
		$data['body'] = 'users/login';
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');

		$this->form_validation->set_rules('passwd', 'Password', 'trim|required|xss_clean');
		
		if ($this->form_validation->run() == FALSE){

			$this->load->view('layouts/application',$data);
			
		}else{
			
		}
	}

	public function validate_login(){

	}
}
