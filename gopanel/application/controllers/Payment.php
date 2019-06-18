<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Payment extends CI_Controller {
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
	$this->load->model('M_payment');
}

	public function index()
	{	
		$this->load->view('template/head');
		$query = $this->db->query("SELECT * FROM xorder WHERE baca='f'");
		$data['xorder'] = $query->num_rows();
		$this->load->view('template/topbar',$data);
		$data['mpayment']=$this->M_payment->selectAll();
		$this->load->view('payment/v_payment',$data);
	}
	function tambah(){
		$nama = $this->input->post('nama');
		$norek = $this->input->post('norek');
		$ket = $this->input->post('ket');
		$data = array(
			'datei' => 'now()',
			'useri' => $this->session->userdata('nama'),
			'nama' => $nama,
			'norek' => $norek,
			'ket' => $ket
			);
		$this->M_payment->input_data($data,'mpayment');
		$this->session->set_flashdata('message', '<div id="success"class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
                Data Berhasil Ditambahkan
            </div>');
		redirect('payment/index');
	}
	function editu() {
        $id = $this->uri->segment(3);
        $e = $this->db->where('id', $id)->get('mpayment')->row();

        $kirim['id'] = $e->id;
        $kirim['nama'] = $e->nama;
        $kirim['norek'] = $e->norek;
        $kirim['ket'] = $e->ket;

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($kirim));
    }
	function update(){
		$id = $this->input->post('editid');
		$nama = $this->input->post('editnama');
		$norek = $this->input->post('editnorek');
		$ket = $this->input->post('editket');
		$data = array(
			'dateu' => 'now()',
			'useru' => $this->session->userdata('nama'),
			'norek' => $norek,
			'nama' => $nama,
			'ket' => $ket
			);

		$where = array(
			'id' => $id
	);

		$this->M_payment->update_data($where,$data,'mpayment');
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
                Data Berhasil Diubah
              </div>');
				redirect('payment/index');
			}
	function lihat($id){
		$where = array('id' => $id);
		$data['mpayment'] = $this->M_payment->lihat_data($where,'mpayment')->result();
		$this->load->view('payment/v_payment_e',$data);
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->M_payment->hapus_data($where,'mpayment');
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
                Data Berhasil Dihapus
              </div>');
		redirect('payment/index');
	}

}
