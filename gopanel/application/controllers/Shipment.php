<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Shipment extends CI_Controller {
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
	$this->load->model('M_shipment');
}

	public function index()
	{	
		$this->load->view('template/head');
		$query = $this->db->query("SELECT * FROM xorder WHERE baca='f'");
		$data['xorder'] = $query->num_rows();
		$this->load->view('template/topbar',$data);
		$data['mshipment']=$this->M_shipment->selectAll();
		$this->load->view('shipment/v_shipment',$data);
	}
	function tambah(){
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$email = $this->input->post('ket');
		$data = array(
			'datei' => 'now()',
			'useri' => $this->session->userdata('nama'),
			'nama' => $nama,
			'harga' => $harga,
			'ket' => $ket
			);
		$this->M_shipment->input_data($data,'mshipment');
		$this->session->set_flashdata('message', '<div id="success"class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
                Data Berhasil Ditambahkan
            </div>');
		redirect('shipment/index');
	}
	function editu() {
        $id = $this->uri->segment(3);
        $e = $this->db->where('id', $id)->get('mshipment')->row();

        $kirim['id'] = $e->id;
        $kirim['nama'] = $e->nama;
        $kirim['harga'] = $e->harga;
        $kirim['ket'] = $e->ket;

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($kirim));
    }
	function update(){
		$id = $this->input->post('editid');
		$nama = $this->input->post('editnama');
		$harga = $this->input->post('editharga');
		$email = $this->input->post('editket');
		$data = array(
			'dateu' => 'now()',
			'useru' => $this->session->userdata('nama'),
			'nama' => $nama,
			'harga' => $harga,
			'ket' => $ket
			);

		$where = array(
			'id' => $id
	);

		$this->M_shipment->update_data($where,$data,'mshipment');
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
                Data Berhasil Diubah
              </div>');
				redirect('shipment/index');
			}
	function lihat($id){
		$where = array('id' => $id);
		$data['mshipment'] = $this->M_shipment->lihat_data($where,'mshipment')->result();
		$this->load->view('shipment/v_shipment_e',$data);
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->M_shipment->hapus_data($where,'mshipment');
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
                Data Berhasil Dihapus
              </div>');
		redirect('shipment/index');
	}

}
