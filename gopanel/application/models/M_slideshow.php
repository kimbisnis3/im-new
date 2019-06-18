<?php
class M_slideshow extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mslideshow')->result();
   }
   function input_data($data,$mslideshow){
		$this->db->insert($mslideshow,$data);
	}
	function hapus_data($where,$mslideshow){
		$this->db->where($where);
		$this->db->delete($mslideshow);
	}
	function edit_data($where,$mslideshow){		
		return $this->db->get_where($mslideshow,$where);
	}
 
	function update_data($where,$data,$mslideshow){
		$this->db->where($where);
		$this->db->update($mslideshow,$data);
	}	
}
?>
