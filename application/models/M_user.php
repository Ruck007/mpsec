<?php
class M_user extends CI_Model {
 
    public function __construct(){
        parent::__construct();
	}

	function login($username, $password)
	{
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('user_name', $username);
		$this->db->where('user_password', MD5($password));
		$this->db->where('is_active', 1);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function updateLastLogin($id, $data)
	{
		$this->db->where('user_id', $id);
		$this->db->update('tbl_user', $data);
	}

	function get_user_level($userLevelID)
	{
		$this->db->select('*');
		$this->db->from('tbl_user_level');
		$this->db->where('userLevelID', $userLevelID);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			foreach($query->result() as $row)
			{
				$userLevel = $row->userLevel;
			}
			return $userLevel;
		}
		else
		{
			return false;
		}
	}

	/*
	
	function list_sales()
	{
		$this->db->select(' * ');
		$this->db->order_by('firstname', 'asc');
		$this->db->where('permission', 'sales');
		$this->db->where('is_active', '1');
		$query = $this->db->get('tbl_users');
		return $query->result_array();
	}
	
	function get_sales($id)
	{
		$this->db->select(' * ');
		$this->db->order_by('firstname', 'asc');
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_users');
		return $query->row_array();
	}
	
	function get_sales_hl()
	{
		$this->db->select(' tbl_users.id, tbl_users.profile_pic ');
		$this->db->join('tbl_users', 'tbl_users.id = tbl_sales_highlight.uid');
		$this->db->where('tbl_users.is_active', '1');
		$query = $this->db->get('tbl_sales_highlight');
		return $query->row_array();
	}

	public function update_sales_hl($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_sales_highlight', $data);
	}
	
	public function insert_sales($data)
	{
		$this->db->insert('tbl_users', $data);
		
		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;
	}

	public function update_sales($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('tbl_users', $data);
	}
	
	public function delete_sales($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_users');
	}

	*/

	public function get_user_info($id)
	{
		$query = $this->db->query("SELECT * FROM tbl_users, tbl_user_level WHERE tbl_users.userLevelID = tbl_user_level.userLevelID AND tbl_users.id = '".$id."' AND isDelete = '0'");

		if($query->num_rows() == 1)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}

	public function list_user($userLevelID)
	{
		/*
		$this->db->select(' * ');
		$this->db->order_by('firstname', 'asc');
		$query = $this->db->get('tbl_users');
		return $query->result_array();
		*/

		$query = $this->db->query("SELECT * FROM tbl_users, tbl_user_level WHERE tbl_users.userLevelID = tbl_user_level.userLevelID AND tbl_users.userLevelID >= '".$userLevelID."' AND isDelete = '0' ORDER BY firstname ASC");
		return $query->result_array();
	}

	public function list_user_without_ower($id, $userLevelID)
	{
		/*
		$this->db->select(' * ');
		$this->db->order_by('firstname', 'asc');
		$query = $this->db->get('tbl_users');
		return $query->result_array();
		*/

		$query = $this->db->query("SELECT * FROM tbl_users, tbl_user_level WHERE tbl_users.userLevelID = tbl_user_level.userLevelID AND tbl_users.userLevelID >= '".$userLevelID."' AND id <> '".$id."' AND isDelete = '0' ORDER BY firstname ASC");
		return $query->result_array();
	}

	public function list_user_level($userLevelID)
	{
		/*
		$this->db->select(' * ');
		$this->db->order_by('firstname', 'asc');
		$query = $this->db->get('tbl_users');
		return $query->result_array();
		*/

		$query = $this->db->query("SELECT * FROM tbl_user_level WHERE userLevelID >= '".$userLevelID."' ORDER BY userLevelID ASC");
		return $query->result_array();
	}

	public function insert_user($data)
	{
		$this->db->insert('tbl_users', $data);
		
		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;
	}

	public function delete_user($userID)
	{
		$data = array('isDelete' => 1, 'modifiedDate' => date("Y-m-d H:i:s", time()));

		$this->update_user($userID, $data);
	}

	public function update_user($id, $data)
	{
		$this->db->where('id', $id);
        $this->db->update('tbl_users',$data);
	}
	
	
	
	
	// for frontend ...
	/*
	public function fn_get_all_sales()
	{
		$this->db->select(' * ');
		$this->db->order_by('created_date', 'desc');
		$this->db->where('permission', 'sales');
		$this->db->where('is_active', '1');
		$query = $this->db->get('tbl_users');
		
		return $query->result_array();		
	}
	
	public function fn_get_sales_hl()
	{
		$query1 = $this->db->query(	"SELECT uid FROM tbl_sales_highlight order by RAND() limit 1" );
		$random_hl = $query1->row_array();
		$query2 = $this->db->query( "SELECT * FROM tbl_users where id=".$random_hl['uid'] );
		return $query2->row_array();
	}
	*/
}