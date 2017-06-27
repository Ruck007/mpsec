<?php
class M_inbox extends CI_Model {
 
    public function __construct(){
        parent::__construct();
	}

	public function list_inboxs()
	{
		$query = $this->db->query("SELECT * FROM tbl_inbox WHERE isDelete = '0' ORDER BY inboxDate DESC");
		return $query->result_array();
	}

	public function insert_inbox($data)
	{
		$this->db->insert('tbl_inbox', $data);
		
		$id = $this->db->insert_id();
		
		return (isset($id)) ? $id : FALSE;
	}

	public function delete_inbox($inboxID, $userID)
	{
		$data = array('isDelete' => 1, 'deleteDate' => date("Y-m-d H:i:s", time()), 'deleteUserID' => $userID);
		$this->update_inbox($inboxID, $data);
	}

	public function update_inbox($id, $data)
	{
		$this->db->where('inboxID', $id);
        $this->db->update('tbl_inbox',$data);
	}

	public function get_inbox_info($inboxID)
	{
		$this->db->select('*');
		$this->db->from('tbl_inbox');
		$this->db->where('inboxID', $inboxID);
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
/*
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
		return $query->result_array();
	}













	
	*/
}