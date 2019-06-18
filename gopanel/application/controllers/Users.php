<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {
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
	$this->load->model('M_users');
}
	public function index()
	{
		$this->load->view('template/head');
		$query = $this->db->query("SELECT * FROM xorder WHERE baca='f'");
		$data['xorder'] = $query->num_rows();
		$this->load->view('template/topbar',$data);
		$data['tuser']=$this->M_users->selectAll();
		$this->load->view('users/v_users',$data);
	}
	public function upload_process(){
		$nmfile = "br_2_".time();
		$config['upload_path'] = './uploads/users';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1366';
		$config['max_height']  = '768';
		$config['file_name'] = $nmfile;
		$this->upload->initialize($config);
		$slug = slug($this->input->post('judul'));
		//if upload failed
		if ( ! $this->upload->do_upload('image')){
			$data_insert = array(
					'useri' => $this->session->userdata('nama'),
					'namafull' => $this->input->post('namafull'),
					'username' => $this->input->post('username'),
					'pass' => md5($this->input->post('pass')),
					'aktif ' => TRUE
					);
			//query to insert into myupload table
			$this->db->insert('tuser', $data_insert);
			$this->session->set_flashdata('message', '<div id="success"class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
	Data Berhasil Ditambahkan
</div>');
			redirect('users');
		//if upload success
		}else{
			$data_insert = array(
					'useri' => $this->session->userdata('nama'),
					'namafull' => $this->input->post('namafull'),
					'username' => $this->input->post('username'),
					'pass' => md5($this->input->post('pass')),
					'aktif ' => TRUE,
					'image' => $this->upload->data('file_name')
					);
			//query to insert into myupload table
			$this->db->insert('tuser', $data_insert);
			$this->session->set_flashdata('message', '<div id="success"class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
	Data Berhasil Ditambahkan
</div>');
			redirect('users');
		}
	}
	function editu() {
		$id = $this->uri->segment(3);
		$e = $this->db->where('id', $id)->get('tuser')->row();
		$kirim['id'] = $e->id;
		$kirim['username'] = $e->username;
		$kirim['pass'] = $e->pass;
		$kirim['namafull'] = $e->namafull;
		$kirim['aktif'] = $e->aktif;
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($kirim));
		}

	function editpass() {
		$id = $this->uri->segment(3);
		$e = $this->db->where('id', $id)->get('tuser')->row();
		$kirim['id'] = $e->id;
		$kirim['pass'] = $e->pass;
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($kirim));
		}
	function update(){
		$nmfile = "pr_1_e".time();
		$config['upload_path'] = './uploads/users';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000'; //in kb
		$config['max_width']  = '1366';
		$config['max_height']  = '768';
		$config['file_name'] = $nmfile;
		$slug = slug($this->input->post('editjudul'));
		$this->upload->initialize($config);
		//if upload failed
		$filelama   = $this->input->post('editfilelama');
		$filelamam   = $this->input->post('editfilelamam');
		if ($_FILES['editimage']['name']) {

		if ( ! $this->upload->do_upload('editimage')){
			$this->session->set_flashdata('message', '<div id="warning" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-times"></i>
                Gagal, Resolusi Gambar Max 1366x768
              </div>');
				redirect('users');
		//if upload success
		}
				@unlink('./uploads/users/'.$filelama);
				$id = $this->input->post('editid');
				$namafull = $this->input->post('editnamafull');
				$username = $this->input->post('editusername');
				$pass = md5($this->input->post('editpass'));
				$aktif = $this->input->post('editaktif');
				$image = $this->upload->data('file_name');
				$data = array(
					'dateu' => 'now()',
					'useru' => $this->session->userdata('nama'),
					'id' => $id,
					'namafull' => $namafull,
					'username' => $username,
					'pass' => $pass,
					'aktif' => $aktif,
					'image' => $image
			);
				$where = array(
					'id' => $id
			);
				$this->M_users->update_data($where,$data,'tuser');

				redirect('users');
			}
			if (!empty($filelamam)) {
					@unlink('./uploads/users/'.$filelamam);
					$id = $this->input->post('editid');
					$image = $this->input->post('editfilelaman');
					$data = array(
					'id' => $id,
					'image' => $image 
					);
						$where = array(
							'id' => $id
					);
					$this->M_users->update_data($where,$data,'tuser');
					redirect('users');
				}
			else {
				$id = $this->input->post('editid');
				$namafull = $this->input->post('editnamafull');
				$username = $this->input->post('editusername');
				$pass = md5($this->input->post('editpass'));
				$aktif = $this->input->post('editaktif');
				$data = array(
					'dateu' => 'now()',
					'useru' => $this->session->userdata('nama'),
					'id' => $id,
					'namafull' => $namafull,
					'username' => $username,
					'pass' => $pass,
					'aktif' => $aktif,
					);
				$where = array(
					'id' => $id
			);
				$this->M_users->update_data($where,$data,'tuser');
				$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
                Data Berhasil Diubah
              </div>');
				redirect('users');
			};
			}	
	function updatepass(){
		$nmfile = "pr_1_e".time();
		$config['upload_path'] = './uploads/users';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000'; //in kb
		$config['max_width']  = '1366';
		$config['max_height']  = '768';
		$config['file_name'] = $nmfile;
		$slug = slug($this->input->post('editjudul'));
		$this->upload->initialize($config);
		//if upload failed
		$filelama   = $this->input->post('editfilelama');
		$filelamam   = $this->input->post('editfilelamam');
		if ($_FILES['editimage']['name']) {

		if ( ! $this->upload->do_upload('editimage')){
			$this->session->set_flashdata('message', '<div id="warning" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-times"></i>
                Gagal, Resolusi Gambar Max 1366x768
              </div>');
				redirect('users/userdata');
		//if upload success
		}
				@unlink('./uploads/users/'.$filelama);
				$id = $this->input->post('editid');
				$namafull = $this->input->post('editnamafull');
				$username = $this->input->post('editusername');
				$pass = md5($this->input->post('editpass'));
				$aktif = $this->input->post('editaktif');
				$image = $this->upload->data('file_name');
				$data = array(
					'dateu' => 'now()',
					'useru' => $this->session->userdata('nama'),
					'id' => $id,
					'namafull' => $namafull,
					'username' => $username,
					'pass' => $pass,
					'aktif' => $aktif,
					'image' => $image
			);
				$where = array(
					'id' => $id
			);
				$this->M_users->update_data($where,$data,'tuser');

				redirect('users');
			}
			if (!empty($filelamam)) {
					@unlink('./uploads/users/'.$filelamam);
					$id = $this->input->post('editid');
					$image = $this->input->post('editfilelaman');
					$data = array(
					'id' => $id,
					'image' => $image 
					);
						$where = array(
							'id' => $id
					);
					$this->M_users->update_data($where,$data,'tuser');
					redirect('users/userdata');
				}
			else {
				$id = $this->input->post('editid');
				$namafull = $this->input->post('editnamafull');
				$username = $this->input->post('editusername');
				$pass = md5($this->input->post('editpass'));
				$aktif = $this->input->post('editaktif');
				$data = array(
					'dateu' => 'now()',
					'useru' => $this->session->userdata('nama'),
					'id' => $id,
					'namafull' => $namafull,
					'username' => $username,
					'pass' => $pass,
					'aktif' => $aktif,
					);
				$where = array(
					'id' => $id
			);
				$this->M_users->update_data($where,$data,'tuser');
				$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
                Data Berhasil Diubah
              </div>');
				redirect('users/userdata');
			};
			}	
	function hapus($id){
		$this->db->where('id',$id);
		$query = $this->db->get('tuser');
		$row = $query->row();
		$this->db->delete('tuser', array('id' => $id));
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
			Data Berhasil Dihapus
		</div>');
		redirect('users');
			}

	public function userdata()
	{
		$this->load->view('template/head');
		$query = $this->db->query("SELECT * FROM xorder WHERE baca='f'");
		$data['xorder'] = $query->num_rows();
		$this->load->view('template/topbar',$data);
		$this->load->view('users/v_users_e');
	}
}