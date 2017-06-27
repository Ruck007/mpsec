<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$header["isLogin"] = $this->session->userdata('isLogin');;
		
		$this->load->view('f_header',$header);
		$this->load->view('f_slider');
		$this->load->view('f_home');
		$this->load->view('f_footer');
	}
	
	public function contactus()
	{
		$header["isLogin"] = $this->session->userdata('isLogin');;
		
		$this->load->view('f_header',$header);
		$this->load->view('f_contact');
		$this->load->view('f_footer');
	}
	
	public function fund_manager()
	{
		$header["isLogin"] = $this->session->userdata('isLogin');;
		
		$this->load->view('f_header',$header);
		$this->load->view('f_fund_manager');
		$this->load->view('f_footer');
	}
	
	public function fund_edge()
	{
		$header["isLogin"] = $this->session->userdata('isLogin');;
		
		$this->load->view('f_header',$header);
		$this->load->view('f_fund_edge');
		$this->load->view('f_footer');
	}
	
	public function fund_structure()
	{
		$header["isLogin"] = $this->session->userdata('isLogin');;
		
		$this->load->view('f_header',$header);
		$this->load->view('f_fund_structure');
		$this->load->view('f_footer');
	}
	
	public function fee()
	{
		$header["isLogin"] = $this->session->userdata('isLogin');;
		
		$this->load->view('f_header',$header);
		$this->load->view('f_fund_fee');
		$this->load->view('f_footer');
	}
}
