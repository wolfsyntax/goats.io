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

//		$this->load->library('form_validation');
		$this->load->model('User_model');
//		$this->load->driver('session');

	}

	public function index()
	{
		
		$data['title'] = 'Register';
		$data['body'] = 'users/register';
		
		$this->load->view('layouts/application',$data);

	}

	public function register()
	{
		if($this->session->userdata() == ''){
			
			$data['title'] = 'Register';
			$data['body'] = 'users/register';
			$data['user_type'] = '';
			
			$this->load->view('layouts/application',$data);

		}else{

			redirect('dashboard');

		}

	}

	public function verify_signup()
	{
		

		$this->form_validation->set_rules(
			'email','Email Address','required|min_length[12]|valid_email|trim',
			array(
				'required' => 'Email Address is required',
				'min_length[12]' => 'Email Address must be a valid email address i.e: yahoo.com, gmail.com'
			)
		);


			$this->form_validation->set_rules('password','Password','required|min_length[6]',
				array(
					'required' => 'Password is required',
					'min_length[6]' => 'Password must contain atleast six (6) alpha numeric characters'
				)
			);

			$this->form_validation->set_rules('user_type','Account Type','required|account_type',
				array(
					'required' => 'Account Type is required',
					'account_type' => 'Invalid Account Type: Administrator or Employee only'
				)
			);

			$this->form_validation->set_rules('cpassword','Confirm Password','required|matches[password]',
				array(
					'required' => 'Password is required',
					'matches["password"]' => 'Password does not match'
				)
			);	

		$data['title'] = 'Login';
		$data['body'] = 'users/login';	

	}	

	public function login()
	{
		//echo validation_errors('<span class="error">', '</span>');
		if($this->session->userdata('username') == ''){
			
			$data['title'] = 'Login';
			$data['body'] = 'users/login';	

			$this->load->view('layouts/application',$data);

		}else{

			redirect('dashboard');

		}
	}

	public function validate_login(){

		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean',array(
			'required' => '%s is required',
			'xss_clean' => '%s is not valid'
			));

		$this->form_validation->set_rules('passwd', 'Password', 'trim|required|xss_clean',array(
			'required' => '%s is required',
			'xss_clean' => '%s is not valid'
			));

		$this->form_validation->set_error_delimiters('<small class="form-text text-danger">', '</small>');

		$data['title'] = 'Login';
		$data['body'] = 'users/login';	
		
		if ($this->form_validation->run() == FALSE){

			$this->load->view('layouts/application',$data);

		}else{

			if($this->User_model->validate_login()){

				redirect('dashboard');

			}else{

				$this->session->set_flashdata('item', '<span class="fa fa-exclamation-triangle"></span>
					<strong>Invalid</strong>&emsp;Username or Password');
				$this->login();
				//$this->load->view('layouts/application',$data);

			}
			


		}

	}
}
