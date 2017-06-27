<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpa_agents extends CI_Controller {

	public function index()
	{
		$name = $this->session->userdata('username');
		$header['userName'] = $name;
		$header['password'] = $this->session->userdata('password');
		$menu['name'] = $name;
		if($name == 'agent'){
			$header['role'] = "3";
			$menu['role'] = "3";
			$menu['rolename'] = 'Agent';
		}elseif($name == 'administrator'){
			$header['role'] = "1";
			$menu['role'] = "1";
			$menu['rolename'] = 'System Administrator';
		}elseif($name == 'customer'){
			$header['role'] = "2";
			$menu['role'] = "2";
			$menu['rolename'] = 'Customer';
		}else{
			$header['role'] = "4";
			$menu['role'] = "4";
			$menu['rolename'] = 'Editor';
		}
		
		$this->load->view('app_header', $header);
		$this->load->view('app_menu', $menu);
		$this->load->view('app_agent_detail');
		$this->load->view('app_footer');
	}
	
	public function customer()
	{
	}
	
	public function report()
	{
	}
	
	public function commission()
	{
	}
	
	public function download()
	{
	}
}
