<?php
class M_subkategori extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('msubkategori')->result();
   }
   function tammpilsemua()
   {	
		return
		$this->db->query('SELECT msubkategori.namasubkategori, msubkategori.id, msubkategori.image , mkategori.id as id_ktg, mkategori.namakategori,msubkategori.ket, msubkategori.kode from msubkategori 
		JOIN mkategori on msubkategori.ref_ktg  = mkategori.kode order by msubkategori.id')->result();
   }
   function input_data($data,$msubkategori){
		$this->db->insert($msubkategori,$data);
	}
	function hapus_data($where,$msubkategori){
		$this->db->where($where);
		$this->db->delete($msubkategori);
	}
	function edit_data($where,$msubkategori){		
		return $this->db->get_where($msubkategori,$where);
	}
 
	function update_data($where,$data,$msubkategori){
		$this->db->where($where);
		$this->db->update($msubkategori,$data);
	}	
}
?>
