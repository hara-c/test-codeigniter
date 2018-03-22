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
    )
);
