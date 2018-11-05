<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->model('login_model', 'login');
    }

    public function index() {
        $usuario = $this->input->post('username');
        $senha = $this->input->post('password');
        $autentica = $this->login->autenticar($usuario, $senha);
        
        if($autentica){
            $this->session->set_userdata('logged', true);
            $dados = array("mensagem" => "logado com sucesso");
            redirect('dashboard','refresh');
            
        }  else {
            $dados = array("mensagem" => "não foi possivel logar");
        }

        $this->load->view('painel/login/login');
    }

    public function logoff() {
        $this->session->sess_destroy();
        redirect('login');
    }
    

}
