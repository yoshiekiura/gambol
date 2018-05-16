<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Access extends Base_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->model("Access_model");

	}

	public function admin_login()
	{
		if ($_POST) {
			$input = $this->input->post();

			$admin = $this->Access_model->login("admin", $input["username"], $input["password"]);
			
			if(!empty($admin)){
				$admin = $admin[0];
				if($admin["deleted"] == 0){
					$this->session->set_userdata("admin", $admin);

					redirect("admin_dashboard", "refresh");
				} else {
					$this->page_data["error"] = "this account has been deactivated";
				}
			} else {
				$this->page_data["error"] = "invalid username or password";
			}
		}

		$this->load->view('access/header', $this->page_data);
		$this->load->view('access/admin_login');
		$this->load->view('access/footer');
	}
}
