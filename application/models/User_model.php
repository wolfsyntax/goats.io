<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class User_model extends CI_Model {

		public function validate_login(){
			if(!empty($_POST)){
				$username = $this->input->post('username');
				$password = hash('sha256',$this->input->post('passwd'));
				
				$sql = $this->db->query('SELECT * FROM User_Account where username = "'. $username .'" AND password = "' . $password. '" LIMIT 1;');
				echo "<script>alert('".$username.'+'.$password.");</script>"	;
				if($sql->num_rows() == 1){

					$this->session->unset_userdata('user_id');
					$this->session->unset_userdata('user_email');
					$this->session->unset_userdata('username');
					$this->session->unset_userdata('user_fname');
					$this->session->unset_userdata('user_lname');
					$this->session->unset_userdata('user_phone');
					$this->session->unset_userdata('farm_name');
					$this->session->unset_userdata('user_type');



					foreach($sql->result() as $row){

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