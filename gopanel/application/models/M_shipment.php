<?php
class M_shipment extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mshipment')->result();
   }
    function selectwhere($mshipment,$where)
   {
		return $this->db->get_where($where,$mshipment);
   }
   function input_data($data,$mshipment){
		$this->db->insert($mshipment,$data);
	}
	function lihat_data($where,$mshipment){		
		return $this->db->get_where($mshipment,$where);
	}
 
	function update_data($where,$data,$mshipment){
		$this->db->where($where);
		$this->db->update($mshipment,$data);
	}	
	function hapus_data($where,$mshipment){
		$this->db->where($where);
		$this->db->delete($mshipment);
	}
}
?>
