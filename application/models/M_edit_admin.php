<?php
    class M_edit_admin extends CI_Model{    
        function update($new_name,$id){
					   $user_id= $this->input->post('user_id');

                    $username= $this->input->post('username');
					$password= $this->input->post('password');			
					
					$nama= $this->input->post('nama');
					$no_hp= $this->input->post('no_hp');
					$email= $this->input->post('email');
                    
                   
                    $data = array(
					
                        'username'=> $username,
						'password'=>$password,
						
						'nama'=>$nama,
						'no_hp'=>$no_hp,
						'email'=>$email,
                    );
                    
             
                   
                    $this->db->where('user_id',$user_id);
                    $cek=$this->db->update('admin',$data);    
                    return $cek=true;   

            }
        }
?>