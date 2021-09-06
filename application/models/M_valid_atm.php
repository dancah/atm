<?php
    class M_valid_atm extends CI_Model{    
        function valid($id){
			
			
					$this->db->where('atm_id', $id);
					$cek=$this->db->delete('data_valid');
		
                    return $cek;
            }//end of simpan        
        }
?>