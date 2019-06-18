<?php
class M_kategori extends CI_Model{
   function show($where,$mkategori)
   {
		return 
		$this->db->query("SELECT mbarang.id ,mbarang.nama, mbarang.image,mbarang.harga, mbarang.kode, mkategori.id as id_ktg , mkategori.namakategori ,
			msubkategori.namasubkategori,msubkategori.id as id_subktg,
         mbarang.slug
			from mkategori 
			join msubkategori on msubkategori.ref_ktg   = mkategori.kode 
			join mbarang on mbarang.ref_sktg   = msubkategori.kode
			where mkategori.slug = '$where' and status='t'");
   }
   function showside()
   {
   	return 
   	$this->db->query("SELECT mkategori.id, mkategori.namakategori, mkategori.slug from mkategori 
						ORDER BY id asc")->result();
   }
   function titlekategori()
   {
   	$slug = $this->uri->segment(3);
   	return 
   	$this->db->query("SELECT mkategori.id, mkategori.namakategori as nama, mkategori.slug from mkategori where mkategori.slug='$slug' ")->result();
   }
}
   
?>