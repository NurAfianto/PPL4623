<?php

function check_admin(){
    $ci =& get_instance();
    $user_level = $ci->session->userdata('level');
    if($user_level==1){
        redirect('admin/home');
    }
}

function check_user(){
    $ci =& get_instance();
    $user_level = $ci->session->userdata('level');
    if($user_level==2){
        redirect('user/dashboard');
    }
}

function check_not_login(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('userid');
    if(!$user_session){
        redirect('auth/login');
    }
}