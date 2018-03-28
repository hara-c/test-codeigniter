<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Researches {

    protected $CI;

    public function __construct(){
        $this->CI =& get_instance();
    }

    public function get_show_lists ($user){

        # load
        $this->CI->load->model('researches_model');
        $this->CI->load->model('rewords_model');

        $show_lists = array();

        if( !strcmp($user['type'], 'ADMIN') || !strcmp($user['type'], 'CLIENT') ) {

            $count = $this->_get_count();
            $research_lists = $this->CI->researches_model->get_list(!strcmp($user['type'], 'ADMIN') ? NULL : $user['id']);
            $lists = array();
            foreach($research_lists as $l) {
                $id = $l->id;
                $lists[] = array(
                    'id'           => $l->id,
                    'name'         => $l->name,
                    'is_done'      => isset($count[$id]) ? $count[$id] : '0',
                    'reword'       => $l->reword,
                    'created_date' => $l->created_date,
                );
            }

            if (!strcmp($user['type'], 'ADMIN')){
                $show_lists['client'] = $lists;
            } else {
                return $lists;
            }
        }

        if( !strcmp($user['type'], 'ADMIN') || !strcmp($user['type'], 'MONITOR') ) {

            $research_lists = $this->CI->researches_model->get_list();
            $paied_research_lists = $this->CI->rewords_model->get_paied_research($user['id']);
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

    public function get_research_by_id($id) {
        $this->CI->load->model('researches_model');
        $research = $this->CI->researches_model->get_research($id);
        return $research[0];
    }

    public function create_research($research) {
        $this->CI->load->model('researches_model');
        $this->CI->researches_model->insert_research($research);
    }

    public function update_research($id, $research) {
        $this->CI->load->model('researches_model');
        $this->CI->researches_model->update_research($id, $research);
    }

    public function pay_reword($user_id, $research_id) {
        $this->CI->load->model('rewords_model');
        $this->CI->rewords_model->insert_reword($user_id, $research_id);
    }

    private function _get_count() {
        $this->CI->load->model('rewords_model');
        $counts = $this->CI->rewords_model->get_count_by_research_id();
        return $counts;
    }

}

