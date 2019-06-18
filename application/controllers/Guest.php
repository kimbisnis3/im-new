<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Guest extends CI_Controller {
function __construct(){
	parent::__construct();
	
	$this->load->model('M_guest');
}
	public function index()
	{
		$data['mguest']=$this->M_guest->tammpilsemua();
		$this->load->view('guest/v_guest',$data);
	}
	
	function editu() {
		$id = $this->uri->segment(3);
		$e = $this->db->where('id', $id)->get('mguest')->row();
		$kirim['id'] = $e->id;
		$kirim['nama'] = $e->nama;
		$kirim['kode'] = $e->kode;
		$kirim['ref_sktg'] = $e->ref_sktg;
		$kirim['ket'] = $e->ket;
		$kirim['harga'] = $e->harga;
		$kirim['status'] = $e->status;
		$kirim['image'] = $e->image;
		$this->output
		->set_content_type('application/json')
		->set_output(json_encode($kirim));
		}
	function update(){
		$nmfile = "pr_1_e".time();
		$config['upload_path'] = './uploads/guest';
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
				redirect('guest');
		//if upload success
		}
				@unlink('./uploads/guest/'.$filelama);
				$id = $this->input->post('editid');
				$nama = $this->input->post('editnama');
				$kode = $this->input->post('editkode');
				$ref_sktg = $this->input->post('editref_sktg');
				$ket = $this->input->post('editket');
				$artikel = $this->input->post('editartikel');
				$harga = $this->input->post('editharga');
				$status = $this->input->post('editstatus');
				$image = $this->upload->data('file_name');
				$data = array(
					'dateu' => 'now()',
					'useru' => $this->session->userdata('nama'),
					'id' => $id,
					'nama' => $nama,
					'kode' => time(),
					'ref_sktg' => $ref_sktg,
					'ket' => $ket,
					'artikel' => $artikel,
					'harga' => $harga,
					'slug' => time(),
					'status' => $status,
					'image' => $image
			);
				$where = array(
					'id' => $id
			);
				$this->M_guest->update_data($where,$data,'mguest');

				redirect('guest');
			}
			if (!empty($filelamam)) {
					@unlink('./uploads/guest/'.$filelamam);
					$id = $this->input->post('editid');
					$image = $this->input->post('editfilelaman');
					$data = array(
					'id' => $id,
					'image' => $image 
					);
						$where = array(
							'id' => $id
					);
					$this->M_guest->update_data($where,$data,'mguest');
					redirect('guest');
				}
			else {
				$id = $this->input->post('editid');
				$nama = $this->input->post('editnama');
				$kode = $this->input->post('editkode');
				$ref_sktg = $this->input->post('editref_sktg');
				$ket = $this->input->post('editket');
				$artikel = $this->input->post('editartikel');
				$harga = $this->input->post('editharga');
				$status = $this->input->post('editstatus');
				$data = array(
					'dateu' => 'now()',
					'useru' => $this->session->userdata('nama'),
					'id' => $id,
					'nama' => $nama,
					'kode' => time(),
					'ref_sktg' => $ref_sktg,
					'ket' => $ket,
					'artikel' => $artikel,
					'harga' => $harga,
					'slug' => time(),
					'status' => $status,
					);
				$where = array(
					'id' => $id
			);
				$this->M_guest->update_data($where,$data,'mguest');
				$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
                Data Berhasil Diubah
              </div>');
				redirect('guest');
			};
			}	
	function hapus($id){
		$this->db->where('id',$id);
		$query = $this->db->get('mguest');
		$row = $query->row();
		unlink("./uploads/guest/$row->image");
		$this->db->delete('mguest', array('id' => $id));
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
			Data Berhasil Dihapus
		</div>');
		redirect('guest');
			}
}