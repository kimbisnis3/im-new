<?php
class M_history extends CI_Model{
   function show($id)
   {
   		return
		$this->db->query("
        SELECT
		xorder.id,
		xorder.tgl,
		xorder.kode,
		xorder.ref_status,
        xorder.alamatkirim,
		mstatus.nama AS namastatus,
		mcustomer.id as idcustomer,
		mcustomer.nama,
		mcustomer.alamat,
		mcustomer.telp,
		mcustomer.email,
		mcustomer.guest,
		mcustomer.status,
		mbarang.nama as namabarang,
		mbarang.harga,
		mshipment.nama as namashipment,
		mshipment.harga as hargashipment
	
		FROM
			xorder
		LEFT OUTER JOIN mshipment ON mshipment.kode = xorder.ref_ship
		LEFT OUTER JOIN xorderd ON xorderd.ref_xorder = xorder.kode
		LEFT OUTER JOIN mbarang ON mbarang.kode = xorderd.ref_brg
		LEFT OUTER JOIN mcustomer ON xorder.ref_cust = mcustomer.kode
		LEFT OUTER JOIN mstatus ON mstatus.kode = xorder.ref_status
		where mcustomer.kode = '$id'
        and  xorder.tgl >  CURRENT_DATE - INTERVAL '1 years'
		ORDER BY id desc
			")->result();
   }
}
   
?>