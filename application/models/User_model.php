<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class User_model extends CI_Model {

		public function __construct(){

			parent::__construct();
			$this->load->dbforge();
			
		}

		public function validate_login(){
			
			if(!empty($_POST)){

				$username = $this->input->post('username',TRUE);
				$password = hash('sha256',$this->input->post('passwd',TRUE));
				
				$this->db->where('Username',$username);
				$this->db->where('Password',$password);

				if($this->input->post('remember')){
					$this->session->unset_userdata('remember_me');
					$this->session->set_userdata('remember_me', TRUE);

				}else{

					//Delete Session 'remember_me' if 'remember me' is not checked
					$this->session->unset_userdata('remember_me');
					$this->session->set_userdata('remember_me', FALSE);

				}

				$query = $this->db->get('User_Account');

				if($query->num_rows() == 1){

					$this->session->unset_userdata('user_id');
					$this->session->unset_userdata('user_email');
					$this->session->unset_userdata('username');
					$this->session->unset_userdata('user_fname');
					$this->session->unset_userdata('user_lname');
					$this->session->unset_userdata('user_phone');
					$this->session->unset_userdata('farm_name');
					$this->session->unset_userdata('user_type');

					$this->session->unset_userdata('notif');
					foreach($query->result() as $row){
						
						//Case Sensitive: $row->field_name, field_name is case-sensitive

						$this->session->set_userdata('user_email',$row->Email);
						$this->session->set_userdata('username',$row->Username);
						$this->session->set_userdata('user_id',$row->UserID);
						$this->session->set_userdata('user_fname',$row->FirstName);
						$this->session->set_userdata('user_lname',$row->LastName);
						$this->session->set_userdata('user_phone',$row->Phone);
						$this->session->set_userdata('farm_name',$row->FarmName);
						$this->session->set_userdata('user_type',$row->AccountType);

						$this->session->set_userdata('notif', 1);

			    	}
						

			    	return true;


			    }else{

			    	return false;

			    }
			}			

		}

		public function process_registration(){

			if(!empty($_POST)){

				$data = array(

					'FirstName'		=>	$this->input->post('first_name', TRUE),
					'LastName'		=>	$this->input->post('last_name', TRUE),
					'Username'		=>	$this->input->post('username', TRUE),
					'Password'		=>	hash('sha256',$this->input->post('passwd', TRUE)),
					'Email'			=>	$this->input->post('email', TRUE),
					'Phone'			=>	$this->input->post('phone',TRUE),
					'AccountType'	=>	$this->input->post('account_type',TRUE),

				);
					
				return $this->db->insert('user_account',$data);

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

						'FirstName'		=>	$first_name,
						'LastName'		=>	$last_name,
						'Phone'			=>	$phone,

					);


					
					$this->db->where('UserID',$this->session->userdata('user_id'));

					if($this->db->update('user_account',$data)){
						
						$this->session->unset_userdata('user_fname');
						$this->session->unset_userdata('user_lname');
						$this->session->unset_userdata('user_phone');

						$this->session->set_userdata('user_fname', $first_name);
						$this->session->set_userdata('user_lname', $last_name);
						$this->session->set_userdata('user_phone', $phone);

						return true;

					}else{

						return false;

					}

				} else if($option == 1) {

					$data = array(
						'Password'		=>	hash('sha256',$this->input->post('passwd', TRUE)),
					);					
				
					$this->db->where('UserID',$this->session->userdata('user_id'));
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
