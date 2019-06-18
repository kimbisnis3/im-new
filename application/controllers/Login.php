<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model('M_header'); 
	$this->load->model('M_home');  
	$this->load->model('M_kategori');  
	$this->load->model('M_login');
	$this->load->model('M_footer'); 
}
	public function index()
	{	
		$this->load->view('template/head');
		$data['mkategori']=$this->M_header->kategori();
		$data['msubkategori']=$this->M_header->subkategori();
		$data['mevent']=$this->M_header->event();
		$data['mlogo']=$this->M_header->logo();
		$this->load->view('template/header',$data);

		$this->load->view('login/v_login');
		$data['mkategori']=$this->M_footer->kategori();
		$data['socmed'] = $this->M_footer->socmed();
		$data['iconbank'] = $this->M_footer->iconbank();
		$this->load->view('template/foot',$data);
	}
	function aksi_login(){
		$username = $this->input->post('nama');
		$password = $this->input->post('pass');
		$where = array(
			'username' => $username,
			'password' => $password,
			'guest' => 'f'
			);

		$cek = $this->M_login->cek_login("mcustomer",$where)->num_rows();
		$data_session = array('alamatkirim', 'penerima','shipment','idshipment','payment','idpayment');
		$this->session->unset_userdata($data_session);
		if($cek > 0){
		$query = $this->db->query("SELECT  * from mcustomer where username = '$username' ");
			$row = $query->row();
			$data_session = array(
				'username' => $username,
				'idcustomer' => $row->kode,
				'namacustomer' => $row->nama,
				'alamatcustomer' => $row->alamat,
				'masuk' => TRUE,
				'telp' => $row->telp,
				'email'=> $row->email
				
);
			$this->session->set_userdata($data_session);

			$this->session->set_flashdata('message', '<div  class="col-md-3 alrt-success alert-dismissible" data-dismiss="alert" aria-hidden="true" >
				<i class="icon fa fa-check"></i>
                Login Sukses
              </div>');
				redirect('billing/customer');

		}else{
			$this->session->set_flashdata('message', '<div style="color : red;">Username dan password Tidak Ditemukan</div>');
			redirect('billing');
		}
	}
	function login(){
		$username = $this->input->post('nama');
		$password = $this->input->post('pass');
		$where = array(
			'username' => $username,
			'password' => $password,
			'guest' => 'f'
			);

		$cek = $this->M_login->cek_login("mcustomer",$where)->num_rows();
		$data_session = array('alamatkirim', 'penerima','shipment','idshipment','payment','idpayment');
		$this->session->unset_userdata($data_session);
		if($cek > 0){
		$query = $this->db->query("SELECT  * from mcustomer where username = '$username' ");
			$row = $query->row();
			$data_session = array(
				'username' => $username,
				'idcustomer' => $row->kode,
				'namacustomer' => $row->nama,
				'alamatcustomer' => $row->alamat,
				'masuk' => TRUE,
				'telp' => $row->telp,
				'email'=> $row->email
				
);
			$this->session->set_userdata($data_session);

			$this->session->set_flashdata('message', '<div  class="col-md-3 alrt-success alert-dismissible" data-dismiss="alert" aria-hidden="true" >
				<i class="icon fa fa-check"></i>
                Login Sukses
              </div>');
				redirect('');

		}else{
			$this->session->set_flashdata('message', '<div style="color : red;">Username dan password Tidak Ditemukan</div>');
			redirect('login');
		}
	}

	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url(''));
	}

	
}