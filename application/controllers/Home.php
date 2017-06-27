<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  
	public function __construct(){
		parent::__construct();
	}

	//public function comingsoon()
	//{
	//	$this->load->view('f_comingsoon');
	//}

	public function index()
	{
		$header["isLogin"] = $this->session->userdata('logged_in');
		
		$this->load->view('f_header',$header);
		$this->load->view('f_slider');
		$this->load->view('f_home');
		$this->load->view('f_footer');
	}
	
	public function contactus()
	{
		$header["isLogin"] = $this->session->userdata('logged_in');
		
		$this->load->view('f_header',$header);
		$this->load->view('f_contact');
		$this->load->view('f_footer');
	}
		
	function authen()
	{		
		echo "<script>alert('กรุณา Login ก่อนเข้าชมเนื้อหาส่วนนี้');</script>";
		redirect('/', 'refresh');
	}
	function link()
	{		
		echo "<script>alert('เข้าชมเนื้อหา (ระหว่างทดสอบ)');</script>";
		redirect('/', 'refresh');
	}
		
	function logout()
	{		
		$this->session->sess_destroy();
		redirect('/', 'refresh');
	}
	
	public function checkLogin()
	{
		//This method will have the credentials validation

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

		if($this->form_validation->run() == FALSE)
		{
			//Field validation failed.  User redirected to login page
			echo "<script>alert('".validation_errors()."');</script>";
			redirect('/', 'refresh');
		}
		else
		{
			//Go to private area
			redirect('/', 'refresh');
		}
	}
 
	function check_database($password)
	{
		//Field validation succeeded.  Validate against database
		$username = $this->input->post('username');

		//query the database
		$result = $this->m_user->login($username, $password);

		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
					'id' 				=> 	$row->user_id,
					'username' 			=> 	$row->user_name,
					'isActive' 			=> 	$row->is_active,
					'logged_in'			=>	TRUE				
				);
				$this->session->set_userdata($sess_array);
			}
			
			$data = array(
				'last_login_date'  		=> date("Y-m-d H:i:s")
			);
		
			$this->m_user->updateLastLogin($this->session->userdata('id'),$data);
			
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', '<p style="color:#f00;">Invalid username or password</p>');
			return false;
		}
	}
	
	//for test code
	function check_file()
	{
		//echo getcwd()."\\temp\\txt_file\\text.txt\n";
		if(file_exists(getcwd()."\\temp\\txt_file\\text.txt"))//(base_url()."temp/txt_file/text.txt"))
		{
			echo "Yes<br />";
			$myfile = fopen(getcwd()."\\temp\\txt_file\\text.txt", "r") or die("Unable to open file!");
			
			//echo fread($myfile,filesize(getcwd()."\\temp\\txt_file\\text.txt"));
			
			
			while(!feof($myfile)) {
				//echo fgets($myfile) . "<br>";
				$buffer = fgets($myfile, 4096); // Read a line.
				list($a,$b,$c,$d)= explode("|",$buffer);
				//Separate string by the means of |
				echo $a."-".$b."-".$c."-".$d."<br>";
			}

			fclose($myfile);
			
			//echo delete("target.txt");

		}
		else
		{
			echo "No";
		}
	}
}
