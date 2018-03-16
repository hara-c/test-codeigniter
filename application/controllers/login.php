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
    }
?>
