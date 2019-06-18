<?php
class M_home extends CI_Model{
   function tampilbarang()
   {
		$this->db->order_by("id","desc");
        $this->db->where('status',true);
        $this->db->limit('6');
		return $this->db->get('mbarang')->result();
   }
   function tampilkategori()
   {
		$this->db->order_by("id","asc");
		return $this->db->get('mkategori')->result();
   }
   function tampilkategorilimit()
   {
      $this->db->order_by("id","asc");
  //    $this->db->limit('9');
      return $this->db->get('mkategori')->result();
   }
   function slideshow()
   {
      $this->db->order_by("id","asc");
      return $this->db->get('mslideshow')->result();
   }
}
   
?>