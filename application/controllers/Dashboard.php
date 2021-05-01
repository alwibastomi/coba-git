<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Core {

	public function index(){
		// $level = $this->session->userdata('level');
		// if(!$this->isLogin){
		// 	redirect('Login');
		// 	die();
		// }
		$data['title'] = 'Halaman dashboard';
		$this->renderadm('admin/dashboard',$data);
		
	}

	public function user(){
		$level = $this->session->userdata('level');
		if(!$this->isLogin){
			redirect('Login');
			die();
		}
		$data['title'] = 'Halaman dashboard';
		$this->renderadm('user/dashboard',$data);
		
	}
}	
