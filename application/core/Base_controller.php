<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Base_Controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->page_data = array();

	}

	public function hash($password)
	{
		$salt = rand(111111, 999999);
		$password = hash("sha512", $salt . $password);

		$hash = array(
			"salt" => $salt,
			"password" => $password,
		);

		return $hash;
	}
}
