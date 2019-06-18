<?php

class M_login extends CI_Model{

  function cek_login($mcustomer,$where){

    return $this->db->get_where($mcustomer,$where);

  }
  function datauser(){
    $username = $this->session->userdata('nama');
    $this->db->select('*');
    			$this->db->from('mcustomer');
    			$this->db->join('mkaryawan', 'mkaryawan.nik = tuser.ref_mkaryawan');
    			$this->db->where('t.user.nama_user' == $username);
    			$query = $this->db->get();
  }
  function dat(){
    $username = $this->session->userdata('nama');
  }
  function edit_data($where,$tuser){   
    return $this->db->get_where($tuser,$where);
  }
}
