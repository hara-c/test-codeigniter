<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Researches {

    public function get_show_lists (){
        $CI =& get_instance();
        $CI->load->model('researches_model');
        $CI->load->library('user');
        $user = $CI->user->get_user_info();
        if (!strcmp($user['type'], 'ADMIN')) {
            # TODO
        } elseif( !strcmp($user['type'], 'CLIENT') ) {
            return $CI->researches_model->get_listsa($user['id']);
        } elseif( !strcmp($user['type'], 'MONITOR') ) {
            # TODO
        } else {
            #TODO
        }
    }
}

