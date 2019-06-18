<?php
class M_header extends CI_Model{
   function kategori()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mkategori')->result();
   }
   function subkategori()
   {
      $this->db->order_by("id","desc");
      return $this->db->get('msubkategori')->result();
   }
   function event()
   {
      $this->db->order_by("id","desc");
      return $this->db->get('mevent')->result();
   }
   function logo()
   {
      $this->db->order_by("id","desc");
      return $this->db->get('mlogo')->result();
   }
}
   
?>