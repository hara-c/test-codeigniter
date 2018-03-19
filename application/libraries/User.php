<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class User {

    public function is_valid ($id, $pass){
        $CI =& get_instance();
        $CI->load->model('Users_model');
        return $CI->Users_model->is_exist($id, $pass);
    }
}
/* End of file User.php */
