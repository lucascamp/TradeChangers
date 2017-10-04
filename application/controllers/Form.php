<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Leads_model', 'leads');
    }

	public function saveForm()
	{
		$data = $this->input->post();
		$data['ipv4'] = $_SERVER['REMOTE_ADDR'];
		$data['datetime_cadastro'] =  date("Y-m-d H:i:s");
		$data['tipo'] =  $this->leads->gerenciarTipo($data['email']);

		$this->db->insert('tbl_lead', $data); 
		$this->ebookMail($data['email'], $data['nome_completo']);

		echo json_encode(['type' => 1, 'value' => 'sucesso']);
	}

	public function ebookMail($email, $nome)
	{
		$layoutEmail = $this->load->view('email', [
			'nome'    => $nome,
			'email'   => $email,
			'assunto' => 'E-book TradeChangers',
			], true);
		$sendMail = $this->sendMail($email, 'E-book TradeChangers', $layoutEmail);
	}

	public function email()
	{
		$this->load->view('email');
	}

	public function sendMail($email, $assunto, $conteudo)
    {
        $config['protocol']  = 'smtp';
        $config['smtp_host'] = 'smtp.tradechangers.com.br';
        $config['smtp_port'] = 587;
        $config['smtp_user'] = 'contato@tradechangers.com.br';
        $config['smtp_pass'] = '123asd123';
        $config['mailtype']  = 'html';
        $config['charset']   = 'utf-8';
        $config['wordwrap']  = true;
        $config['newline']   = "\r\n";

        $this->email->initialize($config);

        $this->email->from('contato@tradechangers.com.br', 'Trade Changers');
        $this->email->to($email);
        $this->email->subject($assunto);
        $this->email->message($conteudo);
        $this->email->attach(getcwd().'/ebooks/Ebook - Trade Changers.pdf');

        if ($this->email->send()) {
            return array('type' => 1, 'value' => 'A mensagem foi enviada com sucesso.');
        } else {
            return array('type' => 2, 'value' => 'Não foi possível enviar a mensagem.');
        }
    }
}