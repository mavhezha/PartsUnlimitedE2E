<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Malaysia extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Study Abroad in Malaysia';
		$this->load->view('malaysia', $data);
	}

	
}
