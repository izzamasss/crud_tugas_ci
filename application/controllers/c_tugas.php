<?php 
	class C_tugas extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('m_city');
			$this->load->model('m_province');
		}
		public function index(){
			$data['judul']='index';
			$data['city']=$this->m_city->get_all_data();
			$data['province']=$this->m_province->get_all_data();
			$this->load->view('template/header',$data);
			$this->load->view('pages/kota/index');
			$this->load->view('template/footer');
		}
		public function detail_city($id){
			$data['judul']='index';
			$data['city']=$this->m_city->get_data($id);
			$this->load->view('template/header',$data);
			$this->load->view('pages/kota/detail_city',$data);
			$this->load->view('template/footer');
		}
		public function detail_province($id){
			$data['judul']='index';
			$data['province']=$this->m_province->get_data($id);
			$this->load->view('template/header',$data);
			$this->load->view('pages/kota/detail_province',$data);
			$this->load->view('template/footer');
		}
		public function create_city(){
			$data['judul']='create';
			$this->load->view('template/header',$data);
			$this->form_validation->set_rules('name','name','required');
			$this->form_validation->set_rules('province_id','province_id','required');
			if($this->form_validation->run() == FALSE){
				$this->load->view('pages/kota/create_city');
			}
			else{
				$this->m_city->create_data();
				$this->session->set_flashdata('flash','ditambahkan');
				redirect('c_tugas');
			}
			$this->load->view('template/footer');
		}
		public function create_province(){
			$data['judul']='create';
			$this->load->view('template/header',$data);
			$this->form_validation->set_rules('name','name','required');
			if($this->form_validation->run() == FALSE){
				$this->load->view('pages/kota/create_province');
			}
			else{
				$this->m_province->create_data();
				$this->session->set_flashdata('flash_province','ditambahkan');
				redirect('c_tugas');
			}
			$this->load->view('template/footer');
		}
		public function edit_city($id){
			$data['judul']='edit';
			$data['city']=$this->m_city->get_data($id);
			$this->load->view('template/header',$data);
			$this->form_validation->set_rules('name','name','required');
			$this->form_validation->set_rules('province_id','province_id','required');
			if($this->form_validation->run() == FALSE){
				$this->load->view('pages/kota/edit_city');
			}
			else{
				$this->m_city->edit_data($id);
				var_dump($_POST);
				$this->session->set_flashdata('flash_city','diubah');
				redirect('c_tugas');
			}
			$this->load->view('template/footer');
		}
		public function edit_province($id){
			$data['judul']='edit';
			$data['province']=$this->m_province->get_data($id);
			$this->load->view('template/header',$data);
			$this->form_validation->set_rules('name','name','required');
			if($this->form_validation->run() == FALSE){
				$this->load->view('pages/kota/edit_province');
			}
			else{
				$this->m_province->edit_data($id);
				var_dump($_POST);
				$this->session->set_flashdata('flash_province','diubah');
				redirect('c_tugas');
			}
			$this->load->view('template/footer');
		}
		public function delete_city($id){
			$this->m_city->delete_data($id);
			$this->session->set_flashdata('flash_city','dihapus');
			redirect ('c_tugas');
		}

		public function delete_province($id){
			$this->m_city->delete_data_by_province($id);
			$this->m_province->delete_data($id);
			$this->session->set_flashdata('flash_province','dihapus');
			redirect ('c_tugas');
		}
		public function delete_all_city(){
			$this->m_city->delete_all_data();
			$this->session->set_flashdata('flash_city','dihapus');
			redirect ('c_tugas');
		}
		public function delete_all_province(){
			$this->m_city->delete_all_data();
			$this->m_province->delete_all_data();
			$this->session->set_flashdata('flash_province','dihapus');
			redirect ('c_tugas');
		}
	}
 ?>