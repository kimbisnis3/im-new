<?php
class M_ketentuan extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mketentuan')->result();
   }
   function input_data($data,$mketentuan){
		$this->db->insert($mketentuan,$data);
	}
	function hapus_data($where,$mketentuan){
		$this->db->where($where);
		$this->db->delete($mketentuan);
	}
	function edit_data($where,$mketentuan){		
		return $this->db->get_where($mketentuan,$where);
	}
 
	function update_data($where,$data,$mketentuan){
		$this->db->where($where);
		$this->db->update($mketentuan,$data);
	}	
}
?>
