<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Leads_model', 'leads');
    }

	public function leads()
	{	
		$query = $this->leads->get();

		$this->load->view('leads', ['query' => $query->result()]);
	}
}


