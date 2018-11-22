<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Goat_model extends CI_Model {

		public function __construct(){

			parent::__construct();
			$this->load->dbforge();
			
		}

		public function add_goat(){

			if(!empty($_POST)){

				$data = array(

					'eartag_id'		=>	$this->input->post('eartag_id', TRUE),
					'eartag_color'	=>	$this->input->post('tag_color', TRUE),
					'gender'		=>	$this->input->post('gender', TRUE),
					'body_color'	=>	$this->input->post('body_color', TRUE),
					'birth_date'	=>	$this->input->post('birth_date', TRUE),
					'sire_id'		=>	$this->input->post('sire_id',TRUE),
					'dam_id'		=>	$this->input->post('dam_id',TRUE),

				);
				


				return $this->db->insert('goat_profile',$data);

			}
			
		}			



		public function process_registration(){

			if(!empty($_POST)){

				$data = array(

					'eartag_id'		=>	$this->input->post('eartag_id', TRUE),
					'eartag_color'	=>	$this->input->post('tag_color', TRUE),
					'gender'		=>	$this->input->post('gender', TRUE),
					'body_color'	=>	$this->input->post('body_color', TRUE),
					'birth_date'	=>	$this->input->post('birth_date', TRUE),
					'sire_id'		=>	$this->input->post('sire_id',TRUE),
					'dam_id'		=>	$this->input->post('dam_id',TRUE),

				);
				


				return $this->db->insert('goat_profile',$data);

			}
				
		}

		public function emailer($email, $new_pass){

			$this->email->from('mail.goats@gmail.com','G.O.A.T.S');

			$this->email->to($email);

			$this->email->subject("Your password has been changed ".$this->session->userdata('user_email')."!");
				
			$this->email->message('<h1>Your Password has been changed!</h1><br/>New Password: '.$new_pass.'.<br/>For security purposes please delete this email. Note: <i>You can change your password on your profile settings</i><br/>-The Team');
				
			if($this->email->send()){
			
				echo "<script>alert('Email Sent');</script>";

			}else{
			
				echo "<script>alert('Error: Email Not Sent');</script>";

			}

		}

		public function confirm_change($option = 0){
			
			if(!empty($_POST)){

				if($option == 0){
					
					$first_name = $this->input->post('first_name', TRUE);
					$last_name = $this->input->post('last_name', TRUE);
					$phone = $this->input->post('phone',TRUE);

					$data = array(

						'first_name'		=>	$first_name,
						'last_name'		=>	$last_name,
						'Phone'			=>	$phone,

					);


					
					$this->db->where('User_ID',$this->session->userdata('user_id'));

					if($this->db->update('user_account',$data)){
						
						$this->session->unset_userdata('user_fname');
						$this->session->set_userdata('user_fname', $first_name);

						$this->session->unset_userdata('user_lname');
						$this->session->set_userdata('user_lname', $last_name);

						$this->session->unset_userdata('user_phone');
						$this->session->set_userdata('user_phone', $phone);

						return true;

					}else{

						return false;

					}

				} else if($option == 1) {

					$data = array(
						'Password'		=>	hash('sha256',$this->input->post('passwd', TRUE)),
					);					
				
					$this->db->where('User_ID',$this->session->userdata('user_id'));
					return $this->db->update('user_account',$data); 

				}else {

					$data = array(
						'Password'		=>	hash('sha256',$this->input->post('passwd', TRUE)),
					);					
				
					$this->db->where('Email',$this->session->userdata('email'));

					$this->emailer($this->session->userdata('email'), $this->input->post('passwd'));

					return $this->db->update('user_account',$data); 

				}

			}	

		}


	}
?>
