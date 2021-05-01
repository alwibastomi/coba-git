<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tool2 extends Core {

	public function Tool_2(){
		// $level = $this->session->userdata('level');
		// if(!$this->isLogin){
		// 	redirect('Auth');
		// 	die();
		// }
		$data['title'] = 'Halaman dashboard';
		$this->renderadm('admin/tool_2',$data);
		
	}
}	
