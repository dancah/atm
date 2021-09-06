<?php
    class M_tambah_atm extends CI_Model{    
        function process ($new_user){
                   $atm_name = $this->input->post('atm_name');
                    $atm_foto= $new_name;
                    $atm_foto=str_replace(" ","_",$atm_foto);
                    $atm_lat = $this->input->post('atm_lat');
                    $atm_long = $this->input->post('atm_long');
                    $keterangan = $this->input->post('keterangan');
                   
                    $kab_name = $this->input->post('kab_name');
                    $prov_name = $this->input->post('prov_name');
                    $atm_tahun = $this->input->post('atm_tahun');
                    $no_hp = $this->input->post('no_hp');
                    $email = $this->input->post('email');
                    $atm_lb = $this->input->post('atm_lb');
                   
                    
					$data = array(
                        
                        'atm_nama'=>$atm_name,
                        'atm_foto'=>$atm_foto,
                        'atm_lat'=>$atm_lat,
                        'atm_long'=>$atm_long,
                        'keterangan'=>$keterangan,
                       
                        'kab_id'=>$kab_name,
                        'prov_id'=>$prov_name,
                        'atm_tahun'=>$atm_tahun,
                        'no_hp'=>$no_hp,
                        'email'=>$email,
                        'atm_lb'=>$atm_lb,
                       
                    );
					
				
                    $cek=$this->db->insert('atm',$data);
	                return $cek=true;					
            }//end of simpan        
        }
?>