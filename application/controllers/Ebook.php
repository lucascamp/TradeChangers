<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ebook extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Leads_model', 'leads');
    }

	public function index()
	{
		$this->load->view('ebook_index');
	}
}


