<?php
class M_data_desa extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from desa,kec where desa.id_kec=kec.kec_id");
        return $query->result();
    }
	 function get_desa($id_kec)
    {
        
		 $this->db->where('id_kec', $id_kec);
		 $result = $this->db->get('desa')->result(); // Tampilkan semua data kota berdasarkan id provinsi
    
		 return $result; 
	}
	
}