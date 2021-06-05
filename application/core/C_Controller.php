<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core extends CI_Controller {

	protected $isLogin = false;
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->helper('url','form');
		$this->load->library(array('form_validation'));
		$this->load->model(array('m_trends', 'm_regis', 'm_member', 'user_model'));
		$this->isLogin = $this->session->userdata('isLogin');
	}

	public function renderpage($view, $data = array())
	{
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['level'] = $this->session->userdata('level');
		$this->load->view('template_admin/header',$data);
		$this->load->view($view, $data);
		$this->load->view('template_admin/footer');
	}
	
	public function renderlog($view,$data = array()){
		$this->load->view('template_login/auth_header',$data);
		$this->load->view($view,$data);
		$this->load->view('template_login/auth_footer');
	}

	public function renderadm($view,$data = array()){
		$data['username'] = $this->session->userdata('username');
		$data['email'] = $this->session->userdata('email');
		$data['id_status'] = $this->session->userdata('id_status');
		$data['password'] = $this->session->userdata('password');
		$this->load->view('template_admin/header',$data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('template_admin/topbar',$data);
		$this->load->view($view,$data);
		$this->load->view('template_admin/footer');
	}

		public function rendertool($view,$data = array()){
		$data['nama'] = $this->session->userdata('nama');
		$data['email'] = $this->session->userdata('email');
		$data['level'] = $this->session->userdata('level');
		$data['password'] = $this->session->userdata('password');
		$this->load->view('template_admin/header',$data);
		$this->load->view('template_admin/sidebar');
		// $this->load->view('template_admin/topbar',$data);
		$this->load->view($view,$data);
		$this->load->view('template_admin/footer');
	}
	
}
