<?php
class M_data_atm_valid extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from data_valid left JOIN desa on desa.desa_id=data_valid.desa_id left JOIN kec on kec.kec_id=data_valid.kec_id left JOIN kab on kab.kab_id=data_valid.kab_id left JOIN prov on prov.prov_id=data_valid.prov_id");
        return $query->result();
    }
	
	function edit_data_valid($id)
    {
        $query=$this->db->query("SELECT * from data_valid left JOIN desa on desa.desa_id=data_valid.desa_id left JOIN kec on kec.kec_id=data_valid.kec_id left JOIN kab on kab.kab_id=data_valid.kab_id left JOIN prov on prov.prov_id=data_valid.prov_id where data_valid.data_valid_id='$id'");
        return $query->result();
    }
	
	function detail_data_valid($id)
    {
       $query=$this->db->query("SELECT * from data_valid left JOIN desa on desa.desa_id=data_valid.desa_id left JOIN kec on kec.kec_id=data_valid.kec_id left JOIN kab on kab.kab_id=data_valid.kab_id left JOIN prov on prov.prov_id=data_valid.prov_id where data_valid.data_valid_id='$id'");
        return $query->result();
    }
	
	
	
}