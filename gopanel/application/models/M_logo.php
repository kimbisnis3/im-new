<?php
class M_logo extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mlogo')->result();
   }
   function input_data($data,$mlogo){
		$this->db->insert($mlogo,$data);
	}
	function hapus_data($where,$mlogo){
		$this->db->where($where);
		$this->db->delete($mlogo);
	}
	function edit_data($where,$mlogo){		
		return $this->db->get_where($mlogo,$where);
	}
 
	function update_data($where,$data,$mlogo){
		$this->db->where($where);
		$this->db->update($mlogo,$data);
	}	
}
?>
