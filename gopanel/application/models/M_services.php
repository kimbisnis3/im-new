<?php
class M_services extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mservices')->result();
   }
   function input_data($data,$mservices){
		$this->db->insert($mservices,$data);
	}
	function hapus_data($where,$mservices){
		$this->db->where($where);
		$this->db->delete($mservices);
	}
	function edit_data($where,$mservices){		
		return $this->db->get_where($mservices,$where);
	}
 
	function update_data($where,$data,$mservices){
		$this->db->where($where);
		$this->db->update($mservices,$data);
	}	
}
?>
