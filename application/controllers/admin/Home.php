<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{ 
		$query = $this->db->query('select book_id,book_title,book_author,book_language,book_owner_id,book_owner_name,book_available_status from tb_books');
		$result['data'] = $query->result();
		$this->load->view('admin/Home',$result);
	}
	
	public function addbook()
	{

	$this->load->library('form_validation');

        $this->form_validation->set_rules('book_title', 'Book Title', 'required');
        $this->form_validation->set_rules('book_author', 'Book Author', 'required',
                array('required' => 'You must provide a %s.') );
        $this->form_validation->set_rules('book_owner_id', 'Book Owner id', 'required');
        $this->form_validation->set_rules('book_owner_name', 'Book Owner name', 'required');
        $this->form_validation->set_rules('book_language', 'Book Language', 'required');

        if ($this->form_validation->run() == FALSE)
        {	
        		$data['book_title'] = $this->input->post('book_title');
        		$data['book_author'] = $this->input->post('book_author');
        		$data['book_owner_id'] = $this->input->post('book_owner_id');
        		$data['book_owner_name'] = $this->input->post('book_owner_name');
        		$data['book_language'] = $this->input->post('book_language');
                $this->load->view('admin/Addbook',$data);
        }
        else{        	
	        $irsdata = array (
				'book_title' => $this->input->post('book_title'),
				'book_author' 	 => $this->input->post('book_author'),
				'book_owner_id'	 => $this->input->post('book_owner_id'),
				'book_owner_name' => $this->input->post('book_owner_name'),
				'book_language' => $this->input->post('book_language'),
				'book_available_status' => "Yes"
			);
			 //print_r($irsdata);
			$this->db->insert('tb_books',$irsdata);
			$this->load->view('admin/Addbook');
        }
	}
	
	public function deletebook()
	{
		$this->db->delete('tb_books',array('book_id'=>$this->uri->segment(4)));
		$url = base_url('admin/Home');
		header("Location:".$url);
	}

	public function issuebk()
	{
		# code...

        $data['tran_book_id'] = $this->uri->segment(4);
		$query = $this->db->query("select book_title from tb_books where book_id='".$this->uri->segment(4) ."'");
		$data['books'] =  $query->result();

		$this->load->library('form_validation');

        $this->form_validation->set_rules('tran_borrower_id', 'Borrower ID', 'required');
        $this->form_validation->set_rules('tran_borrower_name', 'Borrower Name', 'required',
                array('required' => 'You must provide a %s.')
        );
        $this->form_validation->set_rules('tran_issued_date', 'Book Issued date', 'required');
        if($this->form_validation->run()==FALSE){
        	$data['tran_borrower_id'] = $this->input->post('tran_borrower_id');
        	$data['tran_borrower_name'] = $this->input->post('tran_borrower_name');
        	$this->load->view('admin/Issuebook',$data);
        }
        else{
        	$irstran = array (
        			'tran_book_id' => $this->input->post('hidden_book_id'),
        			'tran_book_title' => $this->input->post('hidden_book_title'),
        			'tran_borrower_id' => $this->input->post('tran_borrower_id'),
        			'tran_borrower_name' => $this->input->post('tran_borrower_name'),
        			'tran_issued_date' => $this->input->post('tran_issued_date')
        		);

        	$insert_id = $this->db->insert('tb_transactions',$irstran);

        	$this->db->set('book_available_status',"No");
        	$this->db->where('book_id',$this->uri->segment(4));
        	$this->db->update('tb_books');

        	$url= base_url('admin/home');
        	header('Location:'.$url);
        }

	}
	
	public function returnbk()
	{
	
		$data['tran_book_id'] = $this->uri->segment(4);

		$query = $this->db->query("select tran_id,tran_book_title,tran_borrower_id,tran_borrower_name,tran_issued_date from tb_transactions where tran_book_id='".$this->uri->segment(4) ."' and tran_returned_date IS NULL");
		$data['books'] =  $query->result();

 		$this->load->library('form_validation');

        $this->form_validation->set_rules('tran_returned_date', 'Book Returned Date', 'required');
        if($this->form_validation->run()==FALSE){
        	$this->load->view('admin/Returnbook',$data);
        }
        else{
		$this->db->set('tran_returned_date',$this->input->post('tran_returned_date'));
        	$this->db->where('tran_id',$this->input->post('hidden_tran_id'));
        	$this->db->update('tb_transactions');

		$this->db->set('book_available_status',"Yes");
        	$this->db->where('book_id',$this->input->post('hidden_book_id'));
        	$this->db->update('tb_books');

                $url= base_url('admin/home');
        	header('Location:'.$url);
        }
        	
	}

	public function transactions()
	{ 
		$query = $this->db->query('select tran_id,tran_book_id,tran_book_title,tran_borrower_id,tran_borrower_name,tran_issued_date,tran_returned_date from tb_transactions');
		$result['data'] = $query->result();
		$this->load->view('admin/Transactions',$result);
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		$url = base_url();
		header("Location:".$url);
	}


}
