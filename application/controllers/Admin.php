<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('data')) {
            redirect(base_url('auth'));
        }
        $this->load->model('Admin_model', 'admin');
    }

	public function index()
	{
        $data['section'] = $this->admin->getData();
		$this->load->view('admin/main/index', $data);
	}
}
