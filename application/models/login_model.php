<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class login_model extends CI_Model{
    public function autenticar($user, $password){
        $this->db->where('username', $user);
        $this->db->where('password', $password);
        
        $query = $this->db->get('users')->row_array();
        return $query;
    }
    public function logged(){
        $logged = $this->session->userdata('logged');
        if(!isset($logged) || $logged != true){
            echo 'Você não tem permissão para acessar essa página!!';
            die;
        }
    }
}