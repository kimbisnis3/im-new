<?php
class M_laporan extends CI_Model{

	function selectjenisbarang()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mjenisbarang')->result();
   }
	function lihat_data($awal, $akhir, $jenisbarang){		
		return 
		$this->db->query("SELECT
		xorder.id,
		xorder.tgl,
		xorder.kode,
		xorder.koderef,
		xorder.ref_status,
		mstatus.nama AS namastatus,
		mcustomer.nama,
		mcustomer.alamat,
		mcustomer.telp,
		mcustomer.email,
		mcustomer.guest,
		mcustomer.alamatkirim,
		mcustomer.penerima,
		mcustomer.telppenerima,
		mcustomer.status,
		mbarang.nama as namabarang,
		mjenisbarang.nama as namajenisbarang
		FROM
			xorder
		LEFT OUTER JOIN xorderd ON xorderd.ref_xorder = xorder.kode
		LEFT OUTER JOIN mbarang ON mbarang.kode = xorderd.ref_brg
		LEFT OUTER JOIN mjenisbarang ON mjenisbarang.kode = mbarang.ref_jenisbarang
		LEFT OUTER JOIN mcustomer ON xorder.ref_cust = mcustomer.kode
		LEFT OUTER JOIN mstatus ON mstatus.kode = xorder.ref_status
		where xorder.tgl >= '$awal' AND xorder.tgl  <= '$akhir' and mjenisbarang.kode = '$jenisbarang'
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
