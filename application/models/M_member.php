<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_member extends CI_Model
{
	function _post($name , $xss = true){
		return $this->input->post($name , $xss);
	}

	public function getUsername($db, $where)
	{
		$this->db->select("count(*) as total");
		$this->db->from($db);
		$this->db->where("username", $where);
		$q = $this->db->get()->row();
		return $q->total;
	}
	
}
