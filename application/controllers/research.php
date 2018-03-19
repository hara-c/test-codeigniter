<?php
    class Research extends CI_Controller {
        public function index(){

            $this->load->library('researches');
            $user_id = 1; # TEMP
            $lists = $this->researches->get_show_lists($user_id);
            $data['show_lists'] = $lists;
            $this->load->view('research/client', $data);
        }
    }
