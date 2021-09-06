<?php
class M_data_kecamatan extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from kec ORDER BY kec_nama ASC");
        return $query->result();
    }
	
	
}