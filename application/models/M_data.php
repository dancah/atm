<?php
class M_data extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}
 
	public function fetch_data($limit, $offset)
	{
		$this->db->limit($limit, $offset);
		$data = $this->db->get("artikel");
		return $data->result();
 
	}
	function jumlah_data(){
		return $this->db->get('artikel')->num_rows();
	}
	
	
}