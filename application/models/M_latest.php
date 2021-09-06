<?php
class M_latest extends CI_Model{
    
	
	 function artikel()
    {
        $query=$this->db->query("SELECT * from artikel order by tanggal_post DESC limit 4 ");
        return $query->result();
    }
}