<?php
    class M_hapus_admin extends CI_Model{    
        function delete($id){
					$this->db->where('user_id', $id);
					$cek=$this->db->delete('admin');
                    return $cek;
            }//end of simpan        
        }
?>