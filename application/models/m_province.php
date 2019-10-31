<?php 
	class M_province extends CI_Model{
		public function get_all_data(){
			return $this->db->get('province')->result_array();
		}
		public function get_data($id){
			return $this->db->get_where('province',["id"=>$id])->row_array();
		}
		public function create_data(){
			$data = [
		        "id" 		=>'',
		        "name" 		=> $this->input->post('name',true)
			];
			$this->db->insert('province', $data);
		}
		public function edit_data($id){
			$data = [
		        "name" 		=> $this->input->post('name',true)
			];
			// $this->db->where('id', $this->input->post('id'));
			$this->db->where('id', $id);
			$this->db->update('province', $data);
		}
		public function delete_all_data(){
			$this->db->empty_table('province');	
		}
		public function delete_data($id){
			$this->db->delete('province',["id"=>$id]);	
		}
	}

 ?>