<?php
class M_jenisbarang extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('mjenisbarang')->result();
   }
    function selectwhere($mjenisbarang,$where)
   {
		return $this->db->get_where($where,$mjenisbarang);
   }
   function input_data($data,$mjenisbarang){
		$this->db->insert($mjenisbarang,$data);
	}
	function lihat_data($where,$mjenisbarang){		
		return $this->db->get_where($mjenisbarang,$where);
	}
 
	function update_data($where,$data,$mjenisbarang){
		$this->db->where($where);
		$this->db->update($mjenisbarang,$data);
	}	
	function hapus_data($where,$mjenisbarang){
		$this->db->where($where);
		$this->db->delete($mjenisbarang);
	}
}
?>
