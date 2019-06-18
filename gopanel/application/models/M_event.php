<?php
class M_event extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mevent')->result();
   }
   function input_data($data,$mevent){
		$this->db->insert($mevent,$data);
	}
	function hapus_data($where,$mevent){
		$this->db->where($where);
		$this->db->delete($mevent);
	}
	function edit_data($where,$mevent){		
		return $this->db->get_where($mevent,$where);
	}
 
	function update_data($where,$data,$mevent){
		$this->db->where($where);
		$this->db->update($mevent,$data);
	}	
}
?>
