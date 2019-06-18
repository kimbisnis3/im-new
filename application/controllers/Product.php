<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model('M_header');
	$this->load->model('M_product');
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

		$data['mkategori']=$this->M_kategori->show();
		$data['mkategoriside']=$this->M_kategori->showside();
    	$data['socmed'] = $this->M_footer->socmed();
		$this->load->view('home/v_home',$data);

		$this->load->view('template/foot');
	}
	public function detail($slug=null)
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

		$data['mproduct'] = $this->M_product->show($where,'mproduct')->result();

		$this->load->view('product/v_product',$data);
		$data['socmed'] = $this->M_footer->socmed();
		$data['iconbank'] = $this->M_footer->iconbank();
		$this->load->view('template/foot',$data);
	}

}
