<?php
	class M_data_admin extends CI_Model{
	function get_user_all()
	{
		$query=$this->db->query("SELECT * from admin");
		return $query->result();
	}

	function edit_admin($id)
	{
		$query=$this->db->query("SELECT * from admin where admin.user_id='$id'");
		return $query->result();
	}
}