<?php
class M_barang extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mbarang')->result();
   }
   function tammpilsemua()
   {
		return
		$this->db->query('SELECT mbarang.nama, mbarang.kode as kodebarang, mbarang.id, mbarang.ket ,
 			mbarang.image ,mbarang.harga, mbarang.status, msubkategori.id as id_subktg , 
			msubkategori.namasubkategori, msubkategori.kode, mkategori.namakategori,
			mjenisbarang.nama as namajenisbarang
			from mbarang 
			LEFT OUTER JOIN msubkategori 
			on mbarang.ref_sktg = msubkategori.kode 
			LEFT OUTER JOIN mkategori 
			on mkategori.kode = msubkategori.ref_ktg  
			LEFT OUTER JOIN mjenisbarang 
			on mjenisbarang.kode = mbarang.ref_jenisbarang
			order by mbarang.id desc')->result();
   }
   function input_data($data,$mbarang){
		$this->db->insert($mbarang,$data);
	}
	function hapus_data($where,$mbarang){
		$this->db->where($where);
		$this->db->delete($mbarang);
	}
	function edit_data($where,$mbarang){		
		return $this->db->get_where($mbarang,$where);
	}
 
	function update_data($where,$data,$mbarang){
		$this->db->where($where);
		$this->db->update($mbarang,$data);
	}	
}
?>
