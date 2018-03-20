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

            $this->load->helper('form');

            $name_form = array(
                'name'      => 'name',
                'id'        => 'name',
                'maxlength' => '30',
                'size'      => '30',
            );
            $reword_form = array(
                'name'      => 'reword',
                'id'        => 'reword',
                'maxlength' => '30',
                'size'      => '30',
                );
            $max_form = array(
                'name'      => 'max',
                'id'        => 'max',
                'maxlength' => '2',
                'size'      => '5',
                );

            $data = array(
                'name_form'   => $name_form,
                'reword_form' => $reword_form,
                'max_form'    => $max_form,
            );


            # TODO: CHECK SESSION
#            $this->load->view('header', $data);
            $this->load->view('research/create', $data);
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
    }
