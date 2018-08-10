<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
        parent::__construct();
		$this->load->model('m_main');      
	}

	public function index()
	{
		$data['title'] = 'Sahabat PNJ';
		$this->load->view('main__/pages/login',array('template'=>$data));
    }
    
    function ceklogin(){
		if (isset($_POST['login'])) {
			$email=$this->input->post('email',true);
			$pass=md5($this->input->post('pass',true));
			$cek=$this->m_main->proseslogin($email, $pass);
			$hasil=count($cek);
			if ($hasil > 0) {
				$yglogin=$this->db->get_where('users',array('email'=>$email, 'password'=>$pass))->row();
				$data = array('udhmasuk' => true,
				'id'=>$yglogin->id,
				'email'=>$yglogin->email,
				'role' => $yglogin->role,
				'nama' => $yglogin->nama,
				'picture' => $yglogin->picture);
				$this->session->set_userdata($data);
				redirect('main__');
			}else {
				echo "<script type='text/javascript'>alert ('Maaf Email Dan Password Anda Salah !');
				document.location='index';
				</script>";
			}
		}
	}

	function keluar(){
		$this->session->sess_destroy();
		redirect('login');
    }
}
