<?php
class M_data_atm extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from atm left JOIN desa on desa.desa_id=atm.desa_id left JOIN kec on kec.kec_id=atm.kec_id left JOIN kab on kab.kab_id=atm.kab_id left JOIN prov on prov.prov_id=atm.prov_id order by atm_id desc");
        return $query->result();
    }
	
	function edit_atm($id)
    {
        $query=$this->db->query("SELECT * from atm left JOIN desa on desa.desa_id=atm.desa_id left JOIN kec on kec.kec_id=atm.kec_id left JOIN kab on kab.kab_id=atm.kab_id left JOIN prov on prov.prov_id=atm.prov_id where atm.atm_id='$id'");
        return $query->result();
    }
	
	function detail_atm($id)
    {
       $query=$this->db->query("SELECT * from atm left JOIN desa on desa.desa_id=atm.desa_id left JOIN kec on kec.kec_id=atm.kec_id left JOIN kab on kab.kab_id=atm.kab_id left JOIN prov on prov.prov_id=atm.prov_id where atm.atm_id='$id'");
        return $query->result();
    }
	
	
	
}