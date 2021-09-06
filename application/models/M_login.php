<?php
    class M_login extends CI_Model{    
        function login($username,$password){
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$query = $this->db->get('admin');
			return $query->row_array();
            }//end of simpan        
        }
?>