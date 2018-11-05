<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('set_msg')) {
    function set_msg($msg = NULL) {
        $ci = & get_instance();
        $ci->session->set_userdata('aviso', $msg); 
    }
}
if (!function_exists('verifica_login')) {
    function verifica_login($redirect = 'login') {
        $ci = & get_instance();
        if($ci->session->userdata('logged') != TRUE){
            echo 'Acesso restrito, faça login para continuar';
            redirect($redirect, 'refresh');
        } 
    }
}
if (!function_exists('config_upload')) {
    function config_upload($path= './uploads', $types='jpg|png', $size=512) {
        $config['upload_path'] = $path;
        $config['allowed_types'] = $types;
        $config['max_size'] = $size;
        return $config;
    }
}