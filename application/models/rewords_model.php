<?php

    class Rewords_model extends CI_Model {

        function __construct(){
            parent::__construct();
        }

        function get_research_user_map() {
            $query = $this->db->get('rewords');
            $lists = array();
            foreach($query->result() as $row){
                $lists[$row->research_id] = $row->price;
            }
            return $lists;
        }

        function get_count_by_research_id() {
            $query = $this->db
                ->select('research_id, count(*) as c')
                ->group_by('research_id')
                ->get('rewords');

                $lists = array();
                foreach($query->result() as $row) {
                    $lists[$row->research_id] = $row->c;
                }
                return $lists;
        }

    }
