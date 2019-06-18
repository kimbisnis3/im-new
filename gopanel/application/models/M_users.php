<?php
class M_users extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('tuser')->result();
   }
   function input_data($data,$tuser){
		$this->db->insert($tuser,$data);
	}
	function hapus_data($where,$tuser){
		$this->db->where($where);
		$this->db->delete($tuser);
	}
	function edit_data($where,$tuser){		
		return $this->db->get_where($tuser,$where);
	}
 
	function update_data($where,$data,$tuser){
		$this->db->where($where);
		$this->db->update($tuser,$data);
	}	
}
?>
