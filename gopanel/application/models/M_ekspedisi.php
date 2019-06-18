<?php
class M_ekspedisi extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mekspedisi')->result();
   }
    function selectwhere($mekspedisi,$where)
   {
		return $this->db->get_where($where,$mekspedisi);
   }
   function input_data($data,$mekspedisi){
		$this->db->insert($mekspedisi,$data);
	}
	function lihat_data($where,$mekspedisi){		
		return $this->db->get_where($mekspedisi,$where);
	}
 
	function update_data($where,$data,$mekspedisi){
		$this->db->where($where);
		$this->db->update($mekspedisi,$data);
	}	
	function hapus_data($where,$mekspedisi){
		$this->db->where($where);
		$this->db->delete($mekspedisi);
	}
}
?>
