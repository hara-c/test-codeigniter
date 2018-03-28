<?php

    class Researches_model extends CI_Model {

        function __construct(){
            parent::__construct();
        }

        function get_list($user_id = NULL) {
            if ($user_id) {
               $this->db->where('create_user_id', $user_id);
            }
            $this->db->where('disable', 0);
            $query = $this->db->get('researches');
            return $query->result();
        }

        function get_research($id = NULL) {
            if ($id) {
                $this->db->where('id', $id);
            }
            $query = $this->db->get('researches');
            $lists = array();
            foreach ($query->result() as $row){
                $lists[] = array(
                    'created_date' => $row->created_date,
                    'name'   => $row->name,
                    'reword' => $row->reword,
                    'id'     => $row->id,
                    );
            }
            return $lists;
        }

        function insert_research($research) {
            $this->db->insert('researches', $research);
        }

        function update_research($id, $research) {
            #TEMP: date(u) は常に0, use DateTime::format?
            $research['update_date'] = date("Y-m-d H:i:s.u", time());
            $this->db->where('id', $id);
            $this->db->update('researches', $research);
        }

    }
