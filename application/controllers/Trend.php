<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trend extends Core {

	public function Tool1(){
		$level = $this->session->userdata('level');
		if(!$this->isLogin || $level != 1){
			redirect('404');
			die();
		}
		$data['title'] = 'Halaman dashboard';
		$this->renderadm('admin/tool1',$data);
		
	}

	public function pos(){
		// $ar = array($this->input->post('Kword'), 'Jadwal SKCK');
		$arr = array($this->input->post('Kword'),'plat ab');
		$hadi = $this->m_trends->getRelatedSearchQueries($this->input->post('Kword'),0,'now 7-d');
		$pinus = $this->m_trends->getRelatedSearchQueries($this->input->post('Kword'), 0, 'today 12-m');
		$timus = $this->m_trends->explore($arr);
		$data['top'] = $hadi[$this->input->post('Kword')];
		$data['rising'] = $pinus[$this->input->post('Kword')];
		$data['exp'] = $timus;
		echo json_encode($data);
		
	}
}	
