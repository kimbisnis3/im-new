<?php
class M_kontak extends CI_Model{
   function show()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mkontak')->result();
   }
}
   
?>