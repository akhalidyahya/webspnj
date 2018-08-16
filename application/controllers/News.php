<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

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
            $data['news'] = $this->m_main->read_news();
			$data['sidebar'] = $this->load->view('main__/layout/admin/sidebar','',true);
			$data['content'] = $this->load->view('main__/pages/news',array('template'=>$data),true);
			$this->load->view('main__/pages/home',array('template'=>$data));
		} else if ($this->session->userdata('role') == 'superadmin') {
            $data['title'] = 'Sahabat PNJ';
            $data['news'] = $this->m_main->read_news();
			$data['sidebar'] = $this->load->view('main__/layout/sadmin/sidebar','',true);
			$data['content'] = $this->load->view('main__/pages/news',array('template'=>$data),true);
			$this->load->view('main__/pages/home',array('template'=>$data));
		}
    }

    public function form_news()
	{
		$data['op'] = 'tambah';
        $data['title'] = 'Sahabat PNJ';
        $data['news'] = $this->m_main->read_categories_news();
		$data['sidebar'] = $this->load->view('main__/layout/sadmin/sidebar','',true);
		$data['content'] = $this->load->view('main__/pages/form/news',array('template'=>$data),true);
		$this->load->view('main__/pages/home',array('template'=>$data));
    }

    function do_upload()
    {
        $url = "./uploads/news";
        $image=basename($_FILES['picture']['name']);
        $image=str_replace(' ','|',$image);
        $type = explode(".",$image);
        $type = $type[count($type)-1];
        if (in_array($type,array('jpg','jpeg','png','gif','PNG')))
        {
            $tmppath="uploads/news/".uniqid().".".$type;
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

    function create_news()
    {
        $op = $this->input->post('op');
	    $id = $this->input->post('id');
        $data ['picture']= $this->do_upload();
        $data ['judul']= $this->input->post('judul');
        $data ['description']= $this->input->post('description');
        $data ['date']= date("Y-m-d H:i:s");
        $data ['user_id']= $this->session->userdata('id');
        $data ['category_id']= $this->input->post('category_id');
        if ($op=="tambah")
        {
            $this->m_main->create_news($data);
        }
        else
        {
            $this->m_main->update_news($id,$data);
        }
        redirect('news');
    }

    public function update_news($id)
    {
	    $data['op'] = 'edit';
        $data['sql'] = $this->m_main->edit_news($id);
        $data['news'] = $this->m_main->read_categories_news();
	    $data['title'] = 'Sahabat PNJ';
	    $data['sidebar'] = $this->load->view('main__/layout/sadmin/sidebar','',true);
	    $data['content'] = $this->load->view('main__/pages/form/news',array('template'=>$data),true);
	    $this->load->view('main__/pages/home',array('template'=>$data));
	}

    public function delete_news($id)
    {
		$this->m_main->delete_news($id);
		redirect('news');
	}

    public function detail_news($id)
    {
        $data = array(
            'title' => 'Sahabat PNJ',
            'berita' => $this->m_main->getNews($id)->result(),
        );
        $this->load->view('main/pages/singlenews',array('template'=>$data));
    }
}
