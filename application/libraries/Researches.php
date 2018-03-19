<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Researches {

    public function get_show_lists ($user){
        $CI =& get_instance();
        $CI->load->model('researches_model');
        if (!strcmp($user['type'], 'ADMIN')) {
            # TODO
        } elseif( !strcmp($user['type'], 'CLIENT') ) {
            return $CI->researches_model->get_list_by_user_id($user['id']);
        } elseif( !strcmp($user['type'], 'MONITOR') ) {
            return $CI->researches_model->get_valid_list();
            # TODO
        } else {
            #TODO
        }
    }
}

