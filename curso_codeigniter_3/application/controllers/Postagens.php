<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postagens extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('categorias_model','modelcategorias');
        $this->categorias = $this->modelcategorias->listar_categorias();
    }

	public function index($id, $slug=null)
	{
        $dados['categorias'] = $this->categorias;
        $this->load->model('publicacoes_model','modelpublicacoes');
        $dados['postagem'] = $this->modelpublicacoes->publicacao($id);

        //Dados para o cabeçalho
        $dados['titulo'] = 'Publicação';
        $dados['subtitulo'] = '';
        $dados['subtitulodb'] = $this->modelpublicacoes->listar_titulo($id);

        $this->load->view('frontend/template/html-header', $dados);
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/publicacao/publicacao');
        $this->load->view('frontend/template/aside');
        $this->load->view('frontend/template/footer');
        $this->load->view('frontend/template/html-footer');
    }
    
}
