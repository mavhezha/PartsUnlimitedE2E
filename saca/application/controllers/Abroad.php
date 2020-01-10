<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Abroad extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Study Abroad';
		$this->load->view('abroad', $data);
	}

	
}
