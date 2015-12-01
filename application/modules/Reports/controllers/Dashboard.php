<?php
/*
#   Dashboard Controller
#
#   @func
#       Index
#   @desc
#       Index view for the Dashboard Controller
#   @params
#        Null
#
*/
class Dashboard extends MX_Controller {
    function __construct() {
        parent::__construct();
    }
    
    function Index() {
        $this->load->view("Index");
    }
}