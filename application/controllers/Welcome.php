<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$data['userLogin'] = $this->session->userdata('loginUser');
		$data['v_content'] = "first_layout";
		$this->load->view("template",$data);
	}
}
