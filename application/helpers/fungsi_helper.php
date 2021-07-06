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

function check_up_level(){
    $ci =& get_instance();
    $ci->load->model('user_m');
    $data_user = $ci->user_m->get($ci->session->userdata('userid'))->row();
    $user_name = $ci->session->userdata('nama');
    $user_email = $ci->session->userdata('email');
    $user = $ci->user_m->get_details($user_name, $user_email);
    $poin_earned = $user->row()->poin_earned;
    $user_level = $user->row()->level_user;
    $post['id_user'] = $user->row()->id_user;

    if($poin_earned >= 0 && $poin_earned <500 && $user_level != 'Bronze'){
        $post['level_user'] = 'Bronze';
    }else if($poin_earned >= 500 && $poin_earned <1000 && $user_level != 'Silver'){
        $post['level_user'] = 'Silver';
    }else if($poin_earned >= 1000 && $poin_earned <2000 && $user_level != 'Gold'){
        $post['level_user'] = 'Gold';
    }else if($poin_earned >= 2000 && $user_level != 'Platinum'){
        $post['level_user'] = 'Platinum';
    }

    $ci->user_m->update_level($post);
}