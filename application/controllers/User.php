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
		
		if($this->session->userdata('username') == ''){
			
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
			'email','Email Address','required|valid_email|trim|is_unique[user_account.Email]',
			array(
				'required' => '%s is required',
				'is_unique' => '%s is already taken',
				'valid_email' => '%s is not valid',
			)
		);

		$this->form_validation->set_rules(
			'username','Username','required|trim|is_unique[user_account.Username]',
			array(
				'required' => '%s is required',
				'is_unique' => '%s is already taken',
				'valid_email' => '%s is not a valid Email.',
			)
		);

		$this->form_validation->set_rules(
			'passwd','Password','required|min_length[6]|trim',
			array(
				'required' => 'Password is required',
				'min_length[6]' => 'Password must contain atleast six (6) alpha numeric characters'
			)
		);

		$this->form_validation->set_rules('account_type','Account Type','required|account_type|trim',
			array(
				'required' => 'Account Type is required',
				'account_type' => '%s is not a valid Account Type',
			)
		);

		$this->form_validation->set_rules('phone','Mobile number','required|min_length[11]|trim',
			array(
				'required' => 'Mobile number is required',
			)
		);

		$this->form_validation->set_rules('last_name','Last name','required|min_length[2]|trim',
			array(
				'required' => 'Last name is required',
				'min_length[2]' => 'Last name must contain at least two (2) letters',
			)
		);


		$this->form_validation->set_rules('first_name','First name','required|trim',
			array(
				'required' => 'First name is required',			)
		);


		$this->form_validation->set_rules(
			'conf_passwd','Confirm Password','required|matches[passwd]',
			array(
				'required' => 'Password is required',
				'matches["password"]' => 'Confirmation Password does not match',
			)
		);	

		if ($this->form_validation->run() == FALSE){

			$this->register();

		}else{

			if($this->User_model->process_registration()){
				$this->session->set_flashdata('item', '<div class="alert alert-success" role="alert" style="height: 50px;">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
									
									<div class="row">
										<p><span class="fa fa-check-circle"></span>
					<strong>Success</strong>&emsp;Account created</p>
									</div>
								</div>');

				redirect('login');

			}else{

				$this->register();
		
			}
			


		}

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

				$this->session->set_flashdata('item', '<div class="alert alert-danger" role="alert" style="height: 50px;">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
									
									<div class="row">
										<p><span class="fa fa-exclamation-triangle"></span>
					<strong>Invalid</strong>&emsp;Username or Password</p>
									</div>
								</div>');
				$this->login();
				//$this->load->view('layouts/application',$data);

			}
			


		}

	}
}
