<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class China extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Study Abroad in China';
		$this->load->view('china', $data);
	}

	
}
