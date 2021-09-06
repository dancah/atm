<?php
    class M_hapus_data_valid extends CI_Model{    
        function delete($id){
					$this->db->where('atm_id', $id);
					$cek=$this->db->delete('data_valid');
		
                    return $cek;
            }//end of simpan        
        }
?>