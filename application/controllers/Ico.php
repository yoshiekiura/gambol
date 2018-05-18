<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ico extends Base_Controller
{

	function __construct()
	{
		parent::__construct();

		// if (!$this->session->has_userdata("user")) redirect("access/login", "refresh");
	}

	public function countdown(){
		$this->load->view('main/header', $this->page_data);
		$this->load->view('main/ico/countdown');
		$this->load->view('main/footer');
	}

	public function buy_token(){
		$this->load->view('main/header', $this->page_data);
		$this->load->view('main/ico/buy_token');
		$this->load->view('main/footer');
	}

	public function transfer_token(){
		$this->load->view('main/header', $this->page_data);
		$this->load->view('main/ico/transfer_token');
		$this->load->view('main/footer');
	}

	public function timeline()
	{
		$this->load->view('main/header', $this->page_data);
		$this->load->view('main/ico/timeline');
		$this->load->view('main/footer');
	}

	public function progress()
	{
		$this->load->view('main/header', $this->page_data);
		$this->load->view('main/ico/progress');
		$this->load->view('main/footer');
	}

	public function details()
	{
		$this->load->view('main/header', $this->page_data);
		$this->load->view('main/ico/details');
		$this->load->view('main/footer');
	}

	public function listing()
	{

		$crypto_list = $this->callAPI("GET", "https://www.cryptocompare.com/api/data/coinlist/", false);

		$crypto_list = json_decode($crypto_list, true);

		$this->page_data["image_path"] = $crypto_list["BaseImageUrl"];

		$crypto_list = $crypto_list["Data"];

		$sort_order = array();
		foreach ($crypto_list as $key => $row) {
			$sort_order[$key] = $row["SortOrder"];
		}
		array_multisort($sort_order, SORT_ASC, $crypto_list);

		$crypto_list = array_slice($crypto_list, 0, 10);

		$crypto_name_list = "";
		foreach ($crypto_list as $row) {
			$crypto_name_list = ($crypto_name_list == "") ? $row["Name"] : $crypto_name_list . "," . $row["Name"];
		}

		$crypto_price = $this->callAPI("GET", "https://min-api.cryptocompare.com/data/pricemulti?fsyms=" .$crypto_name_list. "&tsyms=USD", false);

		$crypto_price = json_decode($crypto_price, true);

		foreach ($crypto_list as $row) {
			$crypto_list[$row["Name"]]["price"] = $crypto_price[$row["Name"]]["USD"];
		}

		// $this->debug($crypto_list);

		$this->page_data["crypto"] = $crypto_list;

		$this->load->view('main/header', $this->page_data);
		$this->load->view('main/ico/listing');
		$this->load->view('main/footer');
	}

	public function listing_filter()
	{

		$crypto_list = $this->callAPI("GET", "https://www.cryptocompare.com/api/data/coinlist/", false);

		$crypto_list = json_decode($crypto_list, true);

		$this->page_data["image_path"] = $crypto_list["BaseImageUrl"];

		$crypto_list = $crypto_list["Data"];

		$sort_order = array();
		foreach ($crypto_list as $key => $row) {
			$sort_order[$key] = $row["SortOrder"];
		}
		array_multisort($sort_order, SORT_ASC, $crypto_list);

		$crypto_list = array_slice($crypto_list, 0, 10);

		$crypto_name_list = "";
		foreach ($crypto_list as $row) {
			$crypto_name_list = ($crypto_name_list == "") ? $row["Name"] : $crypto_name_list . "," . $row["Name"];
		}

		$crypto_price = $this->callAPI("GET", "https://min-api.cryptocompare.com/data/pricemulti?fsyms=" .$crypto_name_list. "&tsyms=USD", false);

		$crypto_price = json_decode($crypto_price, true);

		foreach ($crypto_list as $row) {
			$crypto_list[$row["Name"]]["price"] = $crypto_price[$row["Name"]]["USD"];
		}

		// $this->debug($crypto_list);

		$this->page_data["crypto"] = $crypto_list;

		$this->load->view('main/header', $this->page_data);
		$this->load->view('main/ico/listing_filter');
		$this->load->view('main/footer');
	}
}
