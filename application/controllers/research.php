<?php
    class Research extends CI_Controller {
        public function index(){

            $this->load->library('researches');
            $this->load->library('user');
            $user_info = $this->user->get_user_info();
            $lists = $this->researches->get_show_lists($user_info);
            $data['show_lists'] = $lists;
            $data['type'] = $user_info['type'];

            $this->load->view('research', $data);
        }
    }
