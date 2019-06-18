<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Event extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model('M_header'); 
	$this->load->model('M_event');  
	$this->load->model('M_footer');  
}
	public function index()
	{	
		
	}
	public function daftar($slug=null)
	{
		if ($slug === null) 
        redirect(error);
		$this->load->view('template/head');
		$data['mkategori']=$this->M_header->kategori();
		$data['msubkategori']=$this->M_header->subkategori();
		$data['mevent']=$this->M_header->event();
		$data['mlogo']=$this->M_header->logo();
		$this->load->view('template/header',$data);
		#konten
		$where = $slug;
		$data['mevent'] = $this->M_event->show($where,'mevent')->result();

		$data['meventside'] = $this->M_event->showside();
		$this->load->view('event/v_event',$data);

		$data['mkategori']=$this->M_footer->kategori();
		$data['socmed'] = $this->M_footer->socmed();
		$data['iconbank'] = $this->M_footer->iconbank();
		$this->load->view('template/foot',$data);
	}
	
}