<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Landing_model', 'landing');
	}

	public function index()
	{
		$data['section'] = $this->landing->getSection();
		$this->load->view('landing/index',$data);
	}
}
