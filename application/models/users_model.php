<?php

    class Users_model extends CI_Model {

        function __construct(){
            parent::__construct();
        }

        function is_exist($id, $pass) {
            $this->db->where('login_id', $id);
            $this->db->where('password', $pass);
            $this->db->from('users');
            return $this->db->count_all_results() ? 1 : 0;
        }
    }

