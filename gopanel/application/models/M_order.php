<?php
class M_order extends CI_Model{

   function select()
   {
		return
		$this->db->query('SELECT
			xorder. ID,
			xorder.tgl,
			xorder.kode,
			xorder.koderef,
			xorder.ref_status,
            xorder.alamatkirim,
            xorder.namapenerima as penerima,
            xorder.telppenerima,
			mstatus.nama AS namastatus,
			mcustomer.nama,
			mcustomer.alamat,
			mcustomer.telp,
			mcustomer.email,
			mcustomer.guest,
			mcustomer.status,
			mekspedisi.nama as namaekspedisi
		FROM
			xorder
		LEFT OUTER JOIN mcustomer ON xorder.ref_cust = mcustomer.kode
		LEFT OUTER JOIN mstatus ON mstatus.kode = xorder.ref_status
		LEFT OUTER JOIN mekspedisi ON mekspedisi.kode = xorder.ref_ship
		where
			xorder.void = FALSE
		ORDER BY
			ID DESC')->result();
   }
   function selecttoday()
   {
		return
		$this->db->query("SELECT
			xorder. ID,
			xorder.tgl,
			xorder.kode,
			xorder.koderef,
			xorder.ref_status,
            xorder.alamatkirim,
            xorder.namapenerima as penerima,
            xorder.telppenerima,
			mstatus.nama AS namastatus,
			mcustomer.nama,
			mcustomer.alamat,
			mcustomer.telp,
			mcustomer.email,
			mcustomer.guest,
			mcustomer.status,
			mekspedisi.nama as namaekspedisi
		FROM
			xorder
		LEFT OUTER JOIN mcustomer ON xorder.ref_cust = mcustomer.kode
		LEFT OUTER JOIN mstatus ON mstatus.kode = xorder.ref_status
		LEFT OUTER JOIN mekspedisi ON mekspedisi.kode = xorder.ref_ship
		where
			xorder.void = FALSE and tgl >  CURRENT_DATE - INTERVAL '1 days' ORDER BY id desc")->result();
   }
	function selectstatus()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mstatus')->result();
   }
   function input_data($data,$morder){
		$this->db->insert($morder,$data);
	}
	function lihat_data($id){		
		return 
		$this->db->query("SELECT
		xorder.id,
		xorder.tgl,
		xorder.kode,
        xorder.alamatkirim,
        xorder.namapenerima as penerima,
        xorder.telppenerima,
		xorder.ref_status,
		mstatus.nama AS namastatus,
		mcustomer.nama,
		mcustomer.alamat,
		mcustomer.telp,
		mcustomer.email,
		mcustomer.guest,
		mcustomer.status,
		mekspedisi.nama as namaekspedisi

		FROM
			xorder
		LEFT OUTER JOIN mcustomer ON xorder.ref_cust = mcustomer.kode
		LEFT OUTER JOIN mstatus ON mstatus.kode = xorder.ref_status
		LEFT OUTER JOIN mekspedisi ON mekspedisi.kode = xorder.ref_ship
		where xorder.id = '$id'
		ORDER BY id desc")->result();
	}
	function barang($id) {
		return 
		$this->db->query("SELECT
		xorder.id,
		xorder.kode,
		xorder.ref_status,
		mbarang.nama,
		mbarang.harga,
		xorderd.jumlah

		FROM
			xorder
		LEFT OUTER JOIN xorderd ON xorderd.ref_xorder = xorder.kode
		LEFT OUTER JOIN mbarang ON xorderd.ref_brg = mbarang.kode
		where xorder.id = '$id'")->result();
	}
	function total($id) {
		return 
		$this->db->query("SELECT
		xorder.id,
		xorder.kode,
		xorderd.subtotal

		FROM
			xorder
		LEFT OUTER JOIN xorderd ON xorderd.ref_xorder = xorder.kode
		where xorder.id = '$id'
		ORDER by xorder.id")->result();
	}
	function payship($id) {
		return 
		$this->db->query("SELECT 
		xorder.id,
		xorder.kode,
		mpayment.nama as namapay,
		mshipment.nama as namaship,
		mshipment.harga as biayakirim

		FROM
			xorder
		LEFT OUTER JOIN mpayment ON mpayment.kode= xorder.ref_pay
		LEFT OUTER JOIN mshipment ON mshipment.kode = xorder.ref_ship
		where xorder.id = '$id'
		")->result();
	}
	function hapus_data($where,$morder){
		$this->db->where($where);
		$this->db->delete($morder);
	}
	function showcompany(){
		$query = $this->db->query("SELECT tcompany.email , tcompany.alamat from tcompany");
		return $query->result();
	}
	function edit_data($where,$morder){		
		return $this->db->get_where($morder,$where);
	}
 
	function update_data($where,$data,$xorder){
		$this->db->where($where);
		$this->db->update($xorder,$data);
	}	
}
?>
