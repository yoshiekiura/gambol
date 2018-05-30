<?php

class Main extends Base_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model("User_model");
        $this->load->model("Email_model");
        $this->load->model("Access_model");
    }

    function index()
    {
        $this->load->view("main/Main/header");
        $this->load->view("main/Main/index");
        $this->load->view("main/Main/footer");
    }

    function road_map()
    {
        $this->load->view("main/Main/header");
        $this->load->view("main/Main/road_map");
        $this->load->view("main/Main/footer");
    }

    function token()
    {
        $this->load->view("main/Main/header");
        $this->load->view("main/Main/token");
        $this->load->view("main/Main/footer");
    }

    function future()
    {
        $this->load->view("main/Main/header");
        $this->load->view("main/Main/future");
        $this->load->view("main/Main/footer");
    }

    function ranking()
    {
        $this->load->view("main/Main/header");
        $this->load->view("main/Main/ranking");
        $this->load->view("main/Main/footer");
    }

    function register()
    {
        if ($_POST) {
            $input = $this->input->post();

            $where = array(
                "email" => $input["email"]
            );

            $exists = $this->User_model->get_where($where);

            if (!empty($exists)) {
                die("email already exists");
            }

            if ($input['password'] != $input["password2"]) {
                die("passwords do not match");
            } else {
                $hash = $this->hash($input["password"]);

                $code = rand(11111111, 99999999);

                $data = array(
                    "email" => $input["email"],
                    "password" => $hash["password"],
                    "salt" => $hash["salt"],
                    "referral_code" => $input["referral_code"],
                    "code" => $code
                );

                $this->User_model->add($data);

                $this->Email_model->verification_email($input["email"], $input["email"], $code);

                redirect("main", "refresh");
            }

        } else {
            show_404();
        }
    }

    function verify_user()
    {
        if (empty($_GET["email"]) or empty($_GET["code"])) {
            show_404();
        } else {
            $where = array(
                "email" => $_GET["email"],
                "code" => $_GET["code"]
            );

            $data = array(
                "verified" => 1
            );

            $this->User_model->update_where($where, $data);

            $this->session->set_flashdata("verified", "completed");

            redirect("main", "refresh");
        }
    }

    function login()
    {
        if ($_POST) {
            $input = $this->input->post();

            $user = $this->Access_model->login("user", $input["email"], $input["password"]);

            if (!empty($user)) {
                $user = $user[0];
                if ($user["deleted"] == 0) {
                    if ($user["verified"] == 1) {
                        $this->session->set_userdata("user", $user);

                        redirect("ico/countdown", "refresh");
                    } else {
                        die("this account has not been verified");
                    }
                } else {
                    die("this account has been deactivated");
                }
            } else {
                die("invalid email or password");
            }

        } else {
            show_404();
        }
    }

    function about()
    {
        $this->load->view("main/Main/header");
        $this->load->view("main/Main/about");
        $this->load->view("main/Main/footer");
    }
    function product()
    {
        $this->load->view("main/Main/header");
        $this->load->view("main/Main/product");
        $this->load->view("main/Main/footer");
    }

}

?>
