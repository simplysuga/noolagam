<?php

abstract class MY_Controller extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        // TODO: check if admin, else redirect to login
        if($this->session->userdata['username']!='admin'){
			$url = base_url('login');
        	header("Location:".$url);
        }
       
    }

}