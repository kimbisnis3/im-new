<?php
class M_subkategori extends CI_Model{
   function show($where,$msubkategori)
   {
		return 
		$this->db->query("SELECT mbarang.id ,mbarang.nama, mbarang.image,mbarang.harga, mbarang.kode, mkategori.id as id_ktg , mkategori.namakategori ,
			msubkategori.namasubkategori,msubkategori.id as id_subktg,
         mbarang.slug
			from mkategori 
			join msubkategori on msubkategori.ref_ktg  = mkategori.kode 
			join mbarang on mbarang.ref_sktg  = msubkategori.kode
			where msubkategori.slug = '$where' and status='t'");
   }
   function showside()
   {
   	return 
   	$this->db->query("SELECT msubkategori.id, msubkategori.namasubkategori, msubkategori.slug from msubkategori 
						ORDER BY id asc")->result();
   }
   function titlesubkategori()
   {
   	$slug = $this->uri->segment(3);
   	return 
   	$this->db->query("SELECT * from msubkategori where msubkategori.slug='$slug' ")->result();
   }
}
   
?>