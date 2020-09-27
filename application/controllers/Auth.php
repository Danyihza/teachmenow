<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/auth/login');
    }
    
    public function logout()
    {
        $this->session->unset_userdata('data');
        redirect(base_url('auth'));
    }
}
