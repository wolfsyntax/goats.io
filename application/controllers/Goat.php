<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goat extends CI_Controller {

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
		//$this->load->library('../controllers/user');
		//$this->user->test();
		//Controller: Plural (AppController)	
		//Model: Singular (ModelName)
		//require_once(dirname(__FILE__) . "/User.php");
		$this->load->model('Goat_model');

	}

	public function index()
	{
		
		if($this->session->userdata('username') != ''){
			
			$data['title'] = 'Add Goats';
			$data['body'] = 'goats/add_goats';
			$this->load->view('layouts/application',$data);

		}else{

			redirect('dashboard');

		}

	}

	public function validate_goat_details(){

		if($this->session->userdata('username') != ''){
			
			$this->form_validation->set_rules('eartag_id','Tag ID','required|numeric|xss_clean|trim',
				array(
					'required' => '{field} is required',
					'numeric' => 'Not a valid {field} provided. Only digits are allowed',
				)
			);

			$this->form_validation->set_rules('tag_color','Tag Color','required|xss_clean|trim|alpha_spaces',
				array(
					'required' => 'Tag Color is required',
					'alpha_spaces'=> 'The {field} field may only contain alphabetical characters and space.',
				)
			);

			$this->form_validation->set_rules('gender','Gender','required|xss_clean|trim',
				array(
					'required' => '{field} is required',
				)
			);

			$this->form_validation->set_rules('body_color','Body Color','required|xss_clean|trim|alpha_spaces',
				array(
					'required' => 'Body Color is required',
					'alpha_spaces'=> 'The {field} field may only contain alphabetical characters and space.',

				)
			);

			$this->form_validation->set_rules('birth_date','Birth Date','required|xss_clean|trim',
				array(
					'required' => '{field} is required',
				)
			);

			$this->form_validation->set_rules('sire_id','Sire ID','required|xss_clean|trim|numeric',
				array(
					'required' => '{field} is required',
				)
			);

			$this->form_validation->set_rules('dam_id','Dam ID','required|xss_clean|trim|numeric',
				array(
					'required' => '{field} is required',
				)
			);

			if($this->form_validation->run() === FALSE){

				self::index();

			}else{

				if($this->Goat_model->add_goat()){
					$this->session->set_flashdata('goat', '<div class="alert alert-success col-12" role="alert" style="height: 50px;">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
										
										<div class="row">
											<p><span class="fa fa-check-circle"></span>
						<strong>Success</strong>&emsp;New goat added successfully. <a href="'.base_url().'dashboard">Dashboard</a></p>
										</div>
									</div>');

					

				}else{

					$this->session->set_flashdata('goat', '<div class="alert alert-danger col-12" role="alert" style="height: 50px;">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
										
										<div class="row">
											<p><span class="fa fa-exclamation-circle"></span>
						<strong>Success</strong>&emsp;Error: Cannot Add Goat.</p>
										</div>
									</div>');
				}

				redirect('goats/new');
			}
		}

	}

}
