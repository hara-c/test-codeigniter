<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class User {

    const USER_TYPE = array(
        '1' => 'ADMIN',
        '2' => 'CLIENT',
        '3' => 'MONITOR'
    );



    public function is_valid_and_set_session ($id, $pass){
        $CI =& get_instance();
        $CI->load->model('Users_model');
        $user = $CI->Users_model->is_exist($id, $pass);
        if ($user) {
            $this->_set_user_session($CI, $user->user_type_id, $user->id);
            return 1;
        } else {
            return 0;
        }
    }

    public function get_user_info() {
        $CI =& get_instance();
        $id = $CI->session->userdata('user_id');
        $type_id = $CI->session->userdata('user_type_id');
        return array('id' => $id, 'type' => self::USER_TYPE[$type_id]);
    }

    private function _set_user_session($CI, $type, $id) {
        #set session
        $CI->session->set_userdata('user_type_id', $type);
        $CI->session->set_userdata('user_id', $id);
    }

}
/* End of file User.php */
