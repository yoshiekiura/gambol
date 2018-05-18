<?php

class User_model extends CI_Model
{

    function add($data)
    {
        $this->db->insert("user", $data);

    }

    function update_where($where, $data)
    {
        $this->db->where($where);
        $this->db->update("user", $data);
    }

    function get_where($where)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($where);

        $query = $this->db->get();

        return $query->result_array();
    }

}

?>