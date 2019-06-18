<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Medsos extends CI_Controller {
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
	$this->load->model('M_medsos');
}
	public function index()
	{
		$this->load->view('template/head');
		$query = $this->db->query("SELECT * FROM xorder WHERE baca='f'");
		$data['xorder'] = $query->num_rows();
		$this->load->view('template/topbar',$data);
		$data['mmedsos']=$this->M_medsos->selectAll();
		$this->load->view('medsos/v_medsos',$data);
	}
	public function upload_process(){
		$nmfile = "br_2_".time();
		$config['upload_path'] = './uploads/medsos';
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
					'icon' => $this->input->post('icon'),
					'link' => $this->input->post('link'),
					'slug' => $slug
					);
			//query to insert into myupload table
			$this->db->insert('mmedsos', $data_insert);
			$this->session->set_flashdata('message', '<div id="success"class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
	Data Berhasil Ditambahkan
</div>');
			redirect('medsos');
		//if upload success
		}else{
			$data_insert = array(
					'useri' => $this->session->userdata('nama'),
					'judul' => $this->input->post('judul'),
					'link' => $this->input->post('link'),
					'icon' => $this->input->post('icon'),
					'slug' => $slug,
					'image' => $this->upload->data('file_name')
					);
			//query to insert into myupload table
			$this->db->insert('mmedsos', $data_insert);
			$this->session->set_flashdata('message', '<div id="success"class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
	Data Berhasil Ditambahkan
</div>');
			redirect('medsos');
		}
	}
	function editu() {
		$id = $this->uri->segment(3);
		$e = $this->db->where('id', $id)->get('mmedsos')->row();
		$kirim['id'] = $e->id;
		$kirim['judul'] = $e->judul;
    $kirim['icon'] = $e->icon;
		$kirim['link'] = $e->link;
		$kirim['image'] = $e->image;
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($kirim));
		}
	function update(){
		$nmfile = "pr_1_e".time();
		$config['upload_path'] = './uploads/medsos';
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
				redirect('medsos');
		//if upload success
		}
				@unlink('./uploads/medsos/'.$filelama);
				$id = $this->input->post('editid');
				$judul = $this->input->post('editjudul');
				$link = $this->input->post('editlink');
				$image = $this->upload->data('file_name');
				$data = array(
					'dateu' => 'now()',
					'useru' => $this->session->userdata('nama'),
					'id' => $id,
					'judul' => $judul,
					'link' => $link,
					'slug' => $slug,
					'image' => $image
			);
				$where = array(
					'id' => $id
			);
				$this->M_medsos->update_data($where,$data,'mmedsos');

				redirect('medsos');
			}
			if (!empty($filelamam)) {
					@unlink('./uploads/medsos/'.$filelamam);
					$id = $this->input->post('editid');
					$image = $this->input->post('editfilelaman');
					$data = array(
					'id' => $id,
					'image' => $image 
					);
						$where = array(
							'id' => $id
					);
					$this->M_medsos->update_data($where,$data,'mmedsos');
					redirect('medsos');
				}
			else {
				$id = $this->input->post('editid');
				$judul = $this->input->post('editjudul');
				$link = $this->input->post('editlink');
				$data = array(
					'dateu' => 'now()',
					'useru' => $this->session->userdata('nama'),
					'id' => $id,
					'judul' => $judul,
					'slug' => $slug,
					'link' => $link,
					);
				$where = array(
					'id' => $id
			);
				$this->M_medsos->update_data($where,$data,'mmedsos');
				$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
                Data Berhasil Diubah
              </div>');
				redirect('medsos');
			};
			}	
	function hapus($id){
		$this->db->where('id',$id);
		$query = $this->db->get('mmedsos');
		$row = $query->row();
		unlink("./uploads/medsos/$row->image");
		$this->db->delete('mmedsos', array('id' => $id));
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
			Data Berhasil Dihapus
		</div>');
		redirect('medsos');
			}
}