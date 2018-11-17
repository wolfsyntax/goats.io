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


			    	}
						

			    	return true;


			    }else{

			    	return false;

			    }
			}			

		}
	}
?>