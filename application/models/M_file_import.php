<?php
class M_file_import extends CI_Model {
 
    public function __construct(){
        parent::__construct();
	}
	
	public function into_tbl_customer_capital($data)
	{
		$this->db->insert('tbl_customer_capital', $data);
		
		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;
	}
	
	public function into_tbl_customer_investment($data)
	{
		$this->db->insert('tbl_customer_investment', $data);
		
		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;
	}
	
	public function into_tbl_customer_performance($data)
	{
		$this->db->insert('tbl_customer_performance', $data);
		
		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;
	}
}