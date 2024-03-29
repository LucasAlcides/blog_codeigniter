<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logado')){
            redirect(base_url('admin/login'));
        }
    }

	public function index()
	{
        //Dados para o cabeçalho
        $dados['titulo'] = 'Painel de Controle';
        $dados['subtitulo'] = 'Home';

        $this->load->view('backend/templates/html-header', $dados);
        $this->load->view('backend/templates/template');
        $this->load->view('backend/home/home');
        $this->load->view('backend/templates/html-footer');
    }
    
}
