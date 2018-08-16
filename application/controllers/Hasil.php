<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->model('m_main');      
	}

	public function index()
	{
		$data['title'] = 'Sahabat PNJ';
        $data['karya'] = $this->m_main->read_karya()->result();
        $this->load->view('main/pages/allkarya',array('template'=>$data));
    }

    public function detail($id)
    {
        $data = array(
            'title' => 'Sahabat PNJ',
            'berita' => $this->m_main->getKarya($id)->result(),
        );
        $this->load->view('main/pages/singlekarya',array('template'=>$data));
    }
}
