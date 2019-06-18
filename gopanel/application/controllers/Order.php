<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order extends CI_Controller {
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
	$this->load->model('M_order');
}
	public function index()
	{

		$data = array(
			'dateu' => 'now()',
			'useru' => $this->session->userdata('nama'),
			'baca' => TRUE,
			); 
		$where = array(
			'baca' => FALSE
	);
		$this->M_order->update_data($where,$data,'xorder');
		$this->load->view('template/head');
		$query = $this->db->query("SELECT * FROM xorder WHERE baca='f'");
		$data['xorder'] = $query->num_rows();
		$this->load->view('template/topbar',$data);
		$data['mstatus']=$this->M_order->selectstatus();
		$data['morder']=$this->M_order->select();
		$this->load->view('order/v_order',$data);
	}
	public function today()
	{
		$this->load->view('template/head');
		$query = $this->db->query("SELECT * FROM xorder WHERE baca='f'");
		$data['xorder'] = $query->num_rows();
		$this->load->view('template/topbar',$data);
		$data['mstatus']=$this->M_order->selectstatus();
		$data['mordert']=$this->M_order->selecttoday();
		$this->load->view('order/v_order_today',$data);
	}
	public function detail($id)
	{
		$this->load->view('template/head');
		$query = $this->db->query("SELECT * FROM xorder WHERE baca='f'");
		$data['xorder'] = $query->num_rows();
		$this->load->view('template/topbar',$data);
		$id = $this->uri->segment(3);
		$data['morder']=$this->M_order->lihat_data($id);
		$data['barang']=$this->M_order->barang($id);
		$data['total']=$this->M_order->total($id);
		$data['payship']=$this->M_order->payship($id);
		$this->load->view('order/v_order_e',$data);
	}
	function editu() {
		$id = $this->uri->segment(3);
		$e = $this->db->where('id', $id)->get('xorder')->row();
		$kirim['id'] = $e->id;
		$kirim['ref_status'] = $e->ref_status;
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($kirim));
		}
    function update(){
		$id = $this->input->post('editid');
		$namastatus = $this->input->post('editref_status');
		$data = array(
			'dateu' => 'now()',
			'useru' => $this->session->userdata('nama'),
			'ref_status' => $namastatus,
			);

		$where = array(
			'id' => $id
	);

		$this->M_order->update_data($where,$data,'xorder');
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
                Data Berhasil Diubah
              </div>');
				redirect('order');
			}
	function voidupdate(){
		$id = $this->input->post('voidid');
		$void = $this->input->post('void');
		$data = array(
			'dateu' => 'now()',
			'tglvoid' => 'now()',
			'useru' => $this->session->userdata('nama'),
			'void' => $void,
			);

		$where = array(
			'id' => $id
	);

		$this->M_order->update_data($where,$data,'xorder');
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
                Data Berhasil Divoid
              </div>');
				redirect('order');
			}
	function void($id) {
		$id = $this->uri->segment(3);
		$e = $this->db->where('id', $id)->get('xorder')->row();
		$kirim['id'] = $e->id;
		$kirim['void'] = $e->void;
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($kirim));
	}
	function hapus($id){
		$this->db->where('id',$id);
		$query = $this->db->get('morder');
		$row = $query->row();
		$this->db->delete('morder', array('id' => $id));
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
			Data Berhasil Dihapus
		</div>');
		redirect('order');
			}
	public function fprint(){
		$id = $this->uri->segment(3);
		$data['morder']=$this->M_order->lihat_data($id);
		$data['barang']=$this->M_order->barang($id);
		$data['total']=$this->M_order->total($id);
		$data['payship']=$this->M_order->payship($id);
    	$data['company']=$this->M_order->showcompany();
		$this->load->view('order/order_print',$data);
	}
}