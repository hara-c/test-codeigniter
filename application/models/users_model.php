<?php

    class Users_model extends CI_Model {

        function __construct(){
            parent::__construct();
        }

        function is_exist($id, $pass) {
            $query = $this->db->get_where('users', array('login_id'=>$id, 'password'=>$pass));

            $row = $query->row(0, 'object');
            return $row;
        }

        function get_user_info_by_id($id) {
            $query = $this->db->get_where('users', array('id' => $id));
            return $query->row(0, 'array');
        }
    }

