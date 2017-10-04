<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Leads_model', 'leads');
    }

	public function index()
	{
		// $query = $this->db->get('tb_leads');

		// foreach ($query->result() as $row)
		// {	
  //       echo $row->id;
		// }
		
		$this->load->view('index');
	}

	public function save()
	{
		echo "<pre>"; var_dump('123'); die();
		
		$this->load->view('index');
	}
}


