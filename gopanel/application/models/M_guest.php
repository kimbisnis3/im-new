<?php
class M_guest extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mguest')->result();
   }
   function tammpilsemua()
   {
		return
		$this->db->query('SELECT * from mcustomer WHERE mcustomer.guest = TRUE ORDER BY id desc' )->result();
   }
	function hapus_data($where,$mguest){
		$this->db->where($where);
		$this->db->delete($mguest);
	}
	function edit_data($where,$mguest){		
		return $this->db->get_where($mguest,$where);
	}
 
	function update_data($where,$data,$mguest){
		$this->db->where($where);
		$this->db->update($mguest,$data);
	}	
}
?>
