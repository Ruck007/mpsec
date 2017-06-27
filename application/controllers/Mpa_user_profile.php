<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpa_user_profile extends CI_Controller {

	public function index()
	{
		$this->load->view('app_header');
		$this->load->view('app_menu');
		$this->load->view('app_profile');
		$this->load->view('app_footer');
	}
}
