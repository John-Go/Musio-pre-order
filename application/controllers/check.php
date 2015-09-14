<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Check extends CI_Controller {	
	
	function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function start_log(){		
		log_message('error',current_url());
	}   

    function index()
    {
     	$this->start_log();
		$this->load->view('check');
    }
}