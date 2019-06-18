<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Status extends CI_Controller {
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
	$this->load->model('M_status');
}

	public function index()
	{	
		$this->load->view('template/head');
		$query = $this->db->query("SELECT * FROM xorder WHERE baca='f'");
		$data['xorder'] = $query->num_rows();
		$this->load->view('template/topbar',$data);
		$data['mstatus']=$this->M_status->selectAll();
		$this->load->view('status/v_status',$data);
	}
	function tambah(){
		$nama = $this->input->post('nama');
		$ket = $this->input->post('ket');
		$data = array(
			'datei' => 'now()',
			'useri' => $this->session->userdata('nama'),
			'nama' => $nama,
			'ket' => $ket
			);
		$this->M_status->input_data($data,'mstatus');
		$this->session->set_flashdata('message', '<div id="success"class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
                Data Berhasil Ditambahkan
            </div>');
		redirect('status/index');
	}
	function editu() {
        $id = $this->uri->segment(3);
        $e = $this->db->where('id', $id)->get('mstatus')->row();

        $kirim['id'] = $e->id;
        $kirim['nama'] = $e->nama;
        $kirim['ket'] = $e->ket;

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($kirim));
    }
	function update(){
		$id = $this->input->post('editid');
		$nama = $this->input->post('editnama');
		$ket = $this->input->post('editket');
		$data = array(
			'dateu' => 'now()',
			'useru' => $this->session->userdata('nama'),
			'nama' => $nama,
			'ket' => $ket
			);

		$where = array(
			'id' => $id
	);

		$this->M_status->update_data($where,$data,'mstatus');
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
                Data Berhasil Diubah
              </div>');
				redirect('status/index');
			}
	function lihat($id){
		$where = array('id' => $id);
		$data['mstatus'] = $this->M_status->lihat_data($where,'mstatus')->result();
		$this->load->view('status/v_status_e',$data);
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->M_status->hapus_data($where,'mstatus');
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
                Data Berhasil Dihapus
              </div>');
		redirect('status/index');
	}

}
