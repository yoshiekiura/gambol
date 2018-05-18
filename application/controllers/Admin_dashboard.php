<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_dashboard extends Base_Controller
{

	function __construct()
	{
		parent::__construct();

		if (!$this->session->has_userdata("admin")) redirect("access/admin_login", "refresh");
	}

	public function index()
	{
		$this->load->view('admin/header', $this->page_data);
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}

}
