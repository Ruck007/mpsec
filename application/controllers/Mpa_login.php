<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mpa_login extends CI_Controller {
  
	public function __construct(){
		parent::__construct();
		
	}
	
	public function index()
	{
		$this->load->helper(array('form'));
		$this->load->view('app_login');		
	}
	
	public function checkLogin()
	{
		//This method will have the credentials validation

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

		if($this->form_validation->run() == FALSE)
		{
			//Field validation failed.  User redirected to login page
			$this->load->view('app_login');
		}
		else
		{
			//Go to private area
			redirect('/mpa/dashboard', 'refresh');
		}
	}
		
	function lockscreen()
	{		
		$this->load->helper(array('form'));
		$this->load->view('app_lockscreen');		
	}
		
	function logout()
	{		
		$this->session->sess_destroy();
		redirect('/mpa/login', 'refresh');
	}
 
	function check_database($password)
	{
		//Field validation succeeded.  Validate against database
		//$username = $this->input->post('username');

		//query the database
		//$result = $this->m_user->login($username, $password);
		$result = true;
		//load configulation...
		/*
		$admin_folder = $this->m_user->get_config('ADMIN_FOLDER');
		$website_folder = $this->m_user->get_config('WEBSITE_FOLDER');
		$admin_url = $this->m_user->get_config('ADMIN_URL');
		$website_url = $this->m_user->get_config('WEBSITE_URL');
		$default_language = $this->m_user->get_config('DEFAULT_LANGUAGE');
		$website_name = $this->m_user->get_config('WEBSITE_NAME');
		*/
		if($result)
		{
			//echo "<script>alert('".$this->input->post('username')."');</script>";
			$sess_array = array();
			$sess_array = array(
				'isLogin'	=>	true,
				'username'	=>	$this->input->post('username'),
				'password'	=>	$this->input->post('password')
			);
			$this->session->set_userdata($sess_array);
			/*foreach($result as $row)
			{
				$sess_array = array(
				'ADMIN_FOLDER'		=>	$admin_folder['value'],
				'WEBSITE_FOLDER'	=>	$website_folder['value'],
				'ADMIN_URL'			=>	$admin_url['value'],
				'WEBSITE_URL'		=>	$website_url['value'],
				'DEFAULT_LANGUAGE'	=>	$default_language['value'],
				'WEBSITE_NAME'		=>	$website_name['value'],
				'id' 				=> 	$row->id,
				'username' 			=> 	$row->username,
				'permission' 		=> 	$row->permission,
				'firstname' 		=> 	$row->firstname,
				'lastname' 			=> 	$row->lastname,
				'profile_pic' 		=> 	$row->profile_pic,
				'gender' 			=> 	$row->gender,
				'logged_in'			=>	TRUE
				);
				$this->session->set_userdata($sess_array);
			}*/
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', '<p style="color:#f00;">Invalid username or password</p>');
			return false;
		}
	}
}
