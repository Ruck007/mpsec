<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('check_login'))
{
	function check_login_session()
	{ 
		//return $this->session->userdata('logged_in');
		$CI =& get_instance();
		
		if(!$CI->session->userdata('logged_in'))
		{
			redirect('/mpa/login', 'refresh');
		}
		
	}
}


/* End of file login_helper.php */
/* Location: ./application/helpers/login_helper.php */