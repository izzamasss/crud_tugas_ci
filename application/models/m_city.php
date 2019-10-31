<?php 
	class M_city extends CI_Model{
		public function get_all_data(){
			return $this->db->get('city')->result_array();
		}
		public function get_data($id){
			return $this->db->get_where('city',["id"=>$id])->row_array();
		}
		public function create_data(){
			$data = [
		        "id" 		=>'',
		        "name" 		=> $this->input->post('name',true),
		        "province_id" 	=> $this->input->post('province_id',true)
			];
			$this->db->insert('city', $data);
		}
		public function edit_data($id){
			$data = [
		        "name" 		=> $this->input->post('name',true),
		        "province_id" 	=> $this->input->post('province_id',true)
			];
			// $this->db->where('id', $this->input->post('id'));
			$this->db->where('id', $id);
			$this->db->update('city', $data);
		}
		public function delete_all_data(){
			$this->db->empty_table('city');	
		}
		public function delete_data($id){
			$this->db->delete('city',["id"=>$id]);	
		}
		public function delete_data_by_province($province_id){
			$this->db->delete('city',["province_id"=>$province_id]);	
		}
	}

 ?>