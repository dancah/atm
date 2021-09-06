<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('halaman_login');
	}
	
	public function proses_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->load->model('M_login');
		$login = $this->M_login->login($username,$password);
		

		if (!empty($login)) {
			$this->session->set_userdata($login);
			redirect(base_url('Redirect_controller/home'));
			
		} else{ 
			redirect(base_url());

		}

	}

	public function keluar(){
		$this->session->sess_destroy();
		redirect(base_url());

	}
}
