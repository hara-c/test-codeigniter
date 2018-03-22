<?php
    class Login extends CI_Controller {
        public function index(){

            $this->load->helper(array('form', 'url'));
            $this->load->library(array('form_validation', 'user'));


            if($this->form_validation->run('login') == TRUE) {
                echo "OK";
                $id = $this->input->post('id');
                $pass = $this->input->post('password');

                if( $this->user->is_valid_and_set_session($id, $pass) ) {
                    redirect('research', 'location');
                } else {
                    $this->load->view('login', array('login_error_msg'=>'Not Found User'))                     ;
                }
            } else {
                echo "NG";
                $this->load->view('login');
            }

        }

        public function do_login(){
            $id = $this->input->post('id');
            $pass = $this->input->post('password');

            $this->load->library('user');

            if( $this->user->is_valid_and_set_session($id, $pass) ) {
                # do login
                $this->load->helper('url');
                redirect('research', 'location');
            } else {
                # TODO: go login with error_msg
                echo 'NG';
            }
        }


    }
