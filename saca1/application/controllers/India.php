<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class India extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Study Abroad in India';
		$this->load->view('india', $data);
	}

	
}
