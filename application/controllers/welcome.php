<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{		
		require_once 'mobile_detect.php';
		$detect = new Mobile_Detect;
		$detect->setUserAgent($_SERVER['HTTP_USER_AGENT']);

		$is_mobile = $detect->isMobile();
		$is_tablet = $detect->isTablet();
		$is_web = true;

		if ($is_mobile || $is_tablet) {
		  $is_web = false;
		}

		log_message('error','is mobile => '.$is_mobile);
		log_message('error','is tablet => '.$is_tablet);
		log_message('error','is web => '.$is_web);

		$js['is_web'] = $is_web;
		$js['page'] = 'index';

		$this->load->view('head');
		$this->load->view('index');
		$this->load->view('footer');
		$this->load->view('/jquery/js',$js);

	}
}