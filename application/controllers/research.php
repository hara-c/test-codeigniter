<?php
    class Research extends CI_Controller {
        public function index(){

            $this->load->library('researches');
            $lists = $this->researches->get_show_lists();
            $data['show_lists'] = $lists;
            $this->load->view('research/client', $data);
        }
    }
