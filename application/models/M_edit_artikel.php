<?php
    class M_edit_artikel extends CI_Model{    
        function process($new_name,$id){
                    $judul= $this->input->post('judul');
                    $foto= $new_name;
					$foto=str_replace(" ","_",$foto);
                    $artikel = $this->input->post('artikel');
                   
                    $data = array(
						'artikel'=>$artikel,
                        'judul'=>$judul,
                        'foto'=>$foto         
                    );
                   	$this->db->where('artikel_id',$id);
					$cek=$this->db->update('artikel',$data); 	
					return $cek;					
            }//end of simpan     

		function no_foto($id){
                    $judul= $this->input->post('judul');
                   
                    $artikel = $this->input->post('artikel');
                   
                    $data = array(
						'artikel'=>$artikel,
                        'judul'=>$judul
                              
                    );
                   	$this->db->where('artikel_id',$id);
					$cek=$this->db->update('artikel',$data); 	
					return $cek;					
            }//end of simpan      
        }
?>