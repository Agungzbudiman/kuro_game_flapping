<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_umum');
    }

	public function index()
	{
		$data['userLogin'] = $this->session->userdata('loginData');
		$data['v_content'] = "dashboard/content";
		$this->load->view("template",$data);
	}

	public function icon()
	{
		$data['userLogin'] = $this->session->userdata('loginData');
		$data['v_content'] = "dashboard/icon";
		$this->load->view("template",$data);
	}
}
