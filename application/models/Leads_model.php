<?php

class Leads_model extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->setTable('tbl_lead');
    }

    public function gerenciarTipo($email)
    {
		$tipos = ["gmail", "yahoo", "msn", "hotmail", "outlook", "live", "bol", "ig", "oi", "pop", "zipmail"];
		preg_match("/\@(.*?)\./", $email, $dominio);
		return in_array($dominio[1], $tipos) ? "B2C" : "B2B";
	}
}
