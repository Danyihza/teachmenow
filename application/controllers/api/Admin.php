<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model', 'admin');
    }
    public function index()
    {
        $this->load->view('landing/index');
    }

    public function login()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $res = $this->admin->getAdmin($username);
        if ($res) {
            if (password_verify($password, $res['password'])) {
                $rs = [
                    'status' => '200 OK',
                    'data' => $res,
                    'message' => 'Success'
                ];
                $this->session->set_userdata('data', $res);
                echo json_encode($rs);
            } else {
                $rs = [
                    'status' => '200 OK',
                    'message' => 'Wrong Password'
                ];
                echo json_encode($rs);
            }
        } else {
            $rs = [
                'status' => '200 OK',
                'message' => 'User not found'
            ];
            echo json_encode($rs);
        }
    }

    public function addData()
    {
        $title = $this->input->post('title');
        $heading1 = $this->input->post('heading1');
        $heading2 = $this->input->post('heading2');
        $lfticon = $this->input->post('lfticon');
        $lfticondsc = $this->input->post('lfticondsc');
        $rghticon = $this->input->post('rghticon');
        $rghticondsc = $this->input->post('rghticondsc');
        $mdlicon = $this->input->post('mdlicon');
        $mdlicondsc = $this->input->post('mdlicondsc');

        $lastId = $this->admin->getLastId();
        $dataTosection = [
            'id_section' => $lastId + 1,
            'title' => $title,
            'banner' => 'about-us.png',
            'content' => $lastId + 1
        ];
        $dataTocontent = [
            'id_content' => $lastId + 1,
            'content_1' => $heading1,
            'content_2' => $heading2,
            'content_3' => $lfticon,
            'content_4' => $lfticondsc,
            'content_5' => $rghticon,
            'content_6' => $rghticondsc,
            'content_7' => $mdlicon,
            'content_8' => $mdlicondsc
        ];
        $this->db->insert('section', $dataTosection);
        $this->db->insert('tb_content', $dataTocontent);

        echo 'Success';
    }

    public function deleteData($id)
    {
        $this->db->where('id_section', $id);
        $this->db->delete('section');

        $this->db->where('id_content', $id);
        $this->db->delete('tb_content');

        $response = [
            'status' => 'success',
            'message' => "Data with id=$id has been Deleted"
        ];

        echo json_encode($response);
    }

    public function updateData()
    {
        $id=$this->input->post('id');
        $title =[
            'title' => $this->input->post('title')
        ]; 
        $data = [
            'content_1' => $this->input->post('content_1'),
            'content_2' => $this->input->post('content_2'),
            'content_3' => $this->input->post('content_3'),
            'content_4' => $this->input->post('content_4'),
            'content_5' => $this->input->post('content_5'),
            'content_6' => $this->input->post('content_6'),
            'content_7' => $this->input->post('content_7'),
            'content_8' => $this->input->post('content_8'),
            'content_9' => $this->input->post('content_9'),
            'content_10' => $this->input->post('content_10')
        ];

        $is_there = $this->db->get_where('section', ['id_section' =>$id])->row_array();
        if ($is_there) {
            $this->db->where('id_section', $id);
            $this->db->update('section', $title);
    
            $this->db->where('id_content', $id);
            $this->db->update('tb_content', $data);
    
            echo 'Success';
            
        }else{
            echo 'Failed id not found';
        }

    }
}
