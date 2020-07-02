<?php

class M_wbp extends CI_Model {
    function getWbp()
    {
        return $this->db->from('tahanan')->get()->result();
    }
    function getTahananById($id)
    {
    	$this->db->select('t.*,uc.user_name as create_name,uu.user_name as update_name');
    	$this->db->join('user uc','uc.user_id = t.create_by','left');
    	$this->db->join('user uu','uu.user_id = t.update_by','left');
    	$this->db->where('t.tahanan_id',$id);
        return $this->db->from('tahanan t')->get()->row();
    }
}
?>