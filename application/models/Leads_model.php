<?php

class Leads_model extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->setTable('tb_leads');
    }

}