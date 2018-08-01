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

	public function index2()
	{
		$data['title'] = 'Sahabat PNJ';
		$this->load->view('main/pages/singlekarya',array('template'=>$data));
	}

	public function index3()
	{
		$data['title'] = 'Sahabat PNJ';
		$this->load->view('main/pages/singlenews',array('template'=>$data));
	}

	public function index4()
	{
		$data['title'] = 'Sahabat PNJ';
		$this->load->view('main/pages/allnews',array('template'=>$data));
	}

	public function index5()
	{
		$data['title'] = 'Sahabat PNJ';
		$this->load->view('main/pages/allkarya',array('template'=>$data));
	}
}
