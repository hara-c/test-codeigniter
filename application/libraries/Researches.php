<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Researches {

    public function get_show_lists ($type, $user_id){
        $CI =& get_instance();
        $CI->load->model('researches_model');
        # TODO if ($type eq ',,,) and adjust to show 
        return $CI->researches_model->get_listsa($user_id);
    }
}

