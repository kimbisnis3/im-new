<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kategori extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model('M_header'); 
	$this->load->model('M_kategori'); 
	$this->load->model('M_footer');  
}
	public function index()
	{	
		$this->load->view('template/head');
		$data['mkategori']=$this->M_header->kategori();
		$data['msubkategori']=$this->M_header->subkategori();
		$data['mlogo']=$this->M_header->logo();
		$this->load->view('template/header',$data);

		$data['mkategori']=$this->M_kategori->show();
		$data['mkategoriside']=$this->M_kategori->showside();
		$this->load->view('home/v_home',$data);

		$data['mkategori']=$this->M_footer->kategori();
		$data['socmed'] = $this->M_footer->socmed();
		$data['iconbank'] = $this->M_footer->iconbank();
		$this->load->view('template/foot',$data);
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

		$data['mkategori'] = $this->M_kategori->show($where,'mkategori')->result();

		$data['mtitlekategori']=$this->M_kategori->titlekategori();
		$this->load->view('kategori/v_kategori',$data);

		$data['mkategori']=$this->M_footer->kategori();
		$data['socmed'] = $this->M_footer->socmed();
		$data['iconbank'] = $this->M_footer->iconbank();
		$this->load->view('template/foot',$data);
	}
	
}