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

function print_user_detail(){
    $ci =& get_instance();
    $ci->load->model('user_m');
    $data_user = $ci->user_m->get($ci->session->userdata('userid'))->row();
    $user_name = $ci->session->userdata('nama');
    $user = $ci->user_m->get_detail($user_name);
    return $user->row();
}