<?php
class M_carapesan extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mcarapesan')->result();
   }
   function input_data($data,$mcarapesan){
		$this->db->insert($mcarapesan,$data);
	}
	function hapus_data($where,$mcarapesan){
		$this->db->where($where);
		$this->db->delete($mcarapesan);
	}
	function edit_data($where,$mcarapesan){		
		return $this->db->get_where($mcarapesan,$where);
	}
 
	function update_data($where,$data,$mcarapesan){
		$this->db->where($where);
		$this->db->update($mcarapesan,$data);
	}	
}
?>
