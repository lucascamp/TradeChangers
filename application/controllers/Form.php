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

		$this->db->insert('tbl_lead', $data); 

		echo json_encode(['type' => 1, 'value' => 'sucesso']);
	}
}

