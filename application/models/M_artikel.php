 <?php
class M_artikel extends CI_Model{
    function get_user_all()
    {
        $query=$this->db->query("SELECT * from artikel order by tanggal_post DESC");
        return $query->result();
    }
}