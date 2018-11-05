<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('postagens_model', 'postagens');
    }

    public function index() {
        $dados['titulo'] = 'titulo';
        $this->load->view('index', $dados);
    }

    public function blog() {
        if ($postagem = $this->postagens->get_single(54)) {
            $dados['id'] = $postagem->id;
            $dados['titulo'] = $postagem->titulo;
            $dados['texto'] = $postagem->texto;
            $dados['imagem'] = $postagem->imagem;
//  $dados['imagem'] = $postagem->imagem;
        } else {
            $dados['id'] = 'Página não encontrada';
            $dados['titulo'] = 'Página não encontrada';
            $dados['texto'] = '<p>Nenhuma postagem noi encontrada com base nos parâmetros fornecidos!!</p>';
            $dados['imagem'] = '';
        }
        $dados['postagens'] = $this->postagens->get();
        $dados['h2'] = 'Blog';
        $this->load->view('blog', $dados);
    }

    public function mostrar() {
        $id = $this->uri->segment(3);
        $postagens = $this->postagens->get_single($id);

        $dados['id'] = $postagens->id;
        $dados['titulo'] = $postagens->titulo;
        $dados['texto'] = $postagens->texto;
        $dados['imagem'] = $postagens->imagem;
        $dados['texto_destaque'] = $postagens->texto_destaque;

        $this->load->view('blog_post', $dados);
    }

    public function enviarEmail() {
        $this->load->library('email');
        $dados = $this->input->post();
        $config['protocol'] = 'mail'; // define o protocolo utilizado
        $config['wordwrap'] = TRUE; // define se haverá quebra de palavra no texto
        $config['validate'] = TRUE; // define se haverá validação dos endereços de email
        $config['mailtype'] = 'text';

        $this->email->initialize($config);
        $this->email->from('calebbuffleben@gmail.com', 'Remetente');
        $this->email->to($dados['email'], $dados['nome']);
        $this->email->subject($dados['subject']);
        $this->email->message($dados['mensagem']);
        if ($this->email->send()) {
            $this->session->set_flashdata('success', 'Email enviado com sucesso!');
            $this->load->view('home');
        } else {
            $this->session->set_flashdata('error', $this->email->print_debugger());
            $this->load->view('home');
        }
    }

}
