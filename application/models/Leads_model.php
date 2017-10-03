<?php

class Leads_model extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->setTable('tbl_lead');
    }

}
