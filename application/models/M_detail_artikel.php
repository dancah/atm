<?php
class M_detail_artikel extends CI_Model{
    function get_user_all($id)
    {
        $query=$this->db->query("SELECT * from artikel where artikel_id='$id'");
        return $query->result();
    }
	
}