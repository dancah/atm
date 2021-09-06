<?php
    class M_tambah_artikel extends CI_Model{    
        function process($new_name){
                    $judul= $this->input->post('judul');
                    $foto= $new_name;
					$foto=str_replace(" ","_",$foto);
                    $artikel = $this->input->post('artikel');
                   
                    $data = array(
						'artikel'=>$artikel,
                        'judul'=>$judul,
                        'foto'=>$foto         
                    );
                      $cek=$this->db->insert('artikel',$data);
					return $cek;					
            }//end of simpan        
        }
?>