<?php
    class Research extends CI_Controller {
        public function index(){

            $this->load->library('researches');
            $this->load->library('user');
            $user_info = $this->user->get_current_user_info();
            $lists = $this->researches->get_show_lists($user_info);
            $data['show_lists'] = $lists;
            $data['user'] = $user_info;

            $this->load->view('header', $data);
            $this->load->view('research', $data);
        }

        public function create() {

            $this->load->library('user');
            if (! $this->user->is_enable_create_user()) {
               # TEMP
                echo('NG');
            } else {
                $this->load->helper('form');

                $this->load->view('research/create');
            }
        }

        public function do_create() {
            # load
            $this->load->library('user');
            $this->load->library('researches');

            $user_id = $this->user->get_current_user_info()['id'];
            $name = $this->input->post('name');
            $reword = $this->input->post('reword');
#            $max = $this->input->post('max');
            
            $this->researches->create_research(array(
                'create_user_id'     => $user_id,
                'name'   => $name,
                'reword' => $reword,
 #               'max'    => $max
            ));
        }

        public function execute($research_id) {

            $this->load->library('researches');
            $user_id = $this->session->userdata('user_id');
            $this->researches->pay_reword($user_id, $research_id);

        }

    }
