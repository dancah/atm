<?php
    class M_edit_atm extends CI_Model{    
        function update ($new_name,$id){
                    $atm_id = $this->input->post('atm_id');
                   
					$atm_foto= $new_name;
                    $atm_foto=str_replace(" ","_",$atm_foto);
                    
                    $atm_lat = $this->input->post('atm_lat');
                    $atm_long = $this->input->post('atm_long');
                    $nama_atm = $this->input->post('nama_atm');
					$desa_id = $this->input->post('desa_nama');
                    $cdm = $this->input->post('cdm');
					$kec_id = $this->input->post('kec_nama');
                    
                   
                    

                    
                    
					$data = array(
                        'atm_id'=>$atm_id,                   
						'atm_foto' =>$atm_foto,
                        'atm_lat'=>$atm_lat,
                        'atm_long'=>$atm_long,
                        'nama_atm'=>$nama_atm,
						'desa_id'=>$desa_id,
						'cdm'=>$cdm,
                        'kec_id'=>$kec_id
                        
                       

                       );          
                    
                
                   	$this->db->where('atm_id',$atm_id);
					$cek=$this->db->update('atm',$data); 		
					return $cek=true;					
            }//end of simpan    


            function no_foto($id){ 
                    $atm_id = $this->input->post('atm_id');
                 
					
                    $atm_lat = $this->input->post('atm_lat');
                    $atm_long = $this->input->post('atm_long');
                    $nama_atm= $this->input->post('nama_atm');
					$desa_id = $this->input->post('desa_nama');
                    $kec_id = $this->input->post('kec_nama');
                    $cdm = $this->input->post('cdm');
                   
                 
                    
                    
                    $data = array(
                        'atm_id'=>$atm_id,
                        
						
                        'atm_lat'=>$atm_lat,
                        'atm_long'=>$atm_long,
                        'nama_atm'=>$nama_atm,
						'desa_id'=>$desa_id,
						'cdm'=>$cdm,
                        'kec_id'=>$kec_id
                        
                    
                        
                       );     

                $this->db->where('atm_id',$atm_id);
                $cek=$this->db->update('atm',$data);         
                return $cek=true;        

            }
      
        }
?>