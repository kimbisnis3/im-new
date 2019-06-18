<?php
class M_gallery extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mgallery')->result();
   }
   function input_data($data,$mgallery){
		$this->db->insert($mgallery,$data);
	}
	function hapus_data($where,$mgallery){
		$this->db->where($where);
		$this->db->delete($mgallery);
	}
	function edit_data($where,$mgallery){		
		return $this->db->get_where($mgallery,$where);
	}
 
	function update_data($where,$data,$mgallery){
		$this->db->where($where);
		$this->db->update($mgallery,$data);
	}	
}
?>
