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

		//Controller: Plural (AppController)	
		//Model: Singular (ModelName)

		$this->load->model('Goat_model');

	}

	public function index()
	{
		
		if($this->session->userdata('username') != ''){
			
			$data['title'] = 'Add Goats';
			$data['body'] = 'goats/add_goats';

			$data['sire_record'] = $this->Goat_model->select_applet('goat_profile',"gender = 'male'");

			$data['dam_record'] = $this->Goat_model->select_applet('Goat_Profile',"gender = 'female'");

			$this->load->view('layouts/application',$data);

		}else{

			redirect('dashboard');

		}

	}

	public function validate_goat_details(){

		if($this->session->userdata('username') != ''){
			
			self::goat_profile_validator();



#			$this->form_validation->set_rules('sire_id','Sire ID','required|xss_clean|trim|numeric|is_sire_exist[goat_profile.eartag_id]',
#				array(
#					'required' => '{field} is required',
#					'is_sire_exist' => '{field} do not exist',
#				)
#			);

#			$this->form_validation->set_rules('dam_id','Dam ID','required|xss_clean|trim|numeric|is_dam_exist[goat_profile.eartag_id],
#				array(
#					'required' => '{field} is required',
#					'is_dam_exist' => '{field} do not exist',
#				)
#			);


			$this->form_validation->set_error_delimiters('<small class="form-text text-danger">', '</small>');

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
						<strong>Failed</strong>&emsp;Error: Cannot Add Goat.</p>
										</div>
									</div>');
				}

				redirect('dashboard');
			}
		}

	}

	public function goat_profile_validator(){

		$this->form_validation->set_rules('eartag_id','Tag ID','required|numeric|xss_clean|trim|is_unique[goat_profile.eartag_id]',
				array(
					'required' => '{field} is required',
					'numeric' => 'Not a valid {field} provided. Only digits are allowed',
					'is_unique' => '{field} is already existing',
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


			$this->form_validation->set_rules('birth_weight','Birth Weight','required|xss_clean|trim|numeric',
				array(
					'required' => '{field} is required',
				)
			);			
			
			$this->form_validation->set_rules('sire_id','Sire ID','xss_clean|trim|numeric|is_sire_exist[goat_profile.eartag_id]',
				array(
					'required' => '{field} is required',
					'is_sire_exist' => '{field} do not exist',
				)
			);

			$this->form_validation->set_rules('dam_id','Dam ID','xss_clean|trim|numeric|is_dam_exist[goat_profile.eartag_id]',
				array(
					'required' => '{field} is required',
					'is_dam_exist' => '{field} do not exist',
				)
			);

	}
	/**
	 * Breeding Module
	 *
	 * Description... Line 1
	 * Description... Line 2
	 * Description... Line End
	 *
//	 * @param	mixed	$field
//	 * @param	string	$label
//	 * @param	mixed	$rules
//	 * @param	array	$errors
//	 * @return	CI_Form_validation
	 */

	public function breeding_module()
	{
		
		if($this->session->userdata('username') != ''){
			
			$data['title'] = 'Goat Breeding';
			$data['body'] = 'goats/breeding';
			$data['sire_record'] = $this->Goat_model->select_applet('goat_profile',"gender = 'male'");

			$data['dam_record'] = $this->Goat_model->select_applet('Goat_Profile',"gender = 'female'");

			$data['test'] = $this->Goat_model->select_applet('goat_profile');

			$this->load->view('layouts/application',$data);

		}else{

			redirect('dashboard');

		}

	}

	public function validate_breeding_info()
	{
		
		if($this->session->userdata('username') != ''){
			
			$this->form_validation->set_rules('dam_id','Dam ID','required|xss_clean|trim|numeric|is_dam_exist[goat_profile.eartag_id]',
				array(
					'required' => 'Dam ID is required',
					'is_dam_exist' => 'Do not exist as a {field}',
				)
			);

			$this->form_validation->set_rules('sire_id','Sire ID','required|xss_clean|trim|numeric|is_sire_exist[goat_profile.eartag_id]',
				array(
					'required' => 'Sire ID is required',
					'is_sire_exist' => 'Do not exist as a {field}',
				)
			);

			$this->form_validation->set_rules('breed_date','Breed Date','required|xss_clean|trim',
				array(
					'required' => 'Breed Date is required',
				)
			);

			$this->form_validation->set_rules('breed_date','Breed Date','required|xss_clean|trim',
				array(
					'required' => 'Breed Date is required',
				)
			);

			$this->form_validation->set_error_delimiters('<small class="form-text text-danger">', '</small>');

			if($this->form_validation->run() === FALSE){

				self::breeding_module();

			}else{
				
				$message = '';						
				$flag = 0;		
				if($this->Goat_model->add_breeding_record()){

					$message = '<span class="fa fa-check-circle"></span>
						<strong>Success</strong>&emsp; Breeding record added';
					
					$flag = 1;

				}else{

					$message = '<span class="fa fa-exclamation-circle"></span>
						<strong>Failed</strong>&emsp; Breeding Record already existed';

				}

				

				$content = '<div class="alert '.($flag === 1 ? 'alert-success' : 'alert-danger').' col-12" role="alert" style="height: 50px;">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button><div class="row">
											<p>'. $message . '</p>
										</div>
									</div>';

				
				$this->session->set_flashdata('goat', $content);
				if($flag === 1){
					
					redirect('dashboard');

				}else{

					self::breeding_module();

				}

			}


		}else{

			redirect('dashboard');

		}

	}	

	public function manage_loss(){
		
		if($this->session->userdata('username') != ''){
			$data['body'] = 'goats/manage_loss';
			$data['title'] = '';
			$data['goat_record'] = $this->Goat_model->select_applet('goat_profile',"status = 'active'");

			$this->load->view('layouts/application',$data);
		}else{
			show_404();
		}

	}

	public function record_loss(){

		self::manage_loss_validator();

		$this->form_validation->set_error_delimiters('<small class="form-text text-danger">', '</small>');
		
		if($this->form_validation->run() === FALSE){

			self::manage_loss();

		}else{

			$flag = 0;

			if($this->Goat_model->manage_loss()){

				$message = '<span class="fa fa-check-circle"></span>
						Loss Details successfully added';
				
				$flag = 1;

			}else{

				$message = '<span class="fa fa-exclamation-circle"></span>
						Failed to add Loss Details';

			}


			$content = '<div class="alert '.($flag === 1 ? 'alert-success' : 'alert-danger').' col-12" role="alert" style="height: 50px;">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
	<div class="row">
		<p>'. $message . '</p>
	</div>
</div>';	

			self::manage_loss();

		}
	}

	public function manage_loss_validator(){

		$this->form_validation->set_rules('eartag_id', 'Tag ID', 'trim|required|numeric|is_exist[goat_profile.eartag_id]|xss_clean',array(
			'is_exist' => '{field} do not exist',
			'required' => '{field} is required',
		));

		$this->form_validation->set_rules('loss_caused', 'Caused of Loss', 'trim|required|xss_clean',array(
			'required' => '{field} is required',
		));

		$this->form_validation->set_rules('loss_date', 'Date of Loss', 'trim|required|xss_clean',array(
			'required' => '{field} is required',
		));


		$this->form_validation->set_rules('description', 'Notes / Description', 'trim|xss_clean|required',array(
			'required' => '{field} is required',
		));
		
		
	}
}
