<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poland extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Study Abroad in Poland';
		$this->load->view('poland', $data);
	}

	
}
