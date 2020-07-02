<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model('m_umum');
    }
    
	public function index()
	{
        if($this->session->userdata('loginUser')){
            redirect('welcome');
        }
        $data['v_content'] = "login_layout";
        $this->load->view("template",$data);
	}

	public function doLogin(){
        if($this->session->userdata('loginUser')){
            redirect('welcome');
        }

		$dataPost = $this->input->post();
        $result = $this->m_login->loginUser($dataPost['username'], md5($dataPost['password']));
        if ($result) {
            $this->m_umum->generatePesan("Success Login","berhasil");
            redirect('welcome');  
        }else{
            $this->m_umum->generatePesan("Failed Login","gagal");
            redirect('login');
        }
	}

    public function register()
    {
        if($this->session->userdata('loginUser')){
            redirect('welcome');
        }
        $data['v_content'] = "regis_layout";
        $this->load->view("template",$data);
    }

    public function doRegis(){
        if($this->session->userdata('loginUser')){
            redirect('welcome');
        }

        $dataPost = $this->input->post();
        $check = $this->m_login->alreadyUsername($dataPost['username']);
        if ($check>0) {
            $this->m_umum->generatePesan("Username Already used","gagal");
            redirect('login/register');
        }
        $result = $this->m_login->registerUser(['username'=>$dataPost['username'],'password'=>md5($dataPost['password'])]);
        if ($result) {
            $this->m_umum->generatePesan("Success Register","berhasil");
            redirect('login');  
        }else{
            $this->m_umum->generatePesan("Failed Register","gagal");
            redirect('login/register');
        }
    }

    public function log(){
        $this->session->unset_userdata('loginUser');
        $this->m_umum->generatePesan("Success Logout","berhasil");
        redirect('login');
    }
}
