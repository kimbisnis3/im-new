<?php
class M_home extends CI_Model{
   function tampilproduct()
   {
		$this->db->order_by("id","asc");
		return $this->db->get('mproduct')->result();
   }
   
}
   
?>