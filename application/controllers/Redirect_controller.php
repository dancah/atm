<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
   class Redirect_controller extends CI_Controller { 
	
		public function __construct(){
			parent:: __construct();
			$this->load->model('M_data_kecamatan');
			$this->load->model('M_data_desa');

			
			if (!$this->session->userdata('username')) {
				redirect(base_url());
			}

		}
	 	
		public function index() { 
         $this->load->helper('url'); 
         $this->home_awal();
		}

		
		
		 public function home_front() {
         $this->load->helper('url'); 	
		$this->load->model('M_data_atm');
		
		
		$data['data_atm'] = $this->M_data_atm->get_user_all();
		 $this->load->view('home_front',$data);
		
		 
		}

		 public function halaman_login() {
		 $this->load->helper('url'); 
		 $this->load->view('halaman_login');
		}

 
		 public function login() {
         		 $this->load->helper('url'); 	
		$this->load->model('M_data_atm');
		
		$data['data_atm'] = $this->M_data_atm->get_user_all();
		 $this->load->view('home',$data);
		}

		
		// }else{
	
		public function home() {
		 $this->load->helper('url'); 	
		$this->load->model('M_data_atm');
		
		$data['data_atm'] = $this->M_data_atm->get_user_all();
		 $this->load->view('home',$data);
	}

	public function detail_atm() {
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
        $this->load->view('detail',$data);
	}

	
	
		public function artikel() {
			
			$this->load->helper('url');
         	$this->load->view('artikel');
		 
		}
		
		 public function gambar() {
         $this->load->helper('url'); 
         $this->load->view('gambar');
		}

		public function data_atm() {
			$this->load->helper('url');
			$this->load->helper('tgl_indo_helper');			
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
			
			$this->load->view('data_atm',$data);
		}
		
		


			public function atm() {
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
			
			$this->load->view('atm',$data);
		}
		
		public function data_artikel() {
			$this->load->helper('url'); 
			$this->load->model('M_data_artikel');
			$data['data_artikel'] = $this->M_data_artikel->get_user_all();
			
			$this->load->view('data_artikel', $data);
		}

		public function proses_login() {
			$this->load->helper('url'); 
			$this->load->library('session'); 
			$this->load->model('M_login');
			$cek=$this->M_login->login();
				if($cek){
					$username = $this->input->post('username');
					$this->session->set_userdata('admin',$username);
					redirect('home');
				}else{
					$this->session->set_flashdata('login', '
							<div id="boxes">
							  <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window"> Gagal Login
								<div id="lorem">
								  <center><p>Maaf Anda Gagal Login</p></center>
								</div>
								<div id="popupfoot"> <a href="#" class="close agree">OK</a> </div>
							  </div>
							  <div style="width: 1478px; font-size: 32pt; color:white; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
							</div>');
					redirect('home');
				}
		}
		
		public function logout() {
			$this->session->unset_userdata('admin');
			$this->session->sess_destroy();
			$this->home();
		}		
		



//halaman tambah
		
		public function data_admin() {
			$this->load->helper('url'); 
			$this->load->model('M_data_admin');
			$data['data_admin'] = $this->M_data_admin->get_user_all();
			$this->load->view('tambah_admin',$data);
		}
		

		public function tambah_admin() {
			$this->load->helper('url'); 
			$this->load->model('M_tambah_admin');
			$this->load->view('tambahdata_admin');
		}
		
		
		
		public function tambah_artikel() {
         	$this->load->helper('url');
			
			$this->load->view('tambah_artikel');
		}
		
		
		public function tambah_atm() {
			$this->load->helper('url');
			$this->load->helper('tgl_indo_helper');
			$this->load->model('M_data_desa');
			$this->load->model('M_data_kecamatan');
			$this->load->model('M_data_kabupaten');
			$this->load->model('M_data_provinsi');
			$this->load->model('M_tambah_atm');
			$data['data_desa'] = $this->M_data_desa->get_user_all();
			$data['data_kecamatan'] = $this->M_data_kecamatan->get_user_all();
			$data['data_kabupaten'] = $this->M_data_kabupaten->get_user_all();
			$data['data_provinsi'] = $this->M_data_provinsi->get_user_all();
			$data['tambah_atm'] = $this->M_data_provinsi->get_user_all();
			
			$this->load->view('tambah_atm',$data);
		}
		public function listDesa(){
		$id_kec = $this->input->post('id_kec');
    
		$desa = $this->M_data_desa->get_desa($id_kec);
    
		$lists = "<option value=''>Pilih Desa</option>";
    
		foreach($desa as $data){
		$lists .= "<option value='".$data->desa_id."'>".$data->desa_nama."</option>";
		}
    
		$callback = array('list_desa'=>$lists); 
		echo json_encode($callback); 
		}

		
		

//halaman edit
		
		public function edit_atm() {
			$this->load->helper('url'); 
			$id=$_GET['id'];
			$this->load->model('M_data_atm');
			$this->load->model('M_data_desa');
			$this->load->model('M_data_kecamatan');
			$this->load->model('M_data_kabupaten');
			$this->load->model('M_data_provinsi');
			$data['data_desa'] = $this->M_data_desa->get_user_all();
			$data['data_kecamatan'] = $this->M_data_kecamatan->get_user_all();
			$data['data_kabupaten'] = $this->M_data_kabupaten->get_user_all();
			$data['data_provinsi'] = $this->M_data_provinsi->get_user_all();
			$data['data_atm'] = $this->M_data_atm->get_user_all();
			
			$data['edit_atm'] = $this->M_data_atm->edit_atm($id);
			
			$this->load->view('edit_atm', $data);
		}

		
		public function edit_admin() {
			$this->load->helper('url'); 
			$id=$_GET['id'];
			$this->load->model('M_data_admin');
			$data['data_admin'] = $this->M_data_admin->get_user_all();
			
			$data['edit_admin'] = $this->M_data_admin->edit_admin($id);
			
			$this->load->view('edit_admin', $data);
		}
		
		public function edit_artikel() {
			$this->load->helper('url'); 
			$this->load->model('M_data_artikel');
			$id=$_GET['id'];
			$data['edit_artikel'] = $this->M_data_artikel->edit_artikel($id);
			$this->load->model('M_footer');
			$data['data_artikel'] = $this->M_footer->artikel();
			$this->load->view('edit_artikel', $data);
		}
		
		


//proses edit

		public function proses_edit_atm() { 
			
				$id=$_GET['id'];
				 $config['upload_path']   = './uploads/'; 
				 $config['allowed_types'] = 'gif|jpg|png'; 
				 
				 $config['max_size']      = 100024; 
				 $config['max_width']     = 10240; 
				 $config['max_height']    = 7680;
				 $new_name ="edit_atm".time().$_FILES["atm_foto"] ['name'];
				 $config['file_name']=$new_name;		 
				 $this->load->library('upload', $config);
				if($_FILES["atm_foto"] ['name']==null){
					
					$this->load->model('M_edit_atm');        
					$cek=$this->M_edit_atm->no_foto($id);
						if($cek){
							$this->edit_berhasil();
							redirect('Redirect_controller/data_atm');
						}else{
							$this->edit_gagal();
							redirect("edit_atm?id=$id");
						}
				}	
				 else {
					 
					 if ( ! $this->upload->do_upload('atm_foto')) {
				   
					$this->session->set_flashdata('pesan', '
									<div class="alert alert-danger fade in">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Gagal!</strong> Gambar Terlalu Besar.
									</div>');
					redirect("edit_atm?id=$id");
					}
					
					else {

							$this->load->model('M_edit_atm');        
								$cek=$this->M_edit_atm->update($new_name, $id);
							if($cek){
								$this->edit_berhasil();
								redirect('Redirect_controller/data_atm');
							}else{
								$this->edit_gagal();
							redirect('edit_atm?id='.$id.'');
							}
						}
					}
				}


				
				public function proses_edit_admin() {
				$this->load->model('M_edit_admin');        
								$cek=$this->M_edit_admin->update($new_name, $id);
							if($cek){
								$this->edit_berhasil();
								redirect('tambah_admin');
							}else{
								$this->edit_gagal();
							redirect('edit_admin?id='.$id.'');
							}
				}


		public function proses_edit_artikel() {
				
				
				 $id=$_GET['id'];
				 $config['upload_path']   = './uploads/'; 
				 $config['allowed_types'] = 'gif|jpg|png'; 
				 $config['max_size']      = 10024; 
				// $config['max_width']     = 9999999; 
				// $config['max_height']    = 9999999;
				 $new_name ="Artikel".time().$_FILES["gambar"] ['name'];
				 $config['file_name']=$new_name;		 
				 $this->load->library('upload', $config);
				if($_FILES["gambar"] ['name']==null){
					// 
					$this->load->model('M_edit_artikel');        
					$cek=$this->M_edit_artikel->no_foto($id);
						if($cek){
							$this->edit_berhasil();
							redirect("data_artikel");
						}else{
							$this->edit_gagal();
							redirect("edit_artikel?id=$id");
						}
				}	
				 else {
					 
					 if ( ! $this->upload->do_upload('gambar')) {
				   
					$this->session->set_flashdata('pesan', '
									<div class="alert alert-danger fade in">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Gagal!</strong> Gambar Terlalu Besar.
									</div>');
					redirect("edit_artikel?id=$id");
					}
			
					else { 
					
						   $this->load->model('M_edit_artikel');        
							$cek=$this->M_edit_artikel->process($new_name,$id);
							if($cek){
									$this->edit_berhasil();
									redirect("edit_artikel?id=$id");
								}else{
									$this->edit_gagal();
									redirect("edit_artikel?id=$id");
								}
					} 
				 }
		}
		


//_________________________________________Proses Tambah


function proses_tambah_atm(){

		 $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite']			= true;		 
         $config['max_size']      = 4476906; 
				// $config['max_width']     = 9999999 ; 
				// $config['max_height']    = 9999999 ;
		 $new_name =time().$_FILES["atm_foto"] ['name'];
		 $config['file_name']=$new_name;		 
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('atm_foto')) {
           
			$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Gambar Terlalu Besar.
							</div>');
			redirect('Redirect_controller/tambah_atm');
         }
			
         else { 
			
           $this->load->model('M_tambah_atm');        
			$cek=$this->M_tambah_atm->process($new_name);
			if($cek){
				$this->tambah_berhasil();
				redirect('Redirect_controller/data_atm');
			}else{
				$this->tambah_gagal();
				redirect('Redirect_controller/tambah_atm');
			}
         } 
		}
			

		function proses_tambah_admin(){
            $this->load->model('M_tambah_admin');        
			$cek=$this->M_tambah_admin->process();
			if($cek){
				$this->tambah_berhasil();
				redirect('tambah_admin');
			}else{
				$this->tambah_gagal();
				redirect('Redirect_controller/tambahdata_admin');
			}

		}


		
		 function proses_tambah_artikel(){
		 $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 1000; 
         $config['max_width']     = 10240; 
         $config['max_height']    = 7680;
		 $new_name ="Artikel".time().$_FILES["gambar"] ['name'];
		 $config['file_name']=$new_name;		 
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('gambar')) {
           
			$this->session->set_flashdata('pesan', '
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<strong>Gagal!</strong> Gambar Terlalu Besar.
							</div>');
			redirect('Redirect_controller/data_artikel');
         }

			
         else { 
			
           $this->load->model('M_tambah_artikel');        
			$cek=$this->M_tambah_artikel->process($new_name);
			if($cek){
				$this->tambah_berhasil();
				redirect('Redirect_controller/data_artikel');
			}else{
				$this->tambah_gagal();
				redirect('Redirect_controller/tambah_artikel');
			}
         } 
			
            
			

		}




//___________________________________________Proses Hapus


		function proses_hapus_atm($id){
			
            $this->load->model('M_hapus_atm');        
			$cek=$this->M_hapus_atm->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('Redirect_controller/data_atm');
			}else{
				$this->hapus_gagal();
				redirect('Redirect_controller/data_atm');
			}
           
       }


       function proses_hapus_admin($id){
			
            $this->load->model('M_hapus_admin');        
			$cek=$this->M_hapus_admin->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('tambah_admin');
			}else{
				$this->hapus_gagal();
				redirect('tambah_admin');
			}
           
       }
	   
	   
	   function proses_hapus_artikel($id){
			
            $this->load->model('M_hapus_artikel');        
			$cek=$this->M_hapus_artikel->delete($id);
			if($cek){
				$this->hapus_berhasil();
				redirect('Redirect_controller/data_artikel');
			}else{
				$this->hapus_gagal();
				redirect('Redirect_controller/data_artikel');
			}
           
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

