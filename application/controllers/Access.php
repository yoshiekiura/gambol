<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Access extends Base_Controller
{

	function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
}
