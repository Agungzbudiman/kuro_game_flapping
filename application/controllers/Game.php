<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function play()
	{
		$data['userLogin'] = $this->session->userdata('loginUser');
		$data['v_content'] = "game_layout";
		$this->load->view("template",$data);
	}

	public function save()
	{
		$get = $this->input->get();
		if (!empty($get['uid'])) {
			$check = $this->db->where('user_id',$get['uid'])->from('tbl_user')->get()->row_array();
			if (!empty($check)) {
				if (intval($get['score'])>intval($check['score'])) {
					$this->db->update('tbl_user',['score'=>$get['score']],['user_id'=>$get['uid']]);
				}
			}
		}
	}

}