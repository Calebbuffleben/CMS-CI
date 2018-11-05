<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class postagens extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('funcoes');
        $this->load->library('form_validation');
        $this->load->model('postagens_model', 'postagens');
    }

    public function index() {
        redirect('postagens/listar', 'refresh');
    }

    public function listar() {
        verifica_login();
        $dados['titulo'] = 'Postagens';
        $dados['h2'] = 'Postagens';
        $dados['postagens'] = $this->postagens->get();
        $this->load->view('painel/postagens/postagens', $dados);
    }

    public function form_show() {
        verifica_login();
        $dados['titulo'] = 'Cadastro de postagens';
        $dados['h2'] = 'Cadastro de postagens';
        $this->load->view('painel/postagens/cadastrar', $dados);
    }

    public function data_submitted() {
        verifica_login();
        $this->load->library('upload', config_upload());
        if ($this->upload->do_upload('imagem')) {
            if ($this->input->post('titulo') != NULL) {
                $dados_upload = $this->upload->data();
                $data = array(
                    'titulo' => $this->input->post('titulo'),
                    'texto' => $this->input->post('texto'),
                    'texto_destaque' => $this->input->post('texto_destaque'),
                    'imagem' => $dados_upload['file_name']
                );
                $this->postagens->salvar($data);
            }
        } else {
            if ($this->input->post('titulo') != NULL) {
                $data = array(
                    'titulo' => $this->input->post('titulo'),
                    'texto' => $this->input->post('texto'),
                    'texto_destaque' => $this->input->post('texto_destaque')
                );
                $this->postagens->salvar($data);
            }
        }
        //var_dump($this->input->post('titulo'));
        redirect('postagens/listar', 'refresh');
    }

    public function mostrar() {
        verifica_login();
        $id = $this->uri->segment(3);
        $postagens = $this->postagens->get_single($id);

        $dados['id'] = $postagens->id;
        $dados['titulo'] = $postagens->titulo;
        $dados['texto'] = $postagens->texto;
        $dados['texto_destaque'] = $postagens->texto_destaque;

        $this->load->view('painel/postagens/alterar', $dados);
    }

    public function editar() {
        verifica_login();
        $id = $this->uri->segment(3);
        $postagem = $this->postagens->get_single($id);

        $this->load->library('upload', config_upload());
        $imagem_antiga = 'uploads/' . $postagem->imagem;
        if ($this->upload->do_upload('imagem')) {
            $dados_upload = $this->upload->data();
            $data = array(
                'titulo' => $this->input->post('titulo'),
                'texto' => $this->input->post('texto'),
                'texto_destaque' => $this->input->post('texto_destaque'),
                'imagem' => $dados_upload['file_name']
            );
            unlink($imagem_antiga);
            $this->postagens->atualizar($data);
        } else {
            $data = array(
                'id' => $this->input->post('id'),
                'titulo' => $this->input->post('titulo'),
                'texto' => $this->input->post('texto'),
                'texto_destaque' => $this->input->post('texto_destaque')
            );
            $this->postagens->atualizar($data);
        }

        redirect('postagens/listar', 'refresh');
    }

    public function excluir() {
        verifica_login();
        $id = $this->uri->segment(3);
        //   $imagem = 'uploads/' . $postagem->imagem;
        $this->postagens->excluir($id);
        redirect('postagens/listar', 'refresh');
        //       unlink($imagem);
    }

    public function post() {
        verifica_login();
        $id = $this->uri->segment(3);
        if ($id > 0) {
            if ($postagem = $this->postagens->get_single($id)) {
                $dados['id'] = $postagem->id;
                $dados['titulo'] = $postagem->titulo;
                $dados['texto'] = $postagem->texto;
                $dados['imagem'] = $postagem->imagem;
            } else {
                $dados['id'] = 'Página não encontrada';
                $dados['titulo'] = 'Página não encontrada';
                $dados['texto'] = '<p>Nenhuma postagem noi encontrada com base nos parâmetros fornecidos!!</p>';
                $dados['imagem'] = '';
            }
        } else {
            redirect(base_url(), 'refresh');
        }
        $this->load->view('painel/postagens/post', $dados);
    }

}
