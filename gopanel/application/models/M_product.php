<?php
class M_product extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mproduct')->result();
   }
   function tammpilsemua()
   {
		return
		$this->db->query('SELECT mproduct.nama, mproduct.kode, mproduct.id, mproduct.ket , mproduct.image ,mproduct.harga, mproduct.status, msubkategori.id as id_subktg , msubkategori.namasubkategori
			from mproduct 
			JOIN msubkategori 
			on CAST(mproduct.ref_subkategori AS INT)  = msubkategori.id  order by mproduct.id')->result();
   }
   function input_data($data,$mproduct){
		$this->db->insert($mproduct,$data);
	}
	function hapus_data($where,$mproduct){
		$this->db->where($where);
		$this->db->delete($mproduct);
	}
	function edit_data($where,$mproduct){		
		return $this->db->get_where($mproduct,$where);
	}
 
	function update_data($where,$data,$mproduct){
		$this->db->where($where);
		$this->db->update($mproduct,$data);
	}	
}
?>
