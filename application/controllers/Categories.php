<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

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
            $data['categories'] = $this->m_main->read_categories();
			$data['sidebar'] = $this->load->view('main__/layout/admin/sidebar','',true);
			$data['content'] = $this->load->view('main__/pages/categories',array('template'=>$data),true);
			$this->load->view('main__/pages/home',array('template'=>$data));
		} else if ($this->session->userdata('role') == 'superadmin') {
            $data['title'] = 'Sahabat PNJ';
            $data['categories'] = $this->m_main->read_categories();
			$data['sidebar'] = $this->load->view('main__/layout/sadmin/sidebar','',true);
			$data['content'] = $this->load->view('main__/pages/categories',array('template'=>$data),true);
			$this->load->view('main__/pages/home',array('template'=>$data));
		}
    }

    //categories
    function create_categories(){
        echo json_encode(array("id"=>$this->m_main->create_categories()));
    }
    function update_categories()
    {
        $id=$this->input->post("id");
        $value=$this->input->post("value");
        $modul=$this->input->post("modul");
        $this->m_main->update_categories($id,$value,$modul);
        echo"{}";
    }
    function delete_categories()
    {
        $id=$this->input->post("id");
        $this->m_main->delete_categories($id);
        echo "{}";
    }
}
