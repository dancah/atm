<?php
class M_data_artikel extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from artikel order by tanggal_post DESC");
        return $query->result();
    }
	
	function edit_artikel($id)
    {
        $query=$this->db->query("SELECT * from artikel where artikel.artike_id='$id'");
        return $query->result();
    }
}