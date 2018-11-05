<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();
       $this->load->helper('form');
    }
    public function index() {
        verifica_login();
        $data['titulo'] = 'Dashboard';
        $this->load->view('painel/dashboard/dashboard', $data);
    }

}
