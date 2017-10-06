<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conteudo extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Leads_model', 'leads');
    }

	public function juros()
	{
		$this->load->view('conteudo/juros');
	}

	public function investirfgts()
	{
		$this->load->view('conteudo/investirfgts');
	}

	public function futuroprevidencia()
	{
		$this->load->view('conteudo/futuroprevidencia');
	}

	public function bolsavalores()
	{
		$this->load->view('conteudo/bolsa');
	}

	public function percaomedo()
	{
		$this->load->view('conteudo/perderdinheiro');
	}
}


