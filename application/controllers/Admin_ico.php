<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_ico extends Base_Controller
{

	function __construct()
	{
		parent::__construct();

		if (!$this->session->has_userdata("admin")) redirect("access/login", "refresh");
	}

	public function timeline()
	{
		$this->load->view('admin/header', $this->page_data);
		$this->load->view('admin/ico/timeline');
		$this->load->view('admin/footer');
	}

	public function progress()
	{
		$this->load->view('admin/header', $this->page_data);
		$this->load->view('admin/ico/progress');
		$this->load->view('admin/footer');
	}

	public function details()
	{
		$this->load->view('admin/header', $this->page_data);
		$this->load->view('admin/ico/details');
		$this->load->view('admin/footer');
	}

	public function listing()
	{
		$this->load->view('admin/header', $this->page_data);
		$this->load->view('admin/ico/listing');
		$this->load->view('admin/footer');
	}

	public function listing_filter()
	{
		$this->load->view('admin/header', $this->page_data);
		$this->load->view('admin/ico/listing_filter');
		$this->load->view('admin/footer');
	}
}
