<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karya extends CI_Controller 
{

	function __construct()
	{
        parent::__construct();
		$this->load->model('m_main');
        if ($this->session->userdata('udhmasuk')==false) 
        {
			redirect('login');
		}        
	}

	public function index()
	{
        if($this->session->userdata('role') == 'admin') 
        {
            $data['title'] = 'Sahabat PNJ';
            $data['karya'] = $this->m_main->read_karya();
			$data['sidebar'] = $this->load->view('main__/layout/admin/sidebar','',true);
			$data['content'] = $this->load->view('main__/pages/karya',array('template'=>$data),true);
			$this->load->view('main__/pages/home',array('template'=>$data));
        } 
        else if ($this->session->userdata('role') == 'superadmin') 
        {
            $data['title'] = 'Sahabat PNJ';
            $data['karya'] = $this->m_main->read_karya();
			$data['sidebar'] = $this->load->view('main__/layout/sadmin/sidebar','',true);
			$data['content'] = $this->load->view('main__/pages/karya',array('template'=>$data),true);
			$this->load->view('main__/pages/home',array('template'=>$data));
		}
    }

    public function form_karya()
	{
		$data['op'] = 'tambah';
        $data['title'] = 'Sahabat PNJ';
        $data['karya'] = $this->m_main->read_categories_karya();
		$data['sidebar'] = $this->load->view('main__/layout/sadmin/sidebar','',true);
		$data['content'] = $this->load->view('main__/pages/form/karya',array('template'=>$data),true);
		$this->load->view('main__/pages/home',array('template'=>$data));
    }

    function do_upload()
    {
        $url = "./uploads/karya";
        $image=basename($_FILES['picture']['name']);
        $image=str_replace(' ','|',$image);
        $type = explode(".",$image);
        $type = $type[count($type)-1];
        if (in_array($type,array('jpg','jpeg','png','gif','PNG')))
        {
            $tmppath="uploads/karya/".uniqid().".".$type;
            if(is_uploaded_file($_FILES["picture"]["tmp_name"]))
            {
                move_uploaded_file($_FILES['picture']['tmp_name'],$tmppath);
                return $tmppath;
            }
        }
        else
        {
            echo "<script type='text/javascript'>alert ('Maaf format gambar tidak mendukung!');document.location='../form_karya';</script>";
        }
    }

    function create_karya()
    {
        $op = $this->input->post('op');
	    $id = $this->input->post('id');
        $data ['picture']= $this->do_upload();
        $data ['title']= $this->input->post('title');
        $data ['description']= $this->input->post('description');
        $data ['category_id']= $this->input->post('category');
        $data ['team']= $this->input->post('team');
        if ($op=="tambah")
        {
            $this->m_main->create_karya($data);
        }
        else
        {
            $this->m_main->update_karya($id,$data);
        }
        redirect('karya');
    }

    public function update_karya($id)
    {
	    $data['op'] = 'edit';
	    $data['sql'] = $this->m_main->edit_karya($id);
        $data['karya'] = $this->m_main->read_categories_karya();
	    $data['title'] = 'Sahabat PNJ';
	    $data['sidebar'] = $this->load->view('main__/layout/sadmin/sidebar','',true);
	    $data['content'] = $this->load->view('main__/pages/form/karya',array('template'=>$data),true);
	    $this->load->view('main__/pages/home',array('template'=>$data));
	}

    public function delete_karya($id)
    {
		$this->m_main->delete_karya($id);
		redirect('karya');
	}
}
