<?php
class M_product extends CI_Model{
   function show($where,$mproduct)
   {
		return 
		$this->db->query("SELECT mbarang.nama, mbarang.kode, mbarang.id, mbarang.ket , mbarang.slug,
 mbarang.image ,mbarang.harga, mbarang.status, msubkategori.id as id_subktg , msubkategori.namasubkategori, msubkategori.kode as kodesubkategori
			from mbarang 
			JOIN msubkategori 
			on mbarang.ref_sktg = msubkategori.kode  
			where mbarang.slug = '$where'
            ORDER BY mbarang.datei ASC");
   }
}
   
?>