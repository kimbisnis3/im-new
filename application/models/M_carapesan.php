<?php
class M_carapesan extends CI_Model{
   function show()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mcarapesan')->result();
   }
}
   
?>