<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ekspedisi extends CI_Controller {
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
	$this->load->model('M_ekspedisi');
}

	public function index()
	{	
		$this->load->view('template/head');
		$query = $this->db->query("SELECT * FROM xorder WHERE baca='f'");
		$data['xorder'] = $query->num_rows();
		$this->load->view('template/topbar',$data);
		$data['mekspedisi']=$this->M_ekspedisi->selectAll();
		$this->load->view('ekspedisi/v_ekspedisi',$data);
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
		$this->M_ekspedisi->input_data($data,'mekspedisi');
		$this->session->set_flashdata('message', '<div id="success"class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
                Data Berhasil Ditambahkan
            </div>');
		redirect('ekspedisi/index');
	}
	function editu() {
        $id = $this->uri->segment(3);
        $e = $this->db->where('id', $id)->get('mekspedisi')->row();

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

		$this->M_ekspedisi->update_data($where,$data,'mekspedisi');
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
                Data Berhasil Diubah
              </div>');
				redirect('ekspedisi/index');
			}
	function lihat($id){
		$where = array('id' => $id);
		$data['mekspedisi'] = $this->M_ekspedisi->lihat_data($where,'mekspedisi')->result();
		$this->load->view('ekspedisi/v_ekspedisi_e',$data);
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->M_ekspedisi->hapus_data($where,'mekspedisi');
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
                Data Berhasil Dihapus
              </div>');
		redirect('ekspedisi/index');
	}

}
