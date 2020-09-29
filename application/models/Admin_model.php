<?php
class Admin_model extends CI_Model
{
    public function getAdmin($username)
    {
        return $this->db->get_where('user',['role' => 'admin','username' => $username])->row_array();
    }

    public function getData()
    {
        $this->db->select('*');
        $this->db->from('section');
        $this->db->join('tb_content','tb_content.id_content = section.content');
        return $this->db->get()->result_array();
    }

    public function getLastId()
    {
        $this->db->order_by('id_section','DESC');
        $this->db->limit(1);
        $rs = $this->db->get('section')->row_array();
        return $rs['id_section'];
    }
}
