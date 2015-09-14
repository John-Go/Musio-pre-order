<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subscriber_model extends CI_Model {

    var $table = 'subscriber';
    var $id = '';
    var $email = '';
    var $remote_addr = '';
    var $http_user_agent = '';
    var $http_accept_language = '';
    var $date = '';

    function __construct()
    {        
        parent::__construct();
    }

    function get()
    {   
        return $this->db->get($this->table);
    }

    function find($params)
    {        
        return $this->db->get_where($this->table, $params, 1);
    }   

    function add($params)
    {
        return $this->db->insert($this->table, $params);
    }    
}
?>