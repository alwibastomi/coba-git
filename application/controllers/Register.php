<?php
class Register extends Core{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->helper('url','form');
		$this->load->library(array('form_validation'));
	}
	public function index()
	{
		$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if($this->form_validation->run() == false){
			$data['alert'] = '';
		}else{
			$data = array(
				'username' => $this->input->post('username'),
				'password' => md5("keyraja:)".$this->input->post('password')),
				'id_status' => '2',
					// 'saldo' => 30000,
				'saldo' => $this->db->from("tb_member")->count_all_results() <= 99 ? 30000 : 0, 
				'regis_date' => date('Y-m-d'),
				'last_active' => date('Y-m-d'),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
			);
			$this->m_regis->add('tb_member', $data);
			$data['alert'] = 'sukses';
		}
		$this->renderlog('admin/signup', $data);
	}

	public function cek()
	{
		$username = strtolower($this->input->post('username'));
		if (strlen($username) < 7) {
			$r = "Username terlalu pendek";
		}else {
			if($this->m_member->getUsername("tb_member", $username) == "0") {
				$r = "Username bisa digunakan";
			}else {
				$r = "Username sudah ada";
			}
		}
		echo json_encode($r);
	}
}
