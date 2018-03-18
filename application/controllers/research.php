<?php
    class Research extends CI_Controller {
        public function lists(){

            $this->load->library('researches');
            $type = 'client';
            $user_id = 1;
            $lists = $this->researches->get_show_lists($type, $user_id);
            $data['show_lists'] = $lists;

            $this->load->view('research/client', $data);


        }
    }
