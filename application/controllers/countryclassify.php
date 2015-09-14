<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CountryClassify extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function start_log()
	{		
		log_message('error',current_url());
	}
	
	function country()
	{
        $ip = $_SERVER['REMOTE_ADDR'];
        //$ip = '202.112.255.255'; // cn
        // $ip = '182.225.201.6'; // kr        

        // if($ip == '182.225.201.6')
        // {
        //     $ip = '74.125.45.100'; // us
        //     log_message('error','[DEBUG] John House => TEST');
        // }

        // $ip = '74.125.45.100'; // us        

        $getIp = $this->db->query('SELECT country FROM ip2nation WHERE ip < INET_ATON("'.$ip.'") ORDER BY ip DESC LIMIT 0,1');

		if($getIp->num_rows() > 0)
		{
			$result = $getIp->row();	
			$country = $result->country;
		}
		else // DB에 없는 IP 라면 무조건 미국에서 접속한것으로 간주하고 Paypal로 결제를 연동한다.
		{
			// $country = 'en';
            $country = 'kr';
		}		
		return $country;
	}

    public function set_language()
    {
        $language = $this->input->get_post('language');
        $this->session->set_userdata('language', $language);
        $json['staatus'] = true;
        $this->output->set_content_type('application/json')->set_output(json_encode($json));
    }

	public function setLanguage()
    {   
        $language = $this->session->userdata('language');
        log_message('error','Session Language => '.$language);

        if(empty($language))
        {            
            log_message('error','Not Session Language');
            $localCountry = $this->country();
            log_message('error','Not Session Language => '.$localCountry);

            switch ($localCountry) {
                case 'kr':
                    $language = 'kr';
                    break;

                case 'jp':
                    $language = 'jp';
                    break;               

                case 'cn':
                    $language = 'cn';
                    break;               
                
                default:
                    $language = 'en';
                    break;
            }
            $this->session->set_userdata('language', $language);
        }

        if(isset($this->lang->is_loaded))
        {
            for($i = 0; $i <= sizeof($this->lang->is_loaded); $i ++)
            {
                unset($this->lang->is_loaded[$i]);
            }
        }

        $this->lang->load('contents',$language);
    }
}