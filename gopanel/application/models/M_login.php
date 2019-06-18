<?php

class M_login extends CI_Model{

  function cek_login($tuser,$where){

    return $this->db->get_where($tuser,$where);

  }
  function hitung(){
  	return
  	$this->db->query("SELECT count(*) from tadmin where username='edo' and password='edo' ")->result();
  }
  function cek(){
  	return
  	$this->db->get('tadmin')->num_rows();
  }
}
