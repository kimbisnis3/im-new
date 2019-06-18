<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Company extends CI_Controller {
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
	$this->load->model('M_company');
}

	public function index()
	{	$this->load->view('template/head');
		$query = $this->db->query("SELECT * FROM xorder WHERE baca='f'");
		$data['xorder'] = $query->num_rows();
		$this->load->view('template/topbar',$data);
		$data['tcompany']=$this->M_company->selectAll();
		$this->load->view('company/v_company',$data);
	}
	function tambah(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$phone = $this->input->post('phone');
		$fax = $this->input->post('fax');
		$email = $this->input->post('email');
		$web = $this->input->post('web');
		$owner = $this->input->post('nama');
		$data = array(
			'datei' => 'now()',
			'useri' => $this->session->userdata('nama'),
			'nama' => $nama,
			'alamat' => $alamat,
			'phone' => $phone,
			'fax' => $fax,
			'email' => $email,
			'web' => $web,
			'owner' => $owner
			);
		$this->M_company->input_data($data,'tcompany');
		$this->session->set_flashdata('message', '<div id="success"class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
                Data Berhasil Ditambahkan
            </div>');
		redirect('company');
	}
	function editu() {
        $id = $this->uri->segment(3);
        $e = $this->db->where('id', $id)->get('tcompany')->row();

        $kirim['id'] = $e->id;
        $kirim['nama'] = $e->nama;
        $kirim['alamat'] = $e->alamat;
        $kirim['phone'] = $e->phone;
        $kirim['fax'] = $e->fax;
        $kirim['email'] = $e->email;
        $kirim['web'] = $e->web;
        $kirim['owner'] = $e->owner;

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($kirim));
    }
	function update(){
		$id = $this->input->post('editid');
		$nama = $this->input->post('editnama');
		$alamat = $this->input->post('editalamat');
		$phone = $this->input->post('editphone');
		$fax = $this->input->post('editfax');
		$email = $this->input->post('editemail');
		$web = $this->input->post('editweb');
		$owner = $this->input->post('editowner');
		$data = array(
			'dateu' => 'now()',
			'useru' => $this->session->userdata('nama'),
			'nama' => $nama,
			'alamat' => $alamat,
			'phone' => $phone,
			'fax' => $fax,
			'email' => $email,
			'web' => $web,
			'owner' => $owner
			);

		$where = array(
			'id' => $id
	);

		$this->M_company->update_data($where,$data,'tcompany');
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
                Data Berhasil Diubah
              </div>');
				redirect('company');
			}
	function lihat($id){
		$where = array('id' => $id);
		$data['tcompany'] = $this->M_company->lihat_data($where,'tcompany')->result();
		$this->load->view('company/v_company_e',$data);
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->M_company->hapus_data($where,'tcompany');
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
                Data Berhasil Dihapus
              </div>');
		redirect('company');
	}

}
