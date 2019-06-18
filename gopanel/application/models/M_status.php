<?php
class M_status extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mstatus')->result();
   }
    function selectwhere($mstatus,$where)
   {
		return $this->db->get_where($where,$mstatus);
   }
   function input_data($data,$mstatus){
		$this->db->insert($mstatus,$data);
	}
	function lihat_data($where,$mstatus){		
		return $this->db->get_where($mstatus,$where);
	}
 
	function update_data($where,$data,$mstatus){
		$this->db->where($where);
		$this->db->update($mstatus,$data);
	}	
	function hapus_data($where,$mstatus){
		$this->db->where($where);
		$this->db->delete($mstatus);
	}
}
?>
