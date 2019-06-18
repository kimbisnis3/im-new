<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_billing extends CI_Model {
    
     // Get all details ehich store in "products" table in database.
        public function get_all()
	{
		$query = $this->db->get('products');
		return $query->result_array();
	}
    
    // Insert customer details in "customer" table in database.
	public function insert_customer($data)
	{
		$this->db->insert('mcustomer', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;		
	}
	public function insert_guest($data)
	{
		$this->db->insert('mcustomer', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;		
	}
	
        // Insert order date with customer id in "orders" table in database.
	public function insert_order($data)
	{
		$this->db->insert('xorder', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
	public function insert_order_detail($data)
	{
		$this->db->insert('xorderd', $data);
	}

	function shipment()
   {
		$this->db->order_by("id","asc");
		return $this->db->get('mshipment')->result();
   }
   function payment()
   {
		$this->db->order_by("id","asc");
		return $this->db->get('mpayment')->result();
   }
   function ekspedisi()
   {
		$this->db->order_by("id","asc");
		return $this->db->get('mekspedisi')->result();
   }
       
}