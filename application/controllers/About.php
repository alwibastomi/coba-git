<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Core {
	function __construct() 
	{
		parent::__construct();
	}
	public function index(){
		$this->renderadm('admin/about');	
	}
}	
