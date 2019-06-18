<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Billing extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model('M_header'); 
	$this->load->model('M_billing'); 
	$this->load->model('M_footer');  
 
}
	function index()
	{
		$this->load->view('template/head');
		$data['mkategori']=$this->M_header->kategori();
		$data['msubkategori']=$this->M_header->subkategori();
		$data['mevent']=$this->M_header->event();
		$data['mlogo']=$this->M_header->logo();
		$this->load->view('template/header',$data);
		#konten
		$this->load->view('billing/v_billing_a');

		$data['mkategori']=$this->M_footer->kategori();
		$data['socmed'] = $this->M_footer->socmed();
		$data['iconbank'] = $this->M_footer->iconbank();
		$this->load->view('template/foot',$data);
	}
	function user()
	{
		$customer = $this->input->post('user');
		$guest = $this->input->post('user');
	}
	function customer() {
		$this->load->view('template/head');
		$data['mkategori']=$this->M_header->kategori();
		$data['msubkategori']=$this->M_header->subkategori();
		$data['mevent']=$this->M_header->event();
		$data['mlogo']=$this->M_header->logo();
		$this->load->view('template/header',$data);
		#konten
		$this->load->view('billing/v_billing_cust');

		$data['mkategori']=$this->M_footer->kategori();
		$data['socmed'] = $this->M_footer->socmed();
		$data['iconbank'] = $this->M_footer->iconbank();
		$this->load->view('template/foot',$data);
	}
	function guest() {
		$isLogin= $this->session->userdata('masuk');
		if (isset($isLogin)==true)
        {
        	redirect('billing/customer');
        }
        else
        {
        	
        }
		$this->load->view('template/head');
		$data['mkategori']=$this->M_header->kategori();
		$data['msubkategori']=$this->M_header->subkategori();
		$data['mevent']=$this->M_header->event();
		$data['mlogo']=$this->M_header->logo();
		$this->load->view('template/header',$data);
		#konten
		$this->load->view('billing/v_billing_guest');

		$data['mkategori']=$this->M_footer->kategori();
		$data['socmed'] = $this->M_footer->socmed();
		$data['iconbank'] = $this->M_footer->iconbank();
		$this->load->view('template/foot',$data);
	}
	function customerinput() {
		$data_session = array(
				'idcustomer'    => $this->session->userdata("idcustomer"),
		        'namacustomer'    => $this->input->post('nama'),
		        'alamatcustomer'    => $this->input->post('alamat'),
		        'telp'    => $this->input->post('telp'),
		        'email'    => $this->input->post('email'),
		        );
		$this->session->set_userdata($data_session);
		redirect('billing/alamatkirim');
	}
	function guestinput() {
		$data_session = array(
				'idcustomer'    => '',
		        'namacustomer'    => $this->input->post('nama'),
		        'alamatcustomer'    => $this->input->post('alamat'),
		        'telp'    => $this->input->post('telp'),
		        'email'    => $this->input->post('email'),
		        'guest'    => 1
		        );
		$this->session->set_userdata($data_session);
		redirect('billing/alamatkirim');
	}
	function alamatkirim() {
		$this->load->view('template/head');
		$data['mkategori']=$this->M_header->kategori();
		$data['msubkategori']=$this->M_header->subkategori();
		$data['mevent']=$this->M_header->event();
		$data['mlogo']=$this->M_header->logo();
		$this->load->view('template/header',$data);
		#konten
		$this->load->view('billing/v_alamatkirim');

		$data['mkategori']=$this->M_footer->kategori();
		$data['socmed'] = $this->M_footer->socmed();
		$data['iconbank'] = $this->M_footer->iconbank();
		$this->load->view('template/foot',$data);
	}
	function inputalamat() {
		$data_session = array(
				'alamatkirim'    => $this->input->post('alamatkirim'),
		        'penerima'    => $this->input->post('penerima'),
        		'telppenerima'    => $this->input->post('telppenerima'),
);
			$this->session->set_userdata($data_session);
			redirect('billing/shipment');
	}
	function shipment() {
		$this->load->view('template/head');
		$data['mkategori']=$this->M_header->kategori();
		$data['msubkategori']=$this->M_header->subkategori();
		$data['mevent']=$this->M_header->event();
		$data['mlogo']=$this->M_header->logo();
		$this->load->view('template/header',$data);
		#konten
		$data['mshipment']=$this->M_billing->shipment();
		$this->load->view('billing/v_shipment',$data);

		$data['mkategori']=$this->M_footer->kategori();
		$data['socmed'] = $this->M_footer->socmed();
		$data['iconbank'] = $this->M_footer->iconbank();
		$this->load->view('template/foot',$data);
	}
	function inputshipment() {
		$data_session = array(
				'shipment'    => $this->input->post('shipment'),
		);
			$this->session->set_userdata($data_session);
			$shipment = $this->session->userdata('shipment');
			$query = $this->db->query("SELECT * from mshipment where kode='$shipment' ")->row();
			$data_session = array(
				'namashipment'    => $query->nama,
				'harga'    => $query->harga,
		);
			$this->session->set_userdata($data_session);

			redirect('billing/metodepembayaran');
	}
	
	function metodepembayaran() {
		$this->load->view('template/head');
		$data['mkategori']=$this->M_header->kategori();
		$data['msubkategori']=$this->M_header->subkategori();
		$data['mevent']=$this->M_header->event();
		$data['mlogo']=$this->M_header->logo();
		$this->load->view('template/header',$data);
		#konten
		$data['mpayment']=$this->M_billing->payment();
		$this->load->view('billing/v_metodepembayaran',$data);

		$data['mkategori']=$this->M_footer->kategori();
		$data['socmed'] = $this->M_footer->socmed();
		$data['iconbank'] = $this->M_footer->iconbank();
		$this->load->view('template/foot',$data);
	}
	function inputmetodepembayaran() {
		$data_session = array(
				'payment'    => $this->input->post('payment'),
);
			$this->session->set_userdata($data_session);
			$payment = $this->session->userdata('payment');
			$query = $this->db->query("SELECT * from mpayment where kode='$payment' ")->row();
			$data_session = array(
				'namapayment'    => $query->nama,
				'norek'			=> $query->norek,
		);
			$this->session->set_userdata($data_session);
			redirect('billing/konfirmasi');
	}
	function konfirmasi() {
		$this->load->view('template/head');
		$data['mkategori']=$this->M_header->kategori();
		$data['msubkategori']=$this->M_header->subkategori();
		$data['mevent']=$this->M_header->event();
		$data['mlogo']=$this->M_header->logo();
		$this->load->view('template/header',$data);
		#konten

		$this->load->view('billing/v_konfirmasi');

		$data['mkategori']=$this->M_footer->kategori();
		$data['socmed'] = $this->M_footer->socmed();
		$data['iconbank'] = $this->M_footer->iconbank();
		$this->load->view('template/foot',$data);
	}

	function order(){
		if ($this->session->userdata("idcustomer") != ''){
		
		$order = array(
					'ref_cust' => $this->session->userdata("idcustomer"),
					'ref_ship' => $this->session->userdata('shipment'),
					'ref_pay' => $this->session->userdata('payment'),
        			'namapenerima' => $this->session->userdata('penerima'),
        			'alamatkirim' => $this->session->userdata('alamatkirim'),
        			'telppenerima' => $this->session->userdata('telppenerima'),
					);
			$ord_id = $this->M_billing->insert_order($order);
			$query = $this->db->query("SELECT xorder.kode, xorder.koderef from xorder where xorder.id = $ord_id");
			$row = $query->row();
			$data_session = array(
				'kode' => $row->kode,
            'koderef' => $row->koderef
								);
		$this->session->set_userdata($data_session);
		$total = $this->cart->total();
		$biaya = $this->session->userdata("harga");
		$x = $total+$biaya;
		if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
				$order_detail = array(
					'ref_xorder' 	=> $this->session->userdata("kode"),
					'ref_brg' 	=> $item['id'],
					'harga' 		=> $item['price'],
					'jumlah' 		=> $item['qty'],
					'subtotal' 		=> $x
				);
                
		         $cust_id = $this->M_billing->insert_order_detail($order_detail);
			endforeach;
		endif;
		$data_session = array('alamatkirim', 'penerima','shipment','idshipment','payment','idpayment','norek');

		$this->session->unset_userdata($data_session);
		$this->cart->destroy();
          redirect('billing/koderef');
          }
          
		else {
		$guest = array(
		        'nama' => $this->session->userdata("namacustomer"),
		        'alamat' => $this->session->userdata("alamatcustomer"),
		        'telp' => $this->session->userdata("telp"),
		        'email' => $this->session->userdata("email"),
		        'alamatkirim' => $this->session->userdata("alamatkirim"),
		        'penerima' => $this->session->userdata("penerima"),
		        'guest'    => 't'
					);

		$guest_id = $this->M_billing->insert_guest($guest);
		$query = $this->db->query("SELECT mcustomer.kode from mcustomer where mcustomer.id = $guest_id");
			$row = $query->row();
			$data_session = array(
				'idcustomer' => $row->kode );
		$this->session->set_userdata($data_session);

			$order = array(
					'ref_cust' => $this->session->userdata("idcustomer"),
					'ref_ship' => $this->session->userdata('shipment'),
					'ref_pay' => $this->session->userdata('payment'),
            		'namapenerima' => $this->session->userdata('penerima'),
        			'alamatkirim' => $this->session->userdata('alamatkirim'),
        			'telppenerima' => $this->session->userdata('telppenerima'),
					);
			$ord_id = $this->M_billing->insert_order($order);
			$query = $this->db->query("SELECT xorder.kode, xorder.koderef from xorder where xorder.id = $ord_id");
			$row = $query->row();
			$data_session = array(
				'kode' => $row->kode,
            'koderef' => $row->koderef
				
);
		$this->session->set_userdata($data_session);
		$total = $this->cart->total();
		$biaya = $this->session->userdata("harga");
		$x = $total+$biaya;
		if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
				$order_detail = array(
					'ref_xorder' 	=> $this->session->userdata("kode"),
					'ref_brg' 	=> $item['id'],
					'harga' 		=> $item['price'],
					'jumlah' 		=> $item['qty'],
					'subtotal' 		=> $x
				);
                
		         $cust_id = $this->M_billing->insert_order_detail($order_detail);
			endforeach;
		endif;
		$data_session = array('alamatkirim', 'penerima','shipment','idshipment','payment','idpayment');

		$this->session->unset_userdata($data_session);
		$this->cart->destroy();
          redirect('billing/koderef');
		}
	}
function koderef() {
		$this->load->view('template/head');
		$data['mkategori']=$this->M_header->kategori();
		$data['msubkategori']=$this->M_header->subkategori();
		$data['mevent']=$this->M_header->event();
		$data['mlogo']=$this->M_header->logo();
		$this->load->view('template/header',$data);
		#konten

		$this->load->view('billing/v_koderef');

		$data['mkategori']=$this->M_footer->kategori();
		$data['socmed'] = $this->M_footer->socmed();
		$data['iconbank'] = $this->M_footer->iconbank();
		$this->load->view('template/foot',$data);

	}
	
}