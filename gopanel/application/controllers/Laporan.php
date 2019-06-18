<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Laporan extends CI_Controller {
function __construct(){
	parent::__construct();
	if ($this->session->userdata['logged'] == TRUE)
        {
        }
        else
        {
        	$this->session->set_flashdata('message', '<div style="color : red;">Login Terlebih Dahulu</div>');
            redirect('login');
        }
	$this->load->model('M_laporan');
}
	public function index()
	{
		$this->load->view('template/head');
		$query = $this->db->query("SELECT * FROM xorder WHERE baca='f'");
		$data['xorder'] = $query->num_rows();
		$this->load->view('template/topbar',$data);
		$data['mjenisbarang']=$this->M_laporan->selectjenisbarang();
		$this->load->view('laporan/v_laporan_p',$data);
	}
	public function fprint(){
		$tglawal = $this->input->post('awal');
		$tglakhir = $this->input->post('akhir');
		$awal = date("Y-m-d", strtotime($tglawal));
		$akhir = date("Y-m-d", strtotime($tglakhir));
		$jenisbarang = $this->input->post('jenisbarang');
		$data['mlaporan']=$this->M_laporan->lihat_data($awal,$akhir,$jenisbarang);
		$data['company']=$this->M_laporan->showcompany();
		$this->load->view('laporan/v_laporan',$data);
	}
}