<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sendmail extends CI_Controller {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('/subscriber_model');
        $this->load->library('email');
    }

    function start_log(){		
		log_message('error',current_url());
	}

	function sendEmail($to, $subject, $message)
    {
        // $this->email->from('musio@akaintelligence.com', 'Musio');
        $this->email->from('aa@akaon.com', 'Musio');
        $this->email->to($to);
        $this->email->set_mailtype("html");
        //$this->email->bcc('musio@akaintelligence.com');

        $this->email->subject($subject);
        $this->email->message($message);
        log_message('error','DEBUG => '.print_r($this->email->print_debugger(),true));
        return $this->email->send();
    }

	function mailMassage($email)
	{
		// 제목
		$subject = 'Welcome to Musio!';

		// 메세지
		$message = '
			<div style="width: 100%; margin: 0 auto; text-align: center;">
				<img src="http://akaintelligence.com/musio/images/email_1.jpg">
				<h1 style="font-size: 42px; padding-top: 20px;">Welcome!</h1>
				<p style="font-size: 22px; width: 400px; margin: 0 auto; padding-top:20px; padding-bottom: 15px;">You can now receive Musio\'s most up-to-date information. Stay tuned!</p>
				<a id="twitter" href="https://twitter.com/intent/follow?screen_name=musio_aka" style="display: block; padding: 10px 0 30px;"><img src="http://akaintelligence.com/musio/images/twitter_follow.jpg"></a>
				<img src="http://akaintelligence.com/musio/images/email_2.jpg">
			</div>
		';

		return $this->sendEmail($email,$subject,$message);
	}

	public function send()
	{	
		$this->start_log();
		$json["status"] = false;
		$json["message"] = "";

		$email = $this->input->get_post('email');		
		$params['email'] = $email;

		$select = $this->subscriber_model->find($params);
		
		if ($select->num_rows() > 0) 
		{
		    $json["message"] = "Your email is already registered.";			    
		} 
		else 
		{
			$remote_addr = $_SERVER['REMOTE_ADDR'];
			log_message('error','getIP => '.$remote_addr);

			$params['remote_addr'] = $remote_addr;
			$params['http_user_agent'] = $_SERVER['HTTP_USER_AGENT'];
			$params['http_accept_language'] = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

			if ($this->subscriber_model->add($params)) 
			{
				if ($this->mailMassage($email)) 
				{
					$json["status"] = true;
				    $json["message"] = "Thank you. Your email has been submitted successfully.";
				}
				else 
				{
				    $json["message"] = 'Mail send failed';
				}
			} 
			else 
			{
				$json["message"] = 'Insert failed';				    
			}
		}

		$this->output->set_content_type('application/json')->set_output(json_encode($json));
	}
}