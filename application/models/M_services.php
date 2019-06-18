<?php
class M_services extends CI_Model{
   function show()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mservices')->result();
   }
}
   
?>