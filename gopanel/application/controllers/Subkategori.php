<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Subkategori extends CI_Controller {
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
	$this->load->model('M_subkategori');
	$this->load->model('M_kategori');
}
	public function index()
	{
		$this->load->view('template/head');
		$query = $this->db->query("SELECT * FROM xorder WHERE baca='f'");
		$data['xorder'] = $query->num_rows();
		$this->load->view('template/topbar',$data);
		$data['mkategori']=$this->M_kategori->selectAll();
		$data['msubkategori']=$this->M_subkategori->tammpilsemua();
		$this->load->view('subkategori/v_subkategori',$data);
	}
	public function upload_process(){
		$nmfile = "br_2_".time();
		$config['upload_path'] = './uploads/subkategori';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1366';
		$config['max_height']  = '768';
		$config['file_name'] = $nmfile;
		$this->upload->initialize($config);
		$slug = slug($this->input->post('namasubkategori'));
		//if upload failed
		if ( ! $this->upload->do_upload('image')){
			$data_insert = array(
					'useri' => $this->session->userdata('nama'),
					'namasubkategori' => $this->input->post('namasubkategori'),
					'ket' => $this->input->post('ket'),
            		'slug' => $slug,
					'ref_ktg' => $this->input->post('ref_ktg')
					);
			//query to insert into myupload table
			$this->db->insert('msubkategori', $data_insert);
			$this->session->set_flashdata('message', '<div id="success"class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
	Data Berhasil Ditambahkan
</div>');
			redirect('subkategori');
		//if upload success
		}else{
			$data_insert = array(
					'useri' => $this->session->userdata('nama'),
					'namasubkategori' => $this->input->post('namasubkategori'),
					'ket' => $this->input->post('ket'),
					'ref_ktg' => $this->input->post('ref_ktg'),
					'slug' => $slug,
					'image' => $this->upload->data('file_name')
					);
			//query to insert into myupload table
			$this->db->insert('msubkategori', $data_insert);
			$this->session->set_flashdata('message', '<div id="success"class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
	Data Berhasil Ditambahkan
</div>');
			redirect('subkategori');
		}
	}
	function editu() {
		$id = $this->uri->segment(3);
		$e = $this->db->where('id', $id)->get('msubkategori')->row();
		#$e = $this->db->query("SELECT msubkategori.namasubkategori, msubkategori.id, msubkategori.image , mkategori.id as id_kktg, mkategori.namakategori from msubkategori  JOIN mkategori on CAST(msubkategori.ref_ktg AS INT)  = mkategori.id where msubkategori.id = .'$id'.")->row();
		$kirim['id'] = $e->id;
		$kirim['namasubkategori'] = $e->namasubkategori;
		$kirim['ref_ktg'] = $e->ref_ktg;
		$kirim['ket'] = $e->ket;
		$kirim['image'] = $e->image;
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($kirim));
		}
	function update(){
		$nmfile = "pr_1_e".time();
		$config['upload_path'] = './uploads/subkategori';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000'; //in kb
		$config['max_width']  = '1366';
		$config['max_height']  = '768';
		$config['file_name'] = $nmfile;
		$slug = slug($this->input->post('editnamasubkategori'));
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
				redirect('subkategori');
		//if upload success
		}
				@unlink('./uploads/subkategori/'.$filelama);
				$id = $this->input->post('editid');
				$namasubkategori = $this->input->post('editnamasubkategori');
        		$slug = slug($this->input->post('editnamasubkategori'));
				$ket = $this->input->post('editket');
				$ref_ktg = $this->input->post('editref_ktg');
				$image = $this->upload->data('file_name');
				$data = array(
					'dateu' => 'now()',
					'useru' => $this->session->userdata('nama'),
					'id' => $id,
					'ket' => $ket,
					'slug' => $slug,
					'ref_ktg' => $ref_ktg,
					'namasubkategori' => $namasubkategori,
					'image' => $image
			);
				$where = array(
					'id' => $id
			);
				$this->M_subkategori->update_data($where,$data,'msubkategori');

				redirect('subkategori');
			}
			if (!empty($filelamam)) {
					@unlink('./uploads/subkategori/'.$filelamam);
					$id = $this->input->post('editid');
					$image = $this->input->post('editfilelaman');
					$data = array(
					'id' => $id,
					'image' => $image 
					);
						$where = array(
							'id' => $id
					);
					$this->M_subkategori->update_data($where,$data,'msubkategori');
					redirect('subkategori');
				}
			else {
				$id = $this->input->post('editid');
				$ket = $this->input->post('editket');
				$ref_ktg = $this->input->post('editref_ktg');
				$namasubkategori = $this->input->post('editnamasubkategori');
            	$slug = slug($this->input->post('editnamasubkategori'));
				$data = array(
					'dateu' => 'now()',
					'useru' => $this->session->userdata('nama'),
					'id' => $id,
					'ket' => $ket,
					'ref_ktg' => $ref_ktg,
					'namasubkategori' => $namasubkategori,
					'slug' => $slug
					);
				$where = array(
					'id' => $id
			);
				$this->M_subkategori->update_data($where,$data,'msubkategori');
				$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
                Data Berhasil Diubah
              </div>');
				redirect('subkategori');
			};
			}	
	function hapus($id){
		$this->db->where('id',$id);
		$query = $this->db->get('msubkategori');
		$row = $query->row();
		unlink("./uploads/subkategori/$row->image");
		$this->db->delete('msubkategori', array('id' => $id));
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
			Data Berhasil Dihapus
		</div>');
		redirect('subkategori');
			}
}