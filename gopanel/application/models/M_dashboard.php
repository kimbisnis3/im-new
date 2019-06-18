<?php
class M_dashboard extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("id","desc");
		return $this->db->get('w_profil')->result();
   }
   
	function getpenjualan(){
        $bulan  = date('m');
        $tahun  = date('Y');
        $sqli   = "select xorder.tgl, sum(xorderd.subtotal) jumlah from xorder JOIN xorderd on xorderd.ref_xorder = xorder.kode where date_part('year', xorder.tgl) = '$tahun' and void != true GROUP BY xorder.tgl";

        return $this->db->query($sqli)->result();
    }


}
?>
