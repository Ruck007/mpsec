<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function error404()
	{
		$this->load->view('error404');
	}
}
