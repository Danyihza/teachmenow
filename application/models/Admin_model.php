<?php
class Admin_model extends CI_Model
{
    public function getAdmin($username)
    {
        return $this->db->get_where('user',['role' => 'admin','username' => $username])->row_array();
    }

    public function getData()
    {
        return $this->db->get('section')->result_array();
    }

    public function getLastId()
    {
        $this->db->order_by('id_section','DESC');
        $this->db->limit(1);
        $rs = $this->db->get('section')->row_array();
        return $rs['id_section'];
    }
}
