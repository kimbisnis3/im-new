<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Shop extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model('M_header');
	$this->load->model('M_home');
	$this->load->model('M_kategori');
	$this->load->model('M_footer');

}
	public function index()
	{
		$this->load->view('template/head');
		$data['mkategori']=$this->M_header->kategori();
		$data['msubkategori']=$this->M_header->subkategori();
		$data['mevent']=$this->M_header->event();
		$data['mlogo']=$this->M_header->logo();
		$this->load->view('template/header',$data);
		$data['mslideshow']=$this->M_home->slideshow();
		$data['mbarang']=$this->M_home->tampilbarang();
		$data['mkategori']=$this->M_home->tampilkategorilimit();
		$this->load->view('shop/v_shop',$data);

		$data['mkategori']=$this->M_footer->kategori();
		$data['socmed'] = $this->M_footer->socmed();
		$data['iconbank'] = $this->M_footer->iconbank();
		$this->load->view('template/foot',$data);
	}
	function add(){
			$data = array(
		'id'      => $this->input->post('kode'),
		'qty'     => 1,
		'price'   => $this->input->post('harga'),
		'name'    => $this->input->post('nama')
);
			$this->cart->insert($data);

			redirect('');
		}
		function remove($rowid) {
			// Check rowid value.
		if ($rowid==="all"){
			// Destroy data which store in  session.
			$this->cart->destroy();
		}else{
			// Destroy selected rowid in session.
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);
// Update cart data, after cancle.
			$this->cart->update($data);
		}

// This will show cancle data in cart.
		redirect('home');
	}
	function update($rowid){
			$data = array(
				'rowid'   => $this->input->post('rowid'),
		'qty'     => $this->input->post('qty'),
);
			$this->cart->update($data);
		redirect('shop');

		}
	function update_cart(){

// Recieve post values,calcute them and update
		$cart_info =  $_POST['cart'] ;
				foreach( $cart_info as $id => $cart)
					{
		$rowid = $cart['rowid'];
		$price = $cart['price'];
		$amount = $price * $cart['qty'];
		$qty = $cart['qty'];

		$data = array(
						'rowid'   => $rowid,
		'price'   => $price,
		'amount' =>  $amount,
						'qty'     => $qty
					);

					$this->cart->update($data);
				}
				redirect('shop');
				}
	function show(){

			}
	function delete(){
		$this->cart->destroy();
		redirect('shop');
			}
}
