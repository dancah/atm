<?php
class M_lokasi extends CI_Model{
    function lokasi_lat()
    {
        $query=$this->db->query("SELECT lokasi.lat from lokasi");
		
        return $query->result();
    }
	function lokasi_lng()
    {
        $query=$this->db->query("SELECT lokasi.lng from lokasi");
		
        return $query->result();
    }
	
	
	
}