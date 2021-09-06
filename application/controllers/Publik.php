<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publik extends CI_Controller {

	public function index()
	{
		$this->load->view('home_awal');
	}
	
	public function home_front() {
		$this->load->model('M_data_atm');
		
		$data['data_atm'] = $this->M_data_atm->get_user_all();
		 $this->load->view('home_front',$data);
		 
		}
		
		
		
		//halaman tambah user
		
		public function data_user() {
			$this->load->helper('url'); 
			$this->load->model('M_data_user');
			$data['data_user'] = $this->M_data_user->get_user_all();
			$this->load->view('tambah_user',$data);
		}
		

		public function tambah_user() {
			$this->load->helper('url'); 
			$this->load->model('M_tambah_user');
			$this->load->view('tambahdata_user');
		}
		
		function proses_tambah_user(){
            $this->load->model('M_tambah_user');        
			$cek=$this->M_tambah_user->process();
			if($cek){
				$this->tambah_berhasil();
				redirect('tambah_atm');
			}else{
				$this->tambah_gagal();
				redirect('tambahdata_user');
			}

		}
		
		
		public function tambah_atm_user() {
			$this->load->helper('url');
			$this->load->model('M_data_desa');
			$this->load->model('M_data_kecamatan');
			$this->load->model('M_data_kabupaten');
			$this->load->model('M_data_provinsi');
			$this->load->model('M_tambah_atm');
			$data['data_desa'] = $this->M_data_desa->get_user_all();
			$data['data_kecamatan'] = $this->M_data_kecamatan->get_user_all();
			$data['data_kabupaten'] = $this->M_data_kabupaten->get_user_all();
			$data['data_provinsi'] = $this->M_data_provinsi->get_user_all();
			$data['tambah_atm_user'] =  $this->M_data_provinsi->get_user_all();
		
			
			$this->load->view('tambah_atm_user',$data);
		}
		
		
		function proses_tambah_atm_user(){

		 $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png';
		$config['overwrite']			= true;		 
         $config['max_size']      = 1024; 
         $config['max_width']     = 768; 
         $config['max_height']    = 1024;
		 $new_name =time().$_FILES["atm_foto"] ['name'];
		 $config['file_name']=$new_name;		 
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('atm_foto')) {
           
			$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Gambar Terlalu Besar.
							</div>');
			redirect('tambah_atm_user');
         }
			
         else { 
			
           $this->load->model('M_tambah_atm');        
			$cek=$this->M_tambah_atm->process($new_name);
			if($cek){
				$this->tambah_berhasil();
				redirect('home_front');
			}else{
				$this->tambah_gagal();
				redirect('tambah_atm_user');
			}
         } 
		}
		
	public function data_atm_valid() {
			$this->load->helper('url'); 
			$this->load->model('M_data_atm_valid');
			$this->load->model('M_data_desa');
			$this->load->model('M_data_kecamatan');
			$this->load->model('M_data_kabupaten');
			$this->load->model('M_data_provinsi');
			$data['data_atm_valid'] = $this->M_data_atm_valid->get_user_all();
			$data['data_desa'] = $this->M_data_desa->get_user_all();
			$data['data_kecamatan'] = $this->M_data_kecamatan->get_user_all();
			$data['data_kabupaten'] = $this->M_data_kabupaten->get_user_all();
			$data['data_provinsi'] = $this->M_data_provinsi->get_user_all();
			// $this->load->model('M_footer');
			// $data['data_artikel'] = $this->M_footer->artikel();
			$this->load->view('data_atm_valid',$data);
		}
		
		
		
		  function proses_valid_atm(){
            $this->load->model('M_valid_data');        
			$cek=$this->M_valid_data->process($new_name);
			if($cek){
				$this->tambah_berhasil();
				redirect('data_atm_valid');
			}else{
				$this->tambah_gagal();
				redirect('data_atm');
			}

		} 
		
		function proses_hapus_data_valid($id){
			
            $this->load->model('M_hapus_data_valid');        
			$cek=$this->M_hapus_data_valid->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('data_atm_valid');
			}else{
				$this->hapus_gagal();
				redirect('data_atm_valid');
			}
           
       }
	 
	 
	 
	
	 
	public function atm_publik(){
			$this->load->helper('url'); 
			$this->load->model('M_data_atm');
			$this->load->model('M_data_desa');
			$this->load->model('M_data_kecamatan');
			$this->load->model('M_data_kabupaten');
			$this->load->model('M_data_provinsi');
			$data['data_atm'] = $this->M_data_atm->get_user_all();
			$data['data_desa'] = $this->M_data_desa->get_user_all();
			$data['data_kecamatan'] = $this->M_data_kecamatan->get_user_all();
			$data['data_kabupaten'] = $this->M_data_kabupaten->get_user_all();
			$data['data_provinsi'] = $this->M_data_provinsi->get_user_all();
			$this->load->view('atm_publik',$data);
	}

	public function detail_atm_publik() {
		$id=$_GET['id'];
		$this->load->helper('url');	
			$this->load->model('M_data_atm');
			$this->load->model('M_data_desa');
			$this->load->model('M_data_kecamatan');
			$this->load->model('M_data_kabupaten');
			$this->load->model('M_data_provinsi');
			$data['detail_atm'] = $this->M_data_atm->detail_atm($id);
			$data['data_desa'] = $this->M_data_desa->get_user_all();
			$data['data_kecamatan'] = $this->M_data_kecamatan->get_user_all();
			$data['data_kabupaten'] = $this->M_data_kabupaten->get_user_all();
			$data['data_provinsi'] = $this->M_data_provinsi->get_user_all(); 
        $this->load->view('detail_publik',$data);
	}

 
	//tambahan	

		function tambah_berhasil(){
			$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Di Tambahkan!.
							</div>');
		}
		function tambah_gagal(){
			$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal ditambahkan!.
							</div>');
		}
		function edit_berhasil(){
			$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Di Perbaharui!.
							</div>');
		}
		function edit_gagal(){
			$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Di Perbaharui!.
							</div>');
		}
		function hapus_berhasil(){
			$this->session->set_flashdata('pesan', '
							<div class="alert alert-success fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Berhasil!</strong> Data Berhasil Dihapus!.
							</div>');
		}
		function hapus_gagal(){
			$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Data Gagal Di Hapus!.
							</div>');
		}
		
		

	}

?>


