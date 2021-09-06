<?php 
class KecamatanModel extends CI_Model {
  
  public function viewByKecamatan($id_kecamatan){
    $this->db->where('kec_id', $id_kecamatan);
    $result = $this->db->get('kec')->result();
	  
    return $result; 
  }
  
  
	
}