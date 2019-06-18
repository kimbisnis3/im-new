<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kategori extends CI_Controller {
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
	$this->load->model('M_kategori');
}
	public function index()
	{
		$this->load->view('template/head');
		$query = $this->db->query("SELECT * FROM xorder WHERE baca='f'");
		$data['xorder'] = $query->num_rows();
		$this->load->view('template/topbar',$data);
		$data['mkategori']=$this->M_kategori->selectAll();
		$this->load->view('kategori/v_kategori',$data);
	}
	public function upload_process(){
		$nmfile = "br_2_".time();
		$config['upload_path'] = './uploads/kategori';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1366';
		$config['max_height']  = '768';
		$config['file_name'] = $nmfile;
		$this->upload->initialize($config);
		$slug = slug($this->input->post('namakategori'));
		//if upload failed
		if ( ! $this->upload->do_upload('image')){
			$data_insert = array(
					'useri' => $this->session->userdata('nama'),
					'namakategori' => $this->input->post('namakategori'),
					'ket' => $this->input->post('ket'),
					'slug' => $slug
					);
			//query to insert into myupload table
			$this->db->insert('mkategori', $data_insert);
			$this->session->set_flashdata('message', '<div id="success"class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
	Data Berhasil Ditambahkan
</div>');
			redirect('kategori');
		//if upload success
		}else{
			$data_insert = array(
					'useri' => $this->session->userdata('nama'),
					'namakategori' => $this->input->post('namakategori'),
					'ket' => $this->input->post('ket'),
					'slug' => $slug,
					'image' => $this->upload->data('file_name')
					);
			//query to insert into myupload table
			$this->db->insert('mkategori', $data_insert);
			$this->session->set_flashdata('message', '<div id="success"class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
	Data Berhasil Ditambahkan
</div>');
			redirect('kategori');
		}
	}
	function editu() {
		$id = $this->uri->segment(3);
		$e = $this->db->where('id', $id)->get('mkategori')->row();
		$kirim['id'] = $e->id;
		$kirim['namakategori'] = $e->namakategori;
		$kirim['ket'] = $e->ket;
		$kirim['image'] = $e->image;
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($kirim));
		}
	function update(){
		$nmfile = "pr_1_e".time();
		$config['upload_path'] = './uploads/kategori';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000'; //in kb
		$config['max_width']  = '1366';
		$config['max_height']  = '768';
		$config['file_name'] = $nmfile;
		$slug = slug($this->input->post('editnamakategori'));
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
				redirect('kategori');
		//if upload success
		}
				@unlink('./uploads/kategori/'.$filelama);
				$id = $this->input->post('editid');
				$namakategori = $this->input->post('editnamakategori');
        		$slug = slug($this->input->post('editnamakategori'));
				$ket = $this->input->post('editket');
				$image = $this->upload->data('file_name');
				$data = array(
					'dateu' => 'now()',
					'useru' => $this->session->userdata('nama'),
					'id' => $id,
					'namakategori' => $namakategori,
					'ket' => $ket,
					'slug' => $slug,
					'image' => $image
			);
				$where = array(
					'id' => $id
			);
				$this->M_kategori->update_data($where,$data,'mkategori');

				redirect('kategori');
			}
			if (!empty($filelamam)) {
					@unlink('./uploads/kategori/'.$filelamam);
					$id = $this->input->post('editid');
					$image = $this->input->post('editfilelaman');
					$data = array(
					'id' => $id,
					'image' => $image 
					);
						$where = array(
							'id' => $id
					);
					$this->M_kategori->update_data($where,$data,'mkategori');
					redirect('kategori');
				}
			else {
				$id = $this->input->post('editid');
				$namakategori = $this->input->post('editnamakategori');
            	$slug = slug($this->input->post('editnamakategori'));
				$ket = $this->input->post('editket');
				$data = array(
					'dateu' => 'now()',
					'useru' => $this->session->userdata('nama'),
					'id' => $id,
					'ket' => $ket,
					'namakategori' => $namakategori,
					'slug' => $slug,
					);
				$where = array(
					'id' => $id
			);
				$this->M_kategori->update_data($where,$data,'mkategori');
				$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
                Data Berhasil Diubah
              </div>');
				redirect('kategori');
			};
			}	
	function hapus($id){
		$this->db->where('id',$id);
		$query = $this->db->get('mkategori');
		$row = $query->row();
		unlink("./uploads/kategori/$row->image");
		$this->db->delete('mkategori', array('id' => $id));
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
			Data Berhasil Dihapus
		</div>');
		redirect('kategori');
			}
}