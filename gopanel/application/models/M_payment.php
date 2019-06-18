<?php
class M_payment extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mpayment')->result();
   }
    function selectwhere($mpayment,$where)
   {
		return $this->db->get_where($where,$mpayment);
   }
   function input_data($data,$mpayment){
		$this->db->insert($mpayment,$data);
	}
	function lihat_data($where,$mpayment){		
		return $this->db->get_where($mpayment,$where);
	}
 
	function update_data($where,$data,$mpayment){
		$this->db->where($where);
		$this->db->update($mpayment,$data);
	}	
	function hapus_data($where,$mpayment){
		$this->db->where($where);
		$this->db->delete($mpayment);
	}
}
?>
