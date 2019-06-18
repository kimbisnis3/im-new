<?php
class M_syaratdanketentuan extends CI_Model{
   function show()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mketentuan')->result();
   }
}
   
?>