<?php
	class M_tambah_user extends CI_Model{
		 function process(){
			$username= $this->input->post('username');
			$password= $this->input->post('password');			
			
			$nama= $this->input->post('nama');
			// $password= $this->input->post('password');
			$no_hp= $this->input->post('no_hp');
			$email= $this->input->post('email');
			
			$data = array(
				'username'=> $username,
				'password'=>$password,
				
				'nama'=>$nama,
				'no_hp'=>$no_hp,
				'email'=>$email,
				

			);
			$cek=$this->db->insert('admin',$data);
			return $cek;		
			}
	}
?>