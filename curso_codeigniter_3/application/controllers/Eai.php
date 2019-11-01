<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eai extends CI_Controller {

	public function index()
	{
        $dados['mensagem']='Eae';
        $this->load->view('Eai',$dados);
    }
    
    public function teste()
    {
        $dados['mensagem']='teste';
        $this->load->view('Eai',$dados);
    }
    public function testedb()
    {
        $dados['mensagem'] = $this->db->get('postagens')->result();
        echo "<pre>";
        print_r($dados);
    }
}
