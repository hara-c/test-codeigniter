<?php
    class Login extends CI_Controller {
        public function index(){

            $this->load->helper('form');

                $id_form = array(
                    'name'      => 'id',
                    'id'        => 'id',
                    'maxlength' => '30',
                    'size'      => '30',
                );
                $pass_form = array(
                    'name'      => 'password',
                    'id'        => 'password',
                    'maxlength' => '30',
                    'size'      => '30',
                );
                $data = array(
                    'id_form' => $id_form,
                    'pass_form' => $pass_form
                );

                $this->load->view('login',$data);
        }

        public function do_login(){
            $id = $this->input->post('id');
            $pass = $this->input->post('password');

            $this->load->library('user');
            if( $this->user->is_valid($id, $pass) ) {
                # do login
                $this->load->helper('url');
                redirect('research/lists', 'location');
            } else {
                # TODO: go login with error_msg
                echo 'NG';
            }
        }


    }
?>
