<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Carapesan extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model('M_header'); 
	$this->load->model('M_carapesan');  
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
		$data['mcarapesan'] = $this->M_carapesan->show();
		$this->load->view('carapesan/v_carapesan',$data);

		$data['mkategori']=$this->M_footer->kategori();
		$data['socmed'] = $this->M_footer->socmed();
		$data['iconbank'] = $this->M_footer->iconbank();
		$this->load->view('template/foot',$data);
	}
	
	
}