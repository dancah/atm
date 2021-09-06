<?php
class M_jumlah extends CI_Model{
    function jumlah_atm()
    {
        $query=$this->db->query("SELECT count(atm_id) as jumlah_atm from atm ");
        return $query->result();
    }
	
	
	// function jumlah_bidan()
 //    {
 //        $query=$this->db->query("SELECT count(id_bidan) as jumlah_bidan from bidan ");
 //        return $query->result();
 //    }
	
	 function jumlah_artikel()
    {
        $query=$this->db->query("SELECT count(artikel_id) as jumlah_artikel from artikel ");
        return $query->result();
    }
	
}