<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paytest extends CI_Controller {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();        
    }

    

	function index()
	{
		$this->start_log();
		$js['page'] = ;	

		$this->load->view('head');
		$this->load->view('index');
		$this->load->view('footer');
		$this->load->view('/jquery/js',$js);
	}	
}