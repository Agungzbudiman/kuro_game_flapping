<?php

class M_kunjungan extends CI_Model {
    function checkKunjungan()
    {
        $dataUser = $this->session->userdata('loginData');
        return $this->db->query('select * from kunjungan
                                where kunjungan_status > 0 and kunjungan_status < 4 and id_user = "'.$dataUser['userId'].'"')->row();
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