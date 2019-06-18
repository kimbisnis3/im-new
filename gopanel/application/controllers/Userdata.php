<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {
function __construct(){
	parent::__construct();
	if ($this->session->userdata['logged'] == TRUE)
        {
            //do something
        }
        else
        {
            redirect('Login'); //if session is not there, redirect to login page
        }  
	$this->load->model('M_users');
}
	public function index()
	{
		$this->load->view('template/head');
		$query = $this->db->query("SELECT * FROM xorder WHERE baca='f'");
		$data['xorder'] = $query->num_rows();
		$this->load->view('template/topbar',$data);
		$this->load->view('users/v_users_e');
	}
	function edit($nama_user){
		$where = array('nama_user' => $nama_user);
		$data['tuser'] = $this->M_login->edit_data($where,'tuser')->result();
		$this->load->view('users/v_users_e',$data);
	}
	function lihat($nama_user){
		$where = array('nama_user' => $nama_user);
		$data['tuser'] = $this->M_users->lihat_data($where,'tuser')->result();
		$this->load->view('users/v_users_e',$data);
	}
	function lihatdata(){
		$this->load->view('users/v_users_e');
	}
	function editu() {
        $id = $this->uri->segment(3);
        $e = $this->db->where('id', $id)->get('tuser')->row();

        $kirim['id'] = $e->id;
        $kirim['pass'] = $e->pass;

        $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($kirim));
    }
    function update(){
	$id = $this->input->post('editid');
	$pass = $this->input->post('editpassn');

	$data = array(
		'dateu' => 'now()',
		'useru' => $this->session->userdata('nama'),
		'id' => $id,
		'pass' => $pass
	);

	$where = array(
		'id' => $id
	);

	$this->M_users->update_data($where,$data,'tuser');
	$this->session->set_flashdata('message', '<div id="success"class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
                Data Berhasil Diubah
            </div>');
	redirect('users/v_users_e');
}

}