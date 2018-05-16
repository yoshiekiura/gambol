<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		if (!$this->session->has_userdata("user")) redirect("access/login", "refresh");
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
}
