<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Member extends CI_Controller {
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
	$this->load->model('M_member');
}
	public function index()
	{
		$this->load->view('template/head');
		$query = $this->db->query("SELECT * FROM xorder WHERE baca='f'");
		$data['xorder'] = $query->num_rows();
		$this->load->view('template/topbar',$data);
		$data['mmember']=$this->M_member->tammpilsemua();
		$this->load->view('member/v_member',$data);
	}
	
	function editu() {
		$id = $this->uri->segment(3);
		$e = $this->db->where('id', $id)->get('mcustomer')->row();
		$kirim['id'] = $e->id;
		$kirim['status'] = $e->status;
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($kirim));
		}
	function update(){
		
				$id = $this->input->post('editid');
				$status = $this->input->post('editstatus');
				$image = $this->upload->data('file_name');
				$data = array(
					'dateu' => 'now()',
					'useru' => $this->session->userdata('nama'),
					'id' => $id,
					'status' => $status
			);
				$where = array(
					'id' => $id
			);
				$this->M_member->update_data($where,$data,'mcustomer');

				redirect('member');
			}
			
	function hapus($id){
		$this->db->where('id',$id);
		$query = $this->db->get('mcustomer');
		$row = $query->row();
		unlink("./uploads/member/$row->image");
		$this->db->delete('mcustomer', array('id' => $id));
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
			Data Berhasil Dihapus
		</div>');
		redirect('member');
			}
}