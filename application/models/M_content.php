<?php
class M_content extends CI_Model {
 
    public function __construct(){
        parent::__construct();
	}

	public function list_contents()
	{
		$query = $this->db->query("SELECT tbl_content.*, tbl_page.pageName FROM tbl_page, tbl_content WHERE tbl_page.pageID = tbl_content.pageID AND  tbl_content.isDelete = '0' ORDER BY contentID DESC");
		return $query->result_array();
	}

	public function insert_content($data)
	{
		$this->db->insert('tbl_content', $data);
		
		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;
	}

	public function delete_content($contentID, $userID)
	{
		$data = array('isDelete' => 1, 'isHighlight' => 0, 'modifiedDate' => date("Y-m-d H:i:s", time()), 'modifiedByUserID' => $userID);
		$this->update_content($contentID, $data);
	}

	public function update_content($id, $data)
	{
		$this->db->where('contentID', $id);
        $this->db->update('tbl_content',$data);
	}

	public function get_content_info($contentID)
	{
		$this->db->select('*');
		$this->db->from('tbl_content');
		$this->db->where('contentID', $contentID);
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

	public function count_highlight()
	{
		$this->db->select('*');
		$this->db->from('tbl_content');
		$this->db->where('isHighlight', 1);
		$this->db->where('isDelete', 0);
		$query = $this->db->get();

		return $query->num_rows();
	}

	public function get_oldest_highlight($lastContentID)
	{
		$query = $this->db->query("
					SELECT contentID
					FROM tbl_content 
					WHERE isDelete = '0' 
					AND isHighlight = '1' 
					AND contentID <> '".$lastContentID."'
					ORDER BY createdDate ASC
					LIMIT 0, 1 ");
		if($query->num_rows() == 1)
		{
			$queryList = $query->result_array();
			return $queryList[0]['contentID'];
		}
		else
			return 0;
	}

	public function front_end_list_contents_slider()
	{
		$query = $this->db->query("
					SELECT tbl_content.*, tbl_page.pageName, tbl_page.pageFriendlyUrl, tbl_category.categoryName, tbl_users.firstname 
					FROM tbl_page, tbl_content, tbl_category, tbl_users 
					WHERE tbl_page.pageID = tbl_content.pageID 
					AND tbl_users.id = tbl_content.createdByUserID 
					AND tbl_category.categoryID = tbl_page.categoryID
					AND tbl_content.isActive = '1' 
					AND tbl_content.isHighlight = '1' 
					AND tbl_content.isDelete = '0' 
					ORDER BY createdDate DESC");
		return $query->result_array();
	}

	public function front_end_list_contents($pageID)
	{
		if( $pageID > 0 )
		{
			$query = $this->db->query("
						SELECT tbl_content.*, tbl_page.pageName, tbl_page.pageFriendlyUrl, tbl_users.firstname, tbl_category.categoryName 
						FROM tbl_page, tbl_content, tbl_category, tbl_users 
						WHERE tbl_page.pageID = tbl_content.pageID 
						AND tbl_users.id = tbl_content.createdByUserID 
						AND tbl_category.categoryID = tbl_page.categoryID 
						AND tbl_content.isActive = '1' 
						AND tbl_content.isDelete = '0' 
						AND tbl_content.pageID = '".$pageID."'
						ORDER BY createdDate DESC");
		}
		else
		{
			$query = $this->db->query("
						SELECT tbl_content.*, tbl_page.pageName, tbl_page.pageFriendlyUrl, tbl_users.firstname, tbl_category.categoryName 
						FROM tbl_page, tbl_content, tbl_category, tbl_users 
						WHERE tbl_page.pageID = tbl_content.pageID 
						AND tbl_users.id = tbl_content.createdByUserID 
						AND tbl_category.categoryID = tbl_page.categoryID 
						AND tbl_content.isActive = '1' 
						AND tbl_content.isDelete = '0' 
						ORDER BY createdDate DESC");
		}
		return $query->result_array();
	}

	public function front_end_get_content_info_from_url($createdDate, $url)
	{
		$query = $this->db->query("
					SELECT tbl_content.*, tbl_page.pageName, tbl_page.pageFriendlyUrl, tbl_users.firstname, tbl_category.categoryName 
					FROM tbl_page, tbl_content, tbl_category, tbl_users 
					WHERE tbl_page.pageID = tbl_content.pageID 
					AND tbl_users.id = tbl_content.createdByUserID 
					AND tbl_category.categoryID = tbl_page.categoryID 
					AND DATE(tbl_content.createdDate) = '".$createdDate."' 
					AND tbl_content.contentFriendlyUrl = '".$url."' ");

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



































	public function list_page_type()
	{
		$query = $this->db->query("SELECT * FROM tbl_page_type ORDER BY pageTypeID ASC");
		return $query->result_array();
	}



	public function count_page()
	{
		$query = $this->db->query("SELECT * FROM tbl_page WHERE isDelete = '0' ORDER BY pageID ASC");
		return $query->num_rows();
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