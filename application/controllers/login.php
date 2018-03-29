<?php
    class Login extends CI_Controller {
        public function index(){

            if($this->form_validation->run('login') == TRUE) {
                $id = $this->input->post('id');
                $pass = $this->input->post('password');

                # TODO :bug: set_value('password') is not working
                if( $this->user->is_valid_and_set_session($id, $pass) ) {
                    redirect('research', 'location');
                } else {
                    $this->load->view('login', array('login_error_msg'=>'Not Found User'))                     ;
                }
            } else {
                $this->load->view('login');
            }

        }
    }
