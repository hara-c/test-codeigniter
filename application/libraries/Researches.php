<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Researches {

    public function get_show_lists ($user){

        # load
        $CI =& get_instance();
        $CI->load->model('researches_model');

        $show_lists = array();

        if (!strcmp($user['type'], 'ADMIN')) {

            $lists = $CI->researches_model->get_list();
            foreach($lists as $l) {
                $name = $l->name;

                $show_lists['client'][] = array(
                    'name'         => $name,
                    'is_done'      => $l->is_done ? 'DONE' : 'NOT',
                    'reword'       => $l->reword,
                    'created_date' => $l->created_date
                );

                $show_lists['monitor'][] = array('name' => $name, 'create_user_id' => $l->create_user_id);
            }

        } elseif( !strcmp($user['type'], 'CLIENT') ) {

            $lists = $CI->researches_model->get_list($user['id']);
            foreach($lists as $l) {
                $show_lists[] = array(
                    'name'         => $l->name,
                    'is_done'      => '5', #TEMP
                    'reword'       => $l->reword,
                    'created_date' => $l->created_date
                );
            }

        } elseif( !strcmp($user['type'], 'MONITOR') ) {

            $lists = $CI->researches_model->get_list();
            foreach($lists as $l) {
                $show_lists[] = array(
                    'name'           => $l->name,
                    'create_user_id' => $l->create_user_id,
                    'reword'         => $l->reword,
                    'is_done'        => 'DONE',
                );
            }

        } else {
            #TODO
        }
        return $show_lists;
    }

    public function create_research($research) {

        $CI =& get_instance();
        $CI->load->model('researches_model');
        $CI->researches_model->insert_research($research);
    }

    public function get_research_status() {
        }

}

