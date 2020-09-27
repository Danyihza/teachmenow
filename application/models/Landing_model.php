<?php
class Landing_model extends CI_Model
{
    public function getSection()
    {
        $this->db->select('*');
        $this->db->from('section');
        $this->db->join('tb_content','section.content = tb_content.id_content');
        return $this->db->get()->result_array();
    }
}
