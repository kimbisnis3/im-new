<?php
class M_kategori extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mkategori')->result();
   }
   function input_data($data,$mkategori){
		$this->db->insert($mkategori,$data);
	}
	function hapus_data($where,$mkategori){
		$this->db->where($where);
		$this->db->delete($mkategori);
	}
	function edit_data($where,$mkategori){		
		return $this->db->get_where($mkategori,$where);
	}
 
	function update_data($where,$data,$mkategori){
		$this->db->where($where);
		$this->db->update($mkategori,$data);
	}	
}
?>
