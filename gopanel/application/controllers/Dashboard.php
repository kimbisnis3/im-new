<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
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
	$this->load->model('M_dashboard');
	$this->load->model('M_login');
}
	public function index()
	{
		$this->load->view('template/head');
		$query = $this->db->query("SELECT * FROM xorder WHERE baca='f'");
		$data['xorder'] = $query->num_rows();
		$this->load->view('template/topbar',$data);
			#$this->db->like('stat', 'n');
		$this->db->from('mbarang');
		$data['mbarang'] = $this->db->count_all_results();
		$this->db->where('guest', 'f');
		$this->db->from('mcustomer');
		$data['mcustomer'] = $this->db->count_all_results();
		$this->db->from('mcustomer');
		$data['totalcustomer'] = $this->db->count_all_results();
		#$this->db->where('guest', 'f');
		$this->db->from('xorder');
		$query = $this->db->query("SELECT * FROM xorder WHERE DATE(tgl) = DATE(NOW())");
		$data['xorder'] = $query->num_rows();
		$this->load->view('dashboard/v_dashboard', $data);
	}
	function visitor()
	{
		$data['w_visitor']=$this->M_dashboard->viewvisitor();
		$this->load->view('dashboard/v_dashboard_e',$data);
	}
	function editu() {
        $e = $this->db->query("SELECT count(*) as jum FROM xorder where baca=FALSE")->row();
        $kirim['jum'] = $e->jum;

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($kirim));
    }
    public function getCount(){
		
		$chart 	= $this->M_dashboard->getpenjualan();


		echo json_encode(array(
			'chart'	=> $chart)
		);
	}
}
