<?php
class M_kontak extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mkontak')->result();
   }
   function input_data($data,$mkontak){
		$this->db->insert($mkontak,$data);
	}
	function hapus_data($where,$mkontak){
		$this->db->where($where);
		$this->db->delete($mkontak);
	}
	function edit_data($where,$mkontak){		
		return $this->db->get_where($mkontak,$where);
	}
 
	function update_data($where,$data,$mkontak){
		$this->db->where($where);
		$this->db->update($mkontak,$data);
	}	
}
?>
