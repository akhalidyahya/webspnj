<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main__ extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->model('m_main');
		if ($this->session->userdata('udhmasuk')==false) {
			redirect('login');
		}        
	}

	public function index()
	{
		if($this->session->userdata('role') == 'admin') {
			$data['title'] = 'Sahabat PNJ';
			$data['galleries'] = $this->m_main->read_galleries();
			$data['karya'] = $this->m_main->read_karya();
			$data['media'] = $this->m_main->read_media();
			$data['news'] = $this->m_main->read_news();
			$data['grafik'] = $this->m_main->grafik_news();
			$data['sidebar'] = $this->load->view('main__/layout/admin/sidebar','',true);
			$data['content'] = $this->load->view('main__/pages/dashboard','',true);
			$this->load->view('main__/pages/home',array('template'=>$data));
		} else if ($this->session->userdata('role') == 'superadmin') {
			$data['title'] = 'Sahabat PNJ';
			$data['galleries'] = $this->m_main->read_galleries();
			$data['karya'] = $this->m_main->read_karya();
			$data['media'] = $this->m_main->read_media();
			$data['news'] = $this->m_main->read_news();
			$data['grafik'] = $this->m_main->grafik_news();
			$data['sidebar'] = $this->load->view('main__/layout/sadmin/sidebar','',true);
			$data['content'] = $this->load->view('main__/pages/dashboard',array('template'=>$data),true);
			$this->load->view('main__/pages/home',array('template'=>$data));
		}
    }
}
