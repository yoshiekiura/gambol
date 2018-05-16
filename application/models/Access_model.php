<?php

class Access_model extends CI_Model
{

    function login($table, $username, $password)
    {

        $this->db->select("*");
        $this->db->from($table);
        $this->db->where("username = ", $username);
        $this->db->where("password = SHA2(CONCAT(salt,'" . $password . "'),512)");
        $this->db->where("deleted = 0");

        $query = $this->db->get();

        return $query->result_array();
    }

}

?>