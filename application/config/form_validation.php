<?php
$config = array(
    'login' => array(
        array(
            'field' => 'id',
            'label' => 'ID',
            'rules' => 'trim|required|alpha_dash|xss_clean'
        ),
        array(
            'field' => 'password',
            'label' => 'PASSWORD',
            'rules' => 'trim|required|alpha_dash|xss_clean'
        )
    ),
    'research' => array(
        array(
            'field' => 'name',
            'label' => 'RESEARCH NAME',
            'rules' => 'trim|required|max_length[30]|min_length[3]|xss_clean'
        ),
        array(
            'field' => 'reword',
            'label' => 'RESEARCH NAME',
            'rules' => 'trim|required|is_natural|max_length[5]|min_length[2]|xss_clean'
        ),
    ),
);
