<?php
class M_profil extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mprofil')->result();
   }
   function input_data($data,$mprofil){
		$this->db->insert($mprofil,$data);
	}
	function hapus_data($where,$mprofil){
		$this->db->where($where);
		$this->db->delete($mprofil);
	}
	function edit_data($where,$mprofil){		
		return $this->db->get_where($mprofil,$where);
	}
 
	function update_data($where,$data,$mprofil){
		$this->db->where($where);
		$this->db->update($mprofil,$data);
	}	
}
?>
