<?php
class M_about extends CI_Model{
   function show()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mprofil')->result();
   }
}
   
?>