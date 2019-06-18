<?php
class M_footer extends CI_Model{
   function socmed()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mmedsos')->result();
   }
   function iconbank()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mbank')->result();
   }
   function kategori()
   {
		$this->db->order_by("id","desc");
		$this->db->limit(4);
		return $this->db->get('mkategori')->result();
   }
}
   
?>