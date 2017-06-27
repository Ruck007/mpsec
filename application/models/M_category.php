<?php
class M_category extends CI_Model {
 
    public function __construct(){
        parent::__construct();
	}

	public function list_categories()
	{
		$query = $this->db->query("SELECT * FROM tbl_category, tbl_category_type WHERE tbl_category.categoryTypeID = tbl_category_type.categoryTypeID AND isDelete = '0' ORDER BY categoryOrder ASC");
		return $query->result_array();
	}

	public function list_categories_for_page()
	{
		$query = $this->db->query("SELECT * FROM tbl_category WHERE categoryTypeID < '3' AND isDelete = '0' ORDER BY categoryOrder ASC");
		return $query->result_array();
	}

	public function list_category_type()
	{
		$query = $this->db->query("SELECT * FROM tbl_category_type ORDER BY categoryTypeID ASC");
		return $query->result_array();
	}

	public function count_category()
	{
		$query = $this->db->query("SELECT * FROM tbl_category WHERE isDelete = '0' ORDER BY categoryID ASC");
		return $query->num_rows();
	}

	public function insert_category($data)
	{
		$this->db->insert('tbl_category', $data);
		
		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;
	}

	public function delete_category($categoryID, $userID)
	{
		$data = array('isDelete' => 1, 'modifiedDate' => date("Y-m-d H:i:s", time()), 'modifiedByUserID' => $userID, 'categoryOrder' => 0);
		$this->update_category($categoryID, $data);

		$this->sort_new_category_order();
	}

	public function sort_new_category_order()
	{
		$i = 1;
		$query = $this->db->query("SELECT * FROM tbl_category WHERE isDelete = '0' ORDER BY categoryOrder ASC");
		$categoryList = $query->result_array();
		foreach ($categoryList as $categoryInfo)
		{
			$data = array('categoryOrder' => $i);
			$categoryID = $categoryInfo['categoryID'];

			$this->update_category($categoryID, $data);
			$i++;
		}
	}

	public function update_category($id, $data)
	{
		$this->db->where('categoryID', $id);
        $this->db->update('tbl_category',$data);
	}

	public function get_category_info($categoryID)
	{
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('categoryID', $categoryID);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			$queryList = $query->result_array();
			return $queryList[0];
		}
		else
		{
			return array();
		}
	}

	public function move_category($categoryID, $oldCategoryOrder, $newCategoryOrder)
	{
		$data = array('categoryOrder' => $oldCategoryOrder);
		$this->db->where('categoryOrder', $newCategoryOrder);
        $this->db->update('tbl_category',$data);

        $data = array('categoryOrder' => $newCategoryOrder);
        $this->update_category($categoryID, $data);
	}

	public function move_category_up($categoryID)
	{
		$categoryInfo = $this->get_category_info($categoryID);
		$oldCategoryOrder = $categoryInfo['categoryOrder'];
		$newCategoryOrder = $oldCategoryOrder - 1;

		$this->move_category($categoryID, $oldCategoryOrder, $newCategoryOrder);
	}

	public function move_category_down($categoryID)
	{
		$categoryInfo = $this->get_category_info($categoryID);
		$oldCategoryOrder = $categoryInfo['categoryOrder'];
		$newCategoryOrder = $oldCategoryOrder + 1;

		$this->move_category($categoryID, $oldCategoryOrder, $newCategoryOrder);
	}

	public function front_end_list_categories()
	{
		$query = $this->db->query("SELECT * FROM tbl_category, tbl_category_type WHERE tbl_category.categoryTypeID = tbl_category_type.categoryTypeID AND isDelete = '0' AND isActive = '1' ORDER BY categoryOrder ASC");
		return $query->result_array();
	}

	public function get_category_info_from_url($url)
	{
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('categoryFriendlyUrl', $url);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			$queryList = $query->result_array();
			return $queryList[0];
		}
		else
		{
			return array();
		}
	}

	













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