<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Sahabat PNJ';
		// $data['body'] = $this->load->view('main/pages/home');
		$this->load->view('main/pages/home',array('template'=>$data));
	}
}