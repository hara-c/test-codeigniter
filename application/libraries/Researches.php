<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Researches {

    public function get_show_lists ($user){
        $CI =& get_instance();
        $CI->load->model('researches_model');
        $show_lists = array();
        if (!strcmp($user['type'], 'ADMIN')) {

            $lists = $CI->researches_model->get_list();
            foreach($lists as $l) {
                $name = $l->name;
                # TEMP
                $show_lists['client'][] = array('name' => $name, 'is_done' => $l->is_done == FALSE ? 'DONE' : 'NOT');
                $show_lists['monitor'][] = array('name' => $name, 'create_user_id' => $l->create_user_id);
            }

        } elseif( !strcmp($user['type'], 'CLIENT') ) {

            $lists = $CI->researches_model->get_list($user['id']);
            foreach($lists as $l) {
                $show_lists[] = array('name' => $l->name, 'is_done' => $l->is_done ? 'DONE' : 'NOT');
            }

        } elseif( !strcmp($user['type'], 'MONITOR') ) {

            $lists = $CI->researches_model->get_list();
            foreach($lists as $l) {
                $show_lists[] = array('name' => $l->name, 'create_user_id' => $l->create_user_id);
            }

        } else {
            #TODO
        }
        return $show_lists;
    }
}

