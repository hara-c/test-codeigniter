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
            $this->_set_user_type($CI, $user->user_type_id);
            return 1;
        } else {
            return 0;
        }
    }

    public function get_user_type() {
        $CI =& get_instance();
        $id = $CI->session->userdata('user_type_id');
        return self::USER_TYPE[$id];
    }

    private function _set_user_type($CI, $type) {
        #set session
        $CI->session->set_userdata('user_type_id', $type);
    }

}
/* End of file User.php */
