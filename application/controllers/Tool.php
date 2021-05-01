<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tool extends Core {
	function __construct() 
	{
		parent::__construct();
		$this->load->helper('simple_html_dom');
	}
	public function Tool1(){
		$level = $this->session->userdata('level');
		if(!$this->isLogin){
			redirect('404');
			die();
		}
		$data['title'] = 'Halaman dashboard';
		$this->renderadm('admin/tool1',$data);
		
	}

	public function Semantic(){
		// $level = $this->session->userdata('level');
		// if(!$this->isLogin){
		// 	redirect('404');
		// 	die();
		// }
		$data['title'] = 'Halaman dashboard';
		$this->renderadm('admin/tool2',$data);
		
	}

	public function Heading(){
		// $level = $this->session->userdata('level');
		// if(!$this->isLogin){
		// 	redirect('404');
		// 	die();
		// }
		
		$this->renderadm('admin/heading');
		
	}
	public function Rank(){

		// $level = $this->session->userdata('level');
		// if(!$this->isLogin){
		// 	redirect('404');
		// 	die();
		// }
		
		$this->renderadm('admin/serp');
		
	}
	public function List_ranked(){
		$url = 'https://www.google.com/search?q='.str_replace(' ', '+', $this->input->post('url1')).'&start='.$this->input->post('halaman').'0';
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($curl);
		curl_close($curl);

		$domResult = new simple_html_dom();
		$domResult->load($result);

		$data['url'] = [];
		$data['h3'] = [];
		$x = 0;
		foreach ($domResult->find('h3') as $h3) {
			array_push($data['h3'], $h3->plaintext);
		}
		foreach ($domResult->find('a') as $h1) {
			if (strpos($h1,"/url?q=")) {
				$x = $x + 1;
				if ($x < 10) {
					$sentence = str_replace('/url?q=', '', $h1->href);
					$sentence = str_replace('%2520', ' ', $sentence);
					$sentence = str_replace('%2522', '"', $sentence);
					$sentence = str_replace('%2B', '+', $sentence);
					$sentence = str_replace('%25', '%', $sentence);
					$sentence = str_replace('%3F', '?', $sentence);
					$sentence = str_replace('%3D', '=', $sentence);
					$sentence = substr($sentence, 0, strpos($sentence, "&"));
					array_push($data['url'], $sentence);
				}
			}
		}
		// $level = $this->session->userdata('level');
		// if(!$this->isLogin){
		// 	redirect('404');
		// 	die();
		// }
		
		$domResult->clear();
		unset($domResult);
		echo json_encode($data);
		
	}
	public function List_tracker(){
		$url = 'https://www.google.com/search?q='.str_replace(' ', '+', $this->input->post('keyword')).'&start='.$this->input->post('halaman').'0';
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($curl);
		curl_close($curl);

		$domResult = new simple_html_dom();
		$domResult->load($result);

		$data['url'] = [];
		$data['keyword'] = $this->input->post('keyword');
		$data['rank'] = [];			
		$x = intval($this->input->post('halaman').'0');
		
		foreach ($domResult->find('a') as $h1) {
			if (strpos($h1,"/url?q=")) {
				$x = $x + 1;
				if ($x < ($x+10)) {

					$sentence = str_replace('/url?q=', '', $h1->href);
					$sentence = str_replace('%2520', ' ', $sentence);
					$sentence = str_replace('%2522', '"', $sentence);
					$sentence = str_replace('%2B', '+', $sentence);
					$sentence = str_replace('%25', '%', $sentence);
					$sentence = str_replace('%3F', '?', $sentence);
					$sentence = str_replace('%3D', '=', $sentence);
					$sentence = substr($sentence, 0, strpos($sentence, "&"));
					if (strpos($sentence, $this->input->post('url1')) !== false) {
						
						array_push($data['url'], $sentence);
						array_push($data['rank'], $x);
					}
				}
			}
		}
		// $level = $this->session->userdata('level');
		// if(!$this->isLogin){
		// 	redirect('404');
		// 	die();
		// }
		$domResult->clear();
		unset($domResult);
		echo json_encode($data);
	}

	public function List_url(){
		$curl = curl_init();
		$st = str_replace(' ', '%20', $this->input->post('url1'));
		curl_setopt($curl, CURLOPT_URL, $st);
		
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($curl);
		curl_close($curl);

		$domResult = new simple_html_dom();
		$domResult->load($result);

		$data['heading'] = [];
		$data['title'] = $domResult->find('title',0)->innertext;
		$data['p'] = [];
		$data['h1'] = [];
		$data['h2'] = [];
		$data['h3'] = [];
		$data['h4'] = [];
		$data['h5'] = [];
		foreach ($domResult->find('p') as $p) {
			array_push($data['p'], $p->plaintext);
		}
		foreach ($domResult->find('h1') as $h1) {
			array_push($data['h1'], $h1->plaintext);
		}
		foreach ($domResult->find('h2') as $h2) {
			array_push($data['h2'], $h2->plaintext);
		}
		foreach ($domResult->find('h3') as $h3) {
			array_push($data['h3'], $h3->plaintext);
		}
		foreach ($domResult->find('h4') as $h4) {
			array_push($data['h4'], $h4->plaintext);
		}		
		foreach ($domResult->find('h5') as $h5) {
			array_push($data['h5'], $h5->plaintext);
		}
		foreach($domResult->find('h1,h2,h3,h4,h5') as $link) {
			array_push($data['heading'], $link->plaintext);
		}

		// $level = $this->session->userdata('level');
		// if(!$this->isLogin){
		// 	redirect('404');
		// 	die();
		// }
		// 
		$domResult->clear();
		unset($domResult);
		echo json_encode($data);
		
	}

	public function scrap()
	{
		$curl = curl_init();

		if ($this->input->post('url1')) {
			curl_setopt($curl, CURLOPT_URL, $this->input->post('url1'));
		}
		if ($this->input->post('url2')) {
			curl_setopt($curl, CURLOPT_URL, $this->input->post('url2'));
		}
		if ($this->input->post('url3')) {
			curl_setopt($curl, CURLOPT_URL, $this->input->post('url3'));
		}
		if ($this->input->post('url4')) {
			curl_setopt($curl, CURLOPT_URL, $this->input->post('url4'));
		}
		if ($this->input->post('url5')) {
			curl_setopt($curl, CURLOPT_URL, $this->input->post('url5'));
		}
		if ($this->input->post('url6')) {
			curl_setopt($curl, CURLOPT_URL, $this->input->post('url6'));
		}

		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($curl);
		curl_close($curl);

		$domResult = new simple_html_dom();
		$domResult->load($result);

		$data['heading'] = [];
		$data['title'] = $domResult->find('title',0)->innertext;
		$data['h1'] = [];
		$data['h2'] = [];
		$data['h3'] = [];
		$data['h4'] = [];
		$data['h5'] = [];
		foreach ($domResult->find('h1') as $h1) {
			array_push($data['h1'], $h1->plaintext);
		}
		foreach ($domResult->find('h2') as $h2) {
			array_push($data['h2'], $h2->plaintext);
		}
		foreach ($domResult->find('h3') as $h3) {
			array_push($data['h3'], $h3->plaintext);
		}
		foreach ($domResult->find('h4') as $h4) {
			array_push($data['h4'], $h4->plaintext);
		}
		foreach ($domResult->find('h5') as $h5) {
			array_push($data['h5'], $h5->plaintext);
		} 

		foreach($domResult->find('h1,h2,h3,h4,h5') as $link) {
			array_push($data['heading'], $link->plaintext);
		}
		
		$domResult->clear();
		unset($domResult);
		echo json_encode($data);
	}
	public function list_konsensus()
	{
		$curl = curl_init();

		if ($this->input->post('url1')) {
			curl_setopt($curl, CURLOPT_URL, $this->input->post('url1'));
		}
		if ($this->input->post('url2')) {
			curl_setopt($curl, CURLOPT_URL, $this->input->post('url2'));
		}
		if ($this->input->post('url3')) {
			curl_setopt($curl, CURLOPT_URL, $this->input->post('url3'));
		}
		if ($this->input->post('url4')) {
			curl_setopt($curl, CURLOPT_URL, $this->input->post('url4'));
		}
		if ($this->input->post('url5')) {
			curl_setopt($curl, CURLOPT_URL, $this->input->post('url5'));
		}
		if ($this->input->post('url6')) {
			curl_setopt($curl, CURLOPT_URL, $this->input->post('url6'));
		}

		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($curl);
		curl_close($curl);

		$domResult = new simple_html_dom();
		$domResult->load($result);

		$data['heading'] = [];
		$data['title'] = $domResult->find('title',0)->innertext;
		$data['p'] = [];

		foreach ($domResult->find('p') as $p) {
			$z = 0;
			foreach (explode(" ",$this->input->post('keyword')) as $key) {
				if (stripos($p->plaintext, $key)) {
					$z = $z+1;
				}
			}
			if ($z == count(explode(" ",$this->input->post('keyword')))) {
				array_push($data['p'], $p->plaintext);
				
			}
		}

		foreach($domResult->find('h1,h2,h3,h4,h5') as $link) {			
			$y = 0;
			foreach (explode(" ",$this->input->post('keyword')) as $key) {
				if (stripos($link->plaintext, $key)) {
					$y = $y+1;
				}
			}
			if ($y == count(explode(" ",$this->input->post('keyword')))) {
				array_push($data['heading'], $link->plaintext);
				
			}
		}
		
		$domResult->clear();
		unset($domResult);
		echo json_encode($data);
	}
	public function Tracker()
	{
		$this->renderadm('admin/tracker');
	}

	public function Konsensus()
	{
		$this->renderadm('admin/konsensus');
	}
}	
