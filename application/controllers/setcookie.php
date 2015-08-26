<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setcookie extends CI_Controller {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();        
    }

    function start_log(){		
		log_message('error',current_url());
	}   
	
	public function set()
	{
		$this->start_log();

		$params = $this->input->post();
		log_message('error','Params => '.print_r($params,true));
		log_message('error','Params is array => '.is_array($params));		

		$json['status'] = false;
		
		if(is_array($params)) {
			foreach ($params as $key => $value) {
				set_cookie('_shop_'.$key,$value,'86500');
			}
			$json['status'] = true;
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	}
}

