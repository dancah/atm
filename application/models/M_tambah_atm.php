<?php
    class M_tambah_atm extends CI_Model{    
        function process ($new_name){
                  
                    $atm_foto= $new_name;
                    $atm_foto=str_replace(" ","_",$atm_foto);
                    $atm_lat = $this->input->post('atm_lat');
                    $atm_long = $this->input->post('atm_long');
                    $nama_atm = $this->input->post('nama_atm');
                    $desa_name = $this->input->post('desa_name');
                    $kec_nama = $this->input->post('kec_nama');
                    $kab_name = $this->input->post('kab_nama');
                    $prov_name = $this->input->post('prov_nama');
					$cdm = $this->input->post('cdm');
                    
               

                    
					$data = array(
                        
                      
                        'atm_foto'=>$atm_foto,
                        'atm_lat'=>$atm_lat,
                        'atm_long'=>$atm_long,
                        'nama_atm'=>$nama_atm,
						'desa_id'=>$desa_name,
                        'kec_id'=>$kec_nama,
                        'kab_id'=>$kab_name,
						'cdm'=>$cdm,
                        'prov_id'=>$prov_name
                        
                       
                    );
					
				
                    $cek=$this->db->insert('atm',$data);
	                return $cek=true;					
            }//end of simpan        
        }
?>