<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Researches {

    public function get_show_lists ($user_id){
        $CI =& get_instance();
        $CI->load->model('researches_model');
        $CI->load->library('user');
        $user_type = $CI->user->get_user_type();
        if (!strcmp($user_type, 'ADMIN')) {
            # TODO
        } elseif( !strcmp($user_type, 'CLIENT') ) {
            return $CI->researches_model->get_listsa($user_id);
        } elseif( !strcmp($user_type, 'MONITOR') ) {
            # TODO
        } else {
            #TODO
        }
    }
}

