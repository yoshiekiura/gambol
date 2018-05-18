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

	function callAPI($method, $url, $data)
	{
		$curl = curl_init();

		switch ($method) {
			case "POST":
				curl_setopt($curl, CURLOPT_POST, 1);
				if ($data)
					curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
				break;
			case "PUT":
				curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
				if ($data)
					curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
				break;
			default:
				if ($data)
					$url = sprintf("%s?%s", $url, http_build_query($data));
		}
	 
		// OPTIONS:
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
		));
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		$agents = array(
			'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1',
			'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.9) Gecko/20100508 SeaMonkey/2.0.4',
			'Mozilla/5.0 (Windows; U; MSIE 7.0; Windows NT 6.0; en-US)',
			'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_7; da-dk) AppleWebKit/533.21.1 (KHTML, like Gecko) Version/5.0.5 Safari/533.21.1'
		 
		);
		curl_setopt($curl,CURLOPT_USERAGENT,$agents[array_rand($agents)]);
		// EXECUTE:
		$result = curl_exec($curl);
		if (!$result) {
			die("Connection Failure");
		}
		curl_close($curl);
		return $result;
	}

	function debug($array){
		echo "<pre>";
		var_dump($array);
		echo "</pre>";
		die();
	}
}
