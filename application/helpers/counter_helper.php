<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if(!function_exists('check_guest'))
{
	function check_guest()
	{ 
		$CI =& get_instance();
		
		if(!$CI->session->userdata('ip'))
		{
			return False;
		}else{
			return True;
		}
		
	}
}


/* End of file login_helper.php */
/* Location: ./application/helpers/login_helper.php */