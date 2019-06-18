<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class History extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model('M_header'); 
	$this->load->model('M_history');  
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
		#konten
		$id = $this->session->userdata('idcustomer');
		$data['mhistory'] = $this->M_history->show($id);
		$this->load->view('history/v_history',$data);

		$data['mkategori']=$this->M_footer->kategori();
		$data['socmed'] = $this->M_footer->socmed();
		$data['iconbank'] = $this->M_footer->iconbank();
		$this->load->view('template/foot',$data);
	}
	
	
}