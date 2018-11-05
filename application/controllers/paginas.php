<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class paginas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('postagens_model', 'postagens');
    }

    public function index() {
        $this->load->view('painel/paginas/paginas');
    }
    public function blog(){
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
    

}
