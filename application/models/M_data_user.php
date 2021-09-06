<?php
	class M_data_user extends CI_Model{
	function get_user_all()
	{
		$query=$this->db->query("SELECT * from admin");
		return $query->result();
	}

	function edit_user($id)
	{
		$query=$this->db->query("SELECT * from admin where admin.user_id='$id'");
		return $query->result();
	}
}