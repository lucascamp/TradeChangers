<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    private $data = [];

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Settings_model', 'settings');
        echo $this->settings->getValue('smtp-host');
    }

    public function setTitle($title)
    {
        $this->data['title'] = $title;
    }

    public function setCss($css)
    {
        $this->data['css'] = $css;
    }

    public function setScript($script)
    {
        $this->data['script'] = $script;
    }

    public function setPage($page, $model)
    {
        $this->data['page'] = $this->load->view($page, $model, true);
    }

    public function setLayout($layout)
    {
        $this->load->view($layout, $this->data);
    }

    public function sendMail($email, $assunto, $conteudo)
    {
        $config['protocol']  = 'smtp';
        $config['smtp_host'] = 'smtp.tradechangers.com.br';
        $config['smtp_port'] = 587;
        $config['smtp_user'] = 'naoresponda@tradechangers.com.br';
        $config['smtp_pass'] = 'nao@2017';
        $config['mailtype']  = 'html';
        $config['charset']   = 'utf-8';
        $config['wordwrap']  = true;
        $config['newline']   = "\r\n";

        $this->email->initialize($config);

        $this->email->from('naoresponda@tradechangers.com.br', 'Trade Changers');
        $this->email->to($email);
        $this->email->subject($assunto);
        $this->email->message($conteudo);

        if ($this->email->send()) {
            return array('type' => 1, 'value' => 'A mensagem foi enviada com sucesso.');
        } else {
            return array('type' => 2, 'value' => 'Não foi possível enviar a mensagem.');
        }
    }

    public function upload($path, $nameImagem)
    {
        $config['upload_path']   = $path;
        $config['allowed_types'] = '*';
        $config['encrypt_name']  = true;
        $config['max_size']      = 0;
        $config['max_width']     = 0;
        $config['max_height']    = 0;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload($nameImagem)) {
            return $this->upload->data('file_name');
        } else {
            return null;
        }
    }

}
