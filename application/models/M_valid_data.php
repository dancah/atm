<?php
    class M_valid_data extends CI_Model{    
        function process ($new_name){
                   $atm_name = $this->input->post('atm_name');
                    $atm_foto= $new_name;
                    $atm_foto=str_replace(" ","_",$atm_foto);
                    $atm_lat = $this->input->post('atm_lat');
                    $atm_long = $this->input->post('atm_long');
                    $keterangan = $this->input->post('keterangan');
                    $desa_name = $this->input->post('desa_name');
                    $kec_nama = $this->input->post('kec_nama');
                    $kab_name = $this->input->post('kab_name');
                    $prov_name = $this->input->post('prov_name');
                    $atm_tahun = $this->input->post('atm_tahun');
                    $no_hp = $this->input->post('no_hp');
                    $email = $this->input->post('email');
                    $status = $this->input->post('status');

                    
					$data = array(
                        
                        'atm_nama'=>$atm_name,
                        'atm_foto'=>$atm_foto,
                        'atm_lat'=>$atm_lat,
                        'atm_long'=>$atm_long,
                        'keterangan'=>$keterangan,
                        'desa_id'=>$desa_name,
                        'kec_id'=>$kec_nama,
                        'kab_id'=>$kab_name,
                        'prov_id'=>$prov_name,
                        'atm_tahun'=>$atm_tahun,
                        'no_hp'=>$no_hp,
                        'email'=>$email,
                        'status'=>$status,
                       
                    );
					
				 
                    
	                return $this->db
								->get_where("atm",
								array('status' => valid));
            }//end of simpan        
        }
?>