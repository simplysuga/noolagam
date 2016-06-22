<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{ 
		$query = $this->db->query('select book_id,book_title,book_author,book_language,book_available_status from tb_books');
		$result['data'] = $query->result();

		$this->load->view('Home',$result);
	}

	public function login()
	{

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('passwords', 'Password', 'required',
        	array('required' => 'You must provide a %s.'));

    	if ($this->form_validation->run() == FALSE)
        {
        	$this->load->view('login');
        }
        else{
        	if($_POST['username']=='admin' && $_POST['passwords']=='admin'){
        		$this->session->set_userdata('username','admin');
        		$url = base_url('admin');
        		header("Location:".$url);
        	}

        }

	}


}
