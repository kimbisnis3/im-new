<?php
class M_medsos extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mmedsos')->result();
   }
   function input_data($data,$mmedsos){
		$this->db->insert($mmedsos,$data);
	}
	function hapus_data($where,$mmedsos){
		$this->db->where($where);
		$this->db->delete($mmedsos);
	}
	function edit_data($where,$mmedsos){		
		return $this->db->get_where($mmedsos,$where);
	}
 
	function update_data($where,$data,$mmedsos){
		$this->db->where($where);
		$this->db->update($mmedsos,$data);
	}	
}
?>
