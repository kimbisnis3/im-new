<?php
class M_bank extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mbank')->result();
   }
   function input_data($data,$mbank){
		$this->db->insert($mbank,$data);
	}
	function hapus_data($where,$mbank){
		$this->db->where($where);
		$this->db->delete($mbank);
	}
	function edit_data($where,$mbank){		
		return $this->db->get_where($mbank,$where);
	}
 
	function update_data($where,$data,$mbank){
		$this->db->where($where);
		$this->db->update($mbank,$data);
	}	
}
?>
