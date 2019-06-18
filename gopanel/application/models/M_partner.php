<?php
class M_partner extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mpartner')->result();
   }
   function input_data($data,$mpartner){
		$this->db->insert($mpartner,$data);
	}
	function hapus_data($where,$mpartner){
		$this->db->where($where);
		$this->db->delete($mpartner);
	}
	function edit_data($where,$mpartner){		
		return $this->db->get_where($mpartner,$where);
	}
 
	function update_data($where,$data,$mpartner){
		$this->db->where($where);
		$this->db->update($mpartner,$data);
	}	
}
?>
