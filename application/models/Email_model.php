<?php

class Email_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function verification_email($email, $username, $code) {

        $body = '<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>GAMBOL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div style="width : 50vw; height:60vh; margin:0 auto; border:solid 1px black;">
            <div style="width : 100%; height : 10vh; background-color : #fbae1c;">
                <h1 style="margin : 0; padding : 0; color : white; margin-left:2vw; padding-top:3vh">GAMBOL</h1>
            </div>
            <div style="width : 100%; height : 40vh;">
                <br/>
                <br/>
                <br/>
                <h2 style="margin:0; padding:0; margin-left:2vw;">You\'re nearly there!</h2>
                <br/>
                <br/>
                <br/>
                <p style="margin:0; padding:0; margin-left:2vw;">To complete registering your account. Please click on the button below.</p>
                <br/>
                <br/>
                <br/>
                <a href="' . base_url() . 'main/verify_user?email=' . $email . '&code=' . $code . '"><button style = "margin-left: 2vw; height: 5vh; width: 5vw; border-radius: 10%; background-color: #fbae1c; color: white; border-color: #fbae1c; font-size: 1em;">Verify Now</button></a>
                <br />
            </div>
            <div style="width : 100%; height : 10vh;background-color: #fbae1c;">
            </div>
        </div>
    </body>
</html>
';

        $this->load->library('email');

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'noreply.gambol@gmail.com',
            'smtp_pass' => 'xssukqyfomdamfoc',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'newline' => "\r\n"
        );


        $this->email->initialize($config);

        $this->email->clear();

        $this->email->from('noreply.gambol@gmail.com', "Gambol");
        $this->email->to($email);
        $this->email->reply_to('noreply.gambol@gmail.com', "Gambol");

        $this->email->subject('Gambol account verification');

        $this->email->message($body);

        if ($this->email->send()) {
            
        } else {
            echo $this->email->print_debugger();
        }
    }

}
