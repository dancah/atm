<?php
class M_data_provinsi extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from prov ORDER BY prov_nama ASC");
        return $query->result();
    }
	
}