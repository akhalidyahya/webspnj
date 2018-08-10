<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller 
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
            $data['media'] = $this->m_main->read_media();
			$data['sidebar'] = $this->load->view('main__/layout/admin/sidebar','',true);
			$data['content'] = $this->load->view('main__/pages/media',array('template'=>$data),true);
			$this->load->view('main__/pages/home',array('template'=>$data));
        } 
        else if ($this->session->userdata('role') == 'superadmin') 
        {
            $data['title'] = 'Sahabat PNJ';
            $data['media'] = $this->m_main->read_media();
			$data['sidebar'] = $this->load->view('main__/layout/sadmin/sidebar','',true);
			$data['content'] = $this->load->view('main__/pages/media',array('template'=>$data),true);
			$this->load->view('main__/pages/home',array('template'=>$data));
		}
    }

    public function form_media()
	{
		$data['op'] = 'tambah';
        $data['title'] = 'Sahabat PNJ';
		$data['sidebar'] = $this->load->view('main__/layout/sadmin/sidebar','',true);
		$data['content'] = $this->load->view('main__/pages/form/media',array('template'=>$data),true);
		$this->load->view('main__/pages/home',array('template'=>$data));
    }

    function do_upload()
    {
        $url = "./uploads/media";
        $image=basename($_FILES['picture']['name']);
        $image=str_replace(' ','|',$image);
        $type = explode(".",$image);
        $type = $type[count($type)-1];
        if (in_array($type,array('jpg','jpeg','png','gif','PNG')))
        {
            $tmppath="uploads/media/".uniqid().".".$type;
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

    function create_media()
    {
        $op = $this->input->post('op');
	    $id = $this->input->post('id');
        $data ['picture']= $this->do_upload();
        $data ['title']= $this->input->post('title');
        if ($op=="tambah")
        {
            $this->m_main->create_media($data);
        }
        else
        {
            $this->m_main->update_media($id,$data);
        }
        redirect('media');
    }

  public function update_media($id)
  {
	  $data['op'] = 'edit';
	  $data['sql'] = $this->m_main->edit_media($id);
	  $data['title'] = 'Sahabat PNJ';
	  $data['sidebar'] = $this->load->view('main__/layout/sadmin/sidebar','',true);
	  $data['content'] = $this->load->view('main__/pages/form/media',array('template'=>$data),true);
	  $this->load->view('main__/pages/home',array('template'=>$data));
	}

  public function delete_media($id)
  {
		$this->m_main->delete_media($id);
		redirect('media');
	}
}
