<?php
class M_company extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('tcompany')->result();
   }
    function selectwhere($tcompany,$where)
   {
		return $this->db->get_where($where,$tcompany);
   }
   function input_data($data,$tcompany){
		$this->db->insert($tcompany,$data);
	}
	function lihat_data($where,$tcompany){		
		return $this->db->get_where($tcompany,$where);
	}
 
	function update_data($where,$data,$tcompany){
		$this->db->where($where);
		$this->db->update($tcompany,$data);
	}	
	function hapus_data($where,$tcompany){
		$this->db->where($where);
		$this->db->delete($tcompany);
	}
}
?>
