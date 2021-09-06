<?php 
class DesaModel extends CI_Model {
  
  public function view(){
    return $this->db->get('desa')->result(); // Tampilkan semua data yang ada di tabel provinsi
  }
}