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
		$this->load->model(array('user_model','m_activity','m_penulis', 'm_menu', 'admin_model', 
			'm_iklan', 'm_rpp', 'm_artikel', 'm_trends'));
		$this->restatus();
		$this->isLogin = $this->session->userdata('isLogin');
	}

	public function renderpage($view, $data = array())
	{
		$data['iklan1'] = $this->user_model->getDataIklan('iklan_js', '1.1');
		$data['iklan2'] = $this->user_model->getDataIklan('iklan_js', '1.2');
		$data['iklan3'] = $this->user_model->getDataIklan('iklan_js', '1.3');
		$data['iklan4'] = $this->user_model->getDataIklan('iklan_js', '1.4');
		$data['iklan5'] = $this->user_model->getDataIklan('iklan_js', '1.5');
		$data['nama'] = $this->session->userdata('nama');
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
		$data['nama'] = $this->session->userdata('nama');
		$data['email'] = $this->session->userdata('email');
		$data['level'] = $this->session->userdata('level');
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

	public function restatus()
	{
		$la = $this->m_penulis->getAllPenulis();

		foreach ($la as $key) {
			$datee = date('Y-m-d');
			if ($key->date_status >= $datee) {
				$this->m_penulis->editstatus('1', $key->date_status);
			}else{
				$this->m_penulis->editstatus('0', $key->date_status);
			}
		}
	}
	
}
