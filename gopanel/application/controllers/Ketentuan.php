<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ketentuan extends CI_Controller {
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
	$this->load->model('M_ketentuan');
}
	public function index()
	{
		$this->load->view('template/head');
		$query = $this->db->query("SELECT * FROM xorder WHERE baca='f'");
		$data['xorder'] = $query->num_rows();
		$this->load->view('template/topbar',$data);
		$data['mketentuan']=$this->M_ketentuan->selectAll();
		$this->load->view('ketentuan/v_ketentuan',$data);
	}
	public function upload_process(){
		$nmfile = "br_2_".time();
		$config['upload_path'] = './uploads/ketentuan';
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
					'judul' => $this->input->post('judul'),
					'artikel' => $this->input->post('artikel'),
					'slug' => $slug
					);
			//query to insert into myupload table
			$this->db->insert('mketentuan', $data_insert);
			$this->session->set_flashdata('message', '<div id="success"class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
	Data Berhasil Ditambahkan
</div>');
			redirect('ketentuan');
		//if upload success
		}else{
			$data_insert = array(
					'useri' => $this->session->userdata('nama'),
					'judul' => $this->input->post('judul'),
					'artikel' => $this->input->post('artikel'),
					'slug' => $slug,
					'image' => $this->upload->data('file_name')
					);
			//query to insert into myupload table
			$this->db->insert('mketentuan', $data_insert);
			$this->session->set_flashdata('message', '<div id="success"class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
	Data Berhasil Ditambahkan
</div>');
			redirect('ketentuan');
		}
	}
	function editu() {
		$id = $this->uri->segment(3);
		$e = $this->db->where('id', $id)->get('mketentuan')->row();
		$kirim['id'] = $e->id;
		$kirim['judul'] = $e->judul;
		$kirim['artikel'] = $e->artikel;
		$kirim['image'] = $e->image;
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($kirim));
		}
	function update(){
		$nmfile = "pr_1_e".time();
		$config['upload_path'] = './uploads/ketentuan';
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
				redirect('ketentuan');
		//if upload success
		}
				@unlink('./uploads/ketentuan/'.$filelama);
				$id = $this->input->post('editid');
				$judul = $this->input->post('editjudul');
				$artikel = $this->input->post('editartikel');
				$image = $this->upload->data('file_name');
				$data = array(
					'dateu' => 'now()',
					'useru' => $this->session->userdata('nama'),
					'id' => $id,
					'judul' => $judul,
					'artikel' => $artikel,
					'slug' => $slug,
					'image' => $image
			);
				$where = array(
					'id' => $id
			);
				$this->M_ketentuan->update_data($where,$data,'mketentuan');

				redirect('ketentuan');
			}
			if (!empty($filelamam)) {
					@unlink('./uploads/ketentuan/'.$filelamam);
					$id = $this->input->post('editid');
					$image = $this->input->post('editfilelaman');
					$data = array(
					'id' => $id,
					'image' => $image 
					);
						$where = array(
							'id' => $id
					);
					$this->M_ketentuan->update_data($where,$data,'mketentuan');
					redirect('ketentuan');
				}
			else {
				$id = $this->input->post('editid');
				$judul = $this->input->post('editjudul');
				$artikel = $this->input->post('editartikel');
				$data = array(
					'dateu' => 'now()',
					'useru' => $this->session->userdata('nama'),
					'id' => $id,
					'judul' => $judul,
					'slug' => $slug,
					'artikel' => $artikel,
					);
				$where = array(
					'id' => $id
			);
				$this->M_ketentuan->update_data($where,$data,'mketentuan');
				$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
                Data Berhasil Diubah
              </div>');
				redirect('ketentuan');
			};
			}	
	function hapus($id){
		$this->db->where('id',$id);
		$query = $this->db->get('mketentuan');
		$row = $query->row();
		unlink("./uploads/ketentuan/$row->image");
		$this->db->delete('mketentuan', array('id' => $id));
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
			Data Berhasil Dihapus
		</div>');
		redirect('ketentuan');
			}
}