<?php
class M_event extends CI_Model{
   function show($where,$mevent)
   {
   	return $this->db->query("SELECT * FROM mevent WHERE slug ='$where'");
   }
   function showside()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mevent')->result();
   }
}
   
?>