<?php

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->model('M_login');

	}

	function index(){
		$this->load->view('login/v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'pass' => md5($password),
			'aktif' => TRUE
			);

		$cek = $this->M_login->cek_login("tuser",$where)->num_rows();
		if($cek > 0){
			$query = $this->db->query("SELECT  * from tuser where tuser.username = '$username' ");
			$this->db->select('*');
			$this->db->from('tuser');
			$this->db->where('tuser.username' ,$username);
			$row = $query->row();
			$data_session = array(
				'id' => $row->id,
				'username' => $username,
				'namafull' => $row->namafull,
				'pass' => $row->pass,
				'status' => online,
				'logged' => TRUE
				
);
			$this->session->set_userdata($data_session);

			$this->session->set_flashdata('message', '<div  class="col-md-3 alrt-success alert-dismissible" data-dismiss="alert" aria-hidden="true" >
				<i class="icon fa fa-check"></i>
                Login Sukses
              </div>');
				redirect(base_url('dashboard'));

		}else{
			$this->session->set_flashdata('message', '<div style="color : red;">Username dan password Tidak Ditemukan</div>');
			redirect('login');
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
