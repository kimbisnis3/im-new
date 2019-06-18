<?php
class M_member extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mcustomer')->result();
   }
   function tammpilsemua()
   {
		return
		$this->db->query('SELECT * from mcustomer WHERE mcustomer.guest = FALSE ORDER BY datei desc' )->result();
   }
	function hapus_data($where,$mcustomer){
		$this->db->where($where);
		$this->db->delete($mcustomer);
	}
	function edit_data($where,$mcustomer){		
		return $this->db->get_where($mcustomer,$where);
	}
 
	function update_data($where,$data,$mcustomer){
		$this->db->where($where);
		$this->db->update($mcustomer,$data);
	}	
}
?>
