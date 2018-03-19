<?php
    class Research extends CI_Controller {
        public function index(){

            $this->load->library('researches');
            $this->load->library('user');
            $user_info = $this->user->get_user_info();
            $lists = $this->researches->get_show_lists($user_info);
            $data['show_lists'] = $lists;

            #TEMP
            if(!strcmp($user_info['type'], 'CLIENT')) {
                $this->load->view('research/client', $data);
            } elseif( !strcmp($user_info['type'], 'MONITOR') ){
                $this->load->view('research/monitor', $data);
            }
        }
    }
