<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpa_agents extends CI_Controller {

	public function index()
	{
		$this->load->view('app_header');
		$this->load->view('app_menu');
		$this->load->view('app_agent_detail');
		$this->load->view('app_footer');
	}
	
	public function detail()
	{
		$this->load->view('app_header');
		$this->load->view('app_menu');
		$this->load->view('app_agents');
		$this->load->view('app_footer');
	}
}
