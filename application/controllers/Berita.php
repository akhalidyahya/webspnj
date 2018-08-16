<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->model('m_main');      
	}

	public function index()
	{
		$data['title'] = 'Sahabat PNJ';
        $data['berita'] = $this->m_main->read_news()->result();
        $this->load->view('main/pages/allnews',array('template'=>$data));
    }

    public function detail($id)
    {
        $data = array(
            'title' => 'Sahabat PNJ',
            'berita' => $this->m_main->getNews($id)->result(),
        );
        $this->load->view('main/pages/singlenews',array('template'=>$data));
    }
}
