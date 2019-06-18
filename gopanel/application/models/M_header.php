<?php
class M_header extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mcarapesan')->result();
   }
   
}
?>
