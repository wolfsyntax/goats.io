<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Goat_model extends CI_Model {

		public function __construct(){

			parent::__construct();
			//$this->load->dbforge();
			
		}

		public function select_applet( $table_name, $where="",  $field = "*"){
			
			if($field != '*')
				$this->db->select($field);
			
			if($where){
				$this->db->where($where);
			}

			return $this->db->get($table_name)->result();

		}

		public function add_goat(){

			if(!empty($_POST)){
				$gender = strtolower($this->input->post('gender', TRUE));
				$data = array(

					'eartag_id'		=>	$this->input->post('eartag_id', TRUE),
					'eartag_color'	=>	strtolower($this->input->post('tag_color', TRUE)),
					'gender'		=>	$gender,
					'body_color'	=>	strtolower($this->input->post('body_color', TRUE)),
					'birth_date'	=>	$this->input->post('birth_date', TRUE),
					'birth_weight'	=>	$this->input->post('birth_weight', TRUE),
					'sire_id'		=>	$this->input->post('sire_id',TRUE),
					'dam_id'		=>	$this->input->post('dam_id',TRUE),
					'is_castrated'  =>  $this->input->post('is_castrated',TRUE),
					'status'		=> 'active',
				);		

				return $this->db->insert('goat_profile',$data);

			}
			
		}			

		public function goat_purchase(){
			if(!empty($_POST)){

				$gender = strtolower($this->input->post('gender', TRUE));
				$data_profile = array(

					'eartag_id'		=>	$this->input->post('eartag_id', TRUE),
					'eartag_color'	=>	strtolower($this->input->post('tag_color', TRUE)),
					'gender'		=>	$gender,
					'body_color'	=>	strtolower($this->input->post('body_color', TRUE)),
					'is_castrated'  =>  $this->input->post('is_castrated',TRUE),
					'status'		=> 'active',
				);		

				$data_purchase = array(
					'eartag_id' => $this->input->post('eartag_id',TRUE),
					'purchase_weight' => $this->input->post('purchase_weight',TRUE),
					'price_per_kilo' => $this->input->post("purchase_price",TRUE),
					'purchase_date' => $this->input->post("purchase_date",TRUE),
					'description' => $this->input->post("description",TRUE),
					'user_id' => $this->session->userdata("user_id"),
					'vendor_name' => $this->input->post("vendor_name",TRUE),
				);

				if($this->db->insert('goat_profile',$data_profile)){
					
					return $this->db->insert('purchase_record',$data_purchase);

				}else{

					return FALSE;
					
				}

			}
			
		}

		public function process_registration(){

			if(!empty($_POST)){

				$data = array(

					'eartag_id'		=>	$this->input->post('eartag_id', TRUE),
					'eartag_color'	=>	strtolower($this->input->post('tag_color', TRUE)),
					'gender'		=>	strtolower($this->input->post('gender', TRUE)),
					'body_color'	=>	strtolower($this->input->post('body_color', TRUE)),
					'birth_date'	=>	$this->input->post('birth_date', TRUE),
					'sire_id'		=>	$this->input->post('sire_id',TRUE),
					'dam_id'		=>	$this->input->post('dam_id',TRUE),

				);
				


				return $this->db->insert('goat_profile',$data);

			}
				
		}

	
		public function add_breeding_record(){

			if(!empty($_POST)){
				
				$dam = $this->input->post('dam_id', TRUE);
				$sire = $this->input->post('sire_id', TRUE);
				$breeding_date = $this->input->post('breed_date', TRUE);

				$data = array(

					'dam_id' =>	$dam,
					'sire_id'	=>	$sire,
					'breeding_date'	=>	$breeding_date,
					'notes'	=>	$this->input->post('description', TRUE),

				);
				
				$this->db->where('dam_id = ',$dam);
				$this->db->where('sire_id = ',$sire);
				$this->db->where('breeding_date = ',$breeding_date);
				$query = $this->db->get('breeding_record');

				if($query->num_rows() === 0){

					return $this->db->insert('breeding_record',$data);

				}else{

					return FALSE;
				}

			}

		}

	}
?>
