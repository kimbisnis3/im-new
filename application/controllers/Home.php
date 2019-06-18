<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model('M_header');
	$this->load->model('M_home');
	$this->load->model('M_kategori');
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
		$data['mslideshow']=$this->M_home->slideshow();
		$data['mbarang']=$this->M_home->tampilbarang();
		$data['mkategori']=$this->M_home->tampilkategorilimit();
		$this->load->view('home/v_home',$data);

		$data['mkategori']=$this->M_footer->kategori();
		$data['socmed'] = $this->M_footer->socmed();
		$data['iconbank'] = $this->M_footer->iconbank();
		$this->load->view('template/foot',$data);
	}


}
