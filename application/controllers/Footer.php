<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Footer extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model('M_footer');  
}
	public function index()
	{	
		$data['socmed'] = $this->M_footer->socmed();
		$data['iconbank'] = $this->M_footer->iconbank();
		$this->load->view('template/foot');
	}
	
	
}