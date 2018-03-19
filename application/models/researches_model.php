<?php

    class Researches_model extends CI_Model {

        function __construct(){
            parent::__construct();
        }

        function get_listsa($user_id) {
            $this->db->where('create_user_id', $user_id);
            $query = $this->db->get('researches');
            $lists = array();
            foreach ($query->result() as $row){
                $lists[] = array('name' => $row->name, 'is_done' => $row->is_done);
            }
            return $lists;
        }
    }
