<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop extends CI_Controller {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();        
    }

    function start_log(){		
		log_message('error',current_url());
	}   
	
	public function index()
	{
		$this->start_log();
		$js['page'] = 'shop';

		$this->load->view('head');
		$this->load->view('/shop/shop_index');
		$this->load->view('footer');
		$this->load->view('/jquery/js',$js);
	}
}

