<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Logo extends CI_Controller {
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
	$this->load->model('M_logo');
}
	public function index()
	{
		$this->load->view('template/head');
		$query = $this->db->query("SELECT * FROM xorder WHERE baca='f'");
		$data['xorder'] = $query->num_rows();
		$this->load->view('template/topbar',$data);
		$data['mlogo']=$this->M_logo->selectAll();
		$this->load->view('logo/v_logo',$data);
	}
	public function upload_process(){
		$nmfile = "br_2_".time();
		$config['upload_path'] = './uploads/logo';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1366';
		$config['max_height']  = '768';
		$config['file_name'] = $nmfile;
		$this->upload->initialize($config);
		$slug = slug($this->input->post('nama'));
		//if upload failed
		if ( ! $this->upload->do_upload('image')){
			$data_insert = array(
					'useri' => $this->session->userdata('nama'),
					'nama' => $this->input->post('nama'),
					'artikel' => $this->input->post('artikel'),
					'slug' => $slug
					);
			//query to insert into myupload table
			$this->db->insert('mlogo', $data_insert);
			$this->session->set_flashdata('message', '<div id="success"class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
	Data Berhasil Ditambahkan
</div>');
			redirect('logo');
		//if upload success
		}else{
			$data_insert = array(
					'useri' => $this->session->userdata('nama'),
					'nama' => $this->input->post('nama'),
					'artikel' => $this->input->post('artikel'),
					'slug' => $slug,
					'image' => $this->upload->data('file_name')
					);
			//query to insert into myupload table
			$this->db->insert('mlogo', $data_insert);
			$this->session->set_flashdata('message', '<div id="success"class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
	Data Berhasil Ditambahkan
</div>');
			redirect('logo');
		}
	}
	function editu() {
		$id = $this->uri->segment(3);
		$e = $this->db->where('id', $id)->get('mlogo')->row();
		$kirim['id'] = $e->id;
		$kirim['nama'] = $e->nama;
		$kirim['artikel'] = $e->artikel;
		$kirim['image'] = $e->image;
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($kirim));
		}
	function update(){
		$nmfile = "pr_1";
		$config['upload_path'] = './uploads/logo';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000'; //in kb
		$config['max_width']  = '1366';
		$config['max_height']  = '768';
		$config['file_name'] = $nmfile;
		$slug = slug($this->input->post('editnama'));
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
				redirect('logo');
		//if upload success
		}
				@unlink('./uploads/logo/'.$filelama);
				$id = $this->input->post('editid');
				$nama = $this->input->post('editnama');
				$artikel = $this->input->post('editartikel');
				$image = $this->upload->data('file_name');
				$data = array(
					'dateu' => 'now()',
					'useru' => $this->session->userdata('nama'),
					'id' => $id,
					'nama' => $nama,
					'artikel' => $artikel,
					'slug' => $slug,
					'image' => $image
			);
				$where = array(
					'id' => $id
			);
				$this->M_logo->update_data($where,$data,'mlogo');

				redirect('logo');
			}
			if (!empty($filelamam)) {
					@unlink('./uploads/logo/'.$filelamam);
					$id = $this->input->post('editid');
					$image = $this->input->post('editfilelaman');
					$data = array(
					'id' => $id,
					'image' => $image 
					);
						$where = array(
							'id' => $id
					);
					$this->M_logo->update_data($where,$data,'mlogo');
					redirect('logo');
				}
			else {
				$id = $this->input->post('editid');
				$nama = $this->input->post('editnama');
				$artikel = $this->input->post('editartikel');
				$data = array(
					'dateu' => 'now()',
					'useru' => $this->session->userdata('nama'),
					'id' => $id,
					'nama' => $nama,
					'slug' => $slug,
					'artikel' => $artikel,
					);
				$where = array(
					'id' => $id
			);
				$this->M_logo->update_data($where,$data,'mlogo');
				$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
                Data Berhasil Diubah
              </div>');
				redirect('logo');
			};
			}	
	function hapus($id){
		$this->db->where('id',$id);
		$query = $this->db->get('mlogo');
		$row = $query->row();
		unlink("./uploads/logo/$row->image");
		$this->db->delete('mlogo', array('id' => $id));
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
			Data Berhasil Dihapus
		</div>');
		redirect('logo');
			}
}