<?php
class M_data_kabupaten extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from kab ORDER BY kab_nama ASC");
        return $query->result();
    }
	
}