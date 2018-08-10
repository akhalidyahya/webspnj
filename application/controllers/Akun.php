<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller 
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
        if ($this->session->userdata('role') == 'superadmin') 
        {
            $data['title'] = 'Sahabat PNJ';
            $data['akun'] = $this->m_main->read_akun();
			$data['sidebar'] = $this->load->view('main__/layout/sadmin/sidebar','',true);
			$data['content'] = $this->load->view('main__/pages/akun',array('template'=>$data),true);
			$this->load->view('main__/pages/home',array('template'=>$data));
		}
    }

    public function form_akun()
	{
		$data['op'] = 'tambah';
        $data['title'] = 'Sahabat PNJ';
		$data['sidebar'] = $this->load->view('main__/layout/sadmin/sidebar','',true);
		$data['content'] = $this->load->view('main__/pages/form/akun',array('template'=>$data),true);
		$this->load->view('main__/pages/home',array('template'=>$data));
    }

    function do_upload()
    {
        $url = "./uploads/akun";
        $image=basename($_FILES['picture']['name']);
        $image=str_replace(' ','|',$image);
        $type = explode(".",$image);
        $type = $type[count($type)-1];
        if (in_array($type,array('jpg','jpeg','png','gif','PNG')))
        {
            $tmppath="uploads/akun/".uniqid().".".$type;
            if(is_uploaded_file($_FILES["picture"]["tmp_name"]))
            {
                move_uploaded_file($_FILES['picture']['tmp_name'],$tmppath);
                return $tmppath;
            }
        }
        else
        {
            echo "<script type='text/javascript'>alert ('Maaf format gambar tidak mendukung!');document.location='../form_akun';</script>";
        }
    }

    function create_akun()
    {
        $op = $this->input->post('op');
	    $id = $this->input->post('id');
        $data ['picture']= $this->do_upload();
        $data ['nama']= $this->input->post('nama');
        $data ['email']= $this->input->post('email');
        $data ['password']= md5($this->input->post('password'));
        $data ['role']= $this->input->post('role');
        if ($op=="tambah" && $this->session->userdata('role') == 'superadmin')
        {
            $this->m_main->create_akun($data);
            redirect('akun');
        }
        else
        {
            $this->m_main->update_akun($id,$data);
            if($this->session->userdata('role') == 'superadmin')
            {
                redirect('akun');
            }
            else
            {
                redirect('login');
            }
        }
    }

  public function update_akun($id)
  {
	  $data['op'] = 'edit';
	  $data['sql'] = $this->m_main->edit_akun($id);
	  $data['title'] = 'Sahabat PNJ';
	  $data['sidebar'] = $this->load->view('main__/layout/sadmin/sidebar','',true);
	  $data['content'] = $this->load->view('main__/pages/form/akun',array('template'=>$data),true);
	  $this->load->view('main__/pages/home',array('template'=>$data));
	}

  public function delete_akun($id)
  {
		$this->m_main->delete_akun($id);
		redirect('akun');
	}
}
