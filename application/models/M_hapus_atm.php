<?php
    class M_hapus_atm extends CI_Model{    
        function delete($id){
					$this->db->where('atm_id', $id);
					$cek=$this->db->delete('atm');
		
                    return $cek;
            }//end of simpan        
        }
?>