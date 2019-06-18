<?php
class M_register extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mcustomer')->result();
   }
   function input_data($data,$mcustomer){
		$this->db->insert($mcustomer,$data);
	}
 
}
?>
