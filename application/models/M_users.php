<?php

class M_users extends CI_Model {
    function getUser()
    {
    	$this->db->join('tahanan','tahanan.tahanan_id = user.tahanan_id','left');
        return $this->db->from('user')->get()->result();
    }
    function getUserById($id)
    {
    	$this->db->where('user_id',$id);
    	$this->db->join('tahanan','tahanan.tahanan_id = user.tahanan_id','left');
        return $this->db->from('user')->get()->row();
    }
    function alreadyUsername($username)
    {
        return $this->db->where('username',$username)->from('user')->get()->num_rows();
    }

    function alreadyEmail($email)
    {
        return $this->db->where('user_email',$email)->from('user')->get()->num_rows();
    }
}
?>