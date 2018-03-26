<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Researches {

    public function get_show_lists ($user){

        # load
        $CI =& get_instance();
        $CI->load->model('researches_model');
        $CI->load->model('rewords_model');

        $show_lists = array();

        if( !strcmp($user['type'], 'ADMIN') || !strcmp($user['type'], 'CLIENT') ) {

            $count = $this->_get_count();
            $research_lists = $CI->researches_model->get_list(!strcmp($user['type'], 'ADMIN') ? NULL : $user['id']);
            $lists = array();
            foreach($research_lists as $l) {
                $id = $l->id;
                $lists[] = array(
                    'name'         => $l->name,
                    'is_done'      => isset($count[$id]) ? $count[$id] : 'NONE',
                    'reword'       => $l->reword,
                    'created_date' => $l->created_date
                );
            }

            if (!strcmp($user['type'], 'ADMIN')){
                $show_lists['client'] = $lists;
            } else {
                return $lists;
            }
        }

        if( !strcmp($user['type'], 'ADMIN') || !strcmp($user['type'], 'MONITOR') ) {

            $research_lists = $CI->researches_model->get_list();
            $paied_research_lists = $CI->rewords_model->get_paied_research($user['id']);
            $lists = array();
            foreach($research_lists as $l) {
                $lists[] = array(
                    'id'             => $l->id,
                    'name'           => $l->name,
                    'create_user_id' => $l->create_user_id,
                    'reword'         => $l->reword,
                    'is_done'        => in_array($l->id, $paied_research_lists),
                );
            }

            if (!strcmp($user['type'], 'ADMIN')){
                $show_lists['monitor'] = $lists;
            } else {
                return $lists;
            }
        }



        return $show_lists;
        }

    public function create_research($research) {

        $CI =& get_instance();
        $CI->load->model('researches_model');
        $CI->researches_model->insert_research($research);
    }

    public function pay_reword($user_id, $research_id) {
        $CI =& get_instance();
        $CI->load->model('rewords_model');
        $CI->rewords_model->insert_reword($user_id, $research_id);
    }

    private function _get_count() {
        $CI =& get_instance();
        $CI->load->model('rewords_model');
        $counts = $CI->rewords_model->get_count_by_research_id();
        return $counts;
    }

}

