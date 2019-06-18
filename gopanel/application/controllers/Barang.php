<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Barang extends CI_Controller {
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
	$this->load->model('M_barang');
	$this->load->model('M_jenisbarang');
}
	public function index()
	{
		$this->load->view('template/head');
		$query = $this->db->query("SELECT * FROM xorder WHERE baca='f'");
		$data['xorder'] = $query->num_rows();
		$this->load->view('template/topbar',$data);
		$data['msubkategori']=$this->M_subkategori->tammpilsemua();
		$data['msubkategori']=$this->M_subkategori->tammpilsemua();
		$data['mjenisbarang']=$this->M_jenisbarang->selectAll();
		$data['mbarang']=$this->M_barang->tammpilsemua();
		$this->load->view('barang/v_barang',$data);
	}
	public function upload_process(){
		$nmfile = "br_2_".time();
		$config['upload_path'] = './uploads/barang';
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
					'nama' => $this->input->post('nama'),
					'kode' => $this->input->post('kode'),
					'ref_sktg' => $this->input->post('ref_sktg'),
					'ref_jenisbarang' => $this->input->post('ref_jenisbarang'),
					'ket' => $this->input->post('ket'),
					'artikel' => $this->input->post('artikel'),
					'harga' => $this->input->post('harga'),
					'slug' => time(),
					'status' => $this->input->post('status')
					);
			//query to insert into myupload table
			$this->db->insert('mbarang', $data_insert);
			$this->session->set_flashdata('message', '<div id="success"class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
	Data Berhasil Ditambahkan
</div>');
			redirect('barang');
		//if upload success
		}else{
			$data_insert = array(
					'useri' => $this->session->userdata('nama'),
					'nama' => $this->input->post('nama'),
					'kode' => $this->input->post('kode'),
					'ref_sktg' => $this->input->post('ref_sktg'),
					'ref_jenisbarang' => $this->input->post('ref_jenisbarang'),
					'ket' => $this->input->post('ket'),
					'artikel' => $this->input->post('artikel'),
					'harga' => $this->input->post('harga'),
					'status' => $this->input->post('status'),
					'slug' => time(),
					'image' => $this->upload->data('file_name')
					);
			//query to insert into myupload table
			$this->db->insert('mbarang', $data_insert);
			$this->session->set_flashdata('message', '<div id="success"class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
	Data Berhasil Ditambahkan
</div>');
			redirect('barang');
		}
	}
	function editu() {
		$id = $this->uri->segment(3);
		$e = $this->db->where('id', $id)->get('mbarang')->row();
		$kirim['id'] = $e->id;
		$kirim['nama'] = $e->nama;
		$kirim['kode'] = $e->kode;
		$kirim['ref_sktg'] = $e->ref_sktg;
		$kirim['ref_jenisbarang'] = $e->ref_jenisbarang;
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
		$config['upload_path'] = './uploads/barang';
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
				redirect('barang');
		//if upload success
		}
				@unlink('./uploads/barang/'.$filelama);
				$id = $this->input->post('editid');
				$nama = $this->input->post('editnama');
				$kode = $this->input->post('editkode');
				$ref_sktg = $this->input->post('editref_sktg');
				$ref_jenisbarang = $this->input->post('editref_jenisbarang');
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
					'kode' => $kode,
					'ref_sktg' => $ref_sktg,
					'ref_jenisbarang' => $ref_jenisbarang,
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
				$this->M_barang->update_data($where,$data,'mbarang');

				redirect('barang');
			}
			if (!empty($filelamam)) {
					@unlink('./uploads/barang/'.$filelamam);
					$id = $this->input->post('editid');
					$image = $this->input->post('editfilelaman');
					$data = array(
					'id' => $id,
					'image' => $image 
					);
						$where = array(
							'id' => $id
					);
					$this->M_barang->update_data($where,$data,'mbarang');
					redirect('barang');
				}
			else {
				$id = $this->input->post('editid');
				$nama = $this->input->post('editnama');
				$kode = $this->input->post('editkode');
				$ref_sktg = $this->input->post('editref_sktg');
				$ref_jenisbarang = $this->input->post('editref_jenisbarang');
				$ket = $this->input->post('editket');
				$artikel = $this->input->post('editartikel');
				$harga = $this->input->post('editharga');
				$status = $this->input->post('editstatus');
				$data = array(
					'dateu' => 'now()',
					'useru' => $this->session->userdata('nama'),
					'id' => $id,
					'nama' => $nama,
					'kode' => $kode,
					'ref_sktg' => $ref_sktg,
					'ref_jenisbarang' => $ref_jenisbarang,
					'ket' => $ket,
					'artikel' => $artikel,
					'harga' => $harga,
					'slug' => time(),
					'status' => $status,
					);
				$where = array(
					'id' => $id
			);
				$this->M_barang->update_data($where,$data,'mbarang');
				$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
					<i class="icon fa fa-check"></i>
                Data Berhasil Diubah
              </div>');
				redirect('barang');
			};
			}	
	function hapus($id){
		$this->db->where('id',$id);
		$query = $this->db->get('mbarang');
		$row = $query->row();
		unlink("./uploads/barang/$row->image");
		$this->db->delete('mbarang', array('id' => $id));
		$this->session->set_flashdata('message', '<div id="success" class="alrt-success alert-dismissible col-md-3" data-dismiss="alert" aria-hidden="true">
			<i class="icon fa fa-check"></i>
			Data Berhasil Dihapus
		</div>');
		redirect('barang');
			}
}