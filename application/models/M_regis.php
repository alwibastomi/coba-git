<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_regis extends CI_Model
{
  function _post($name , $xss = true){
    return $this->input->post($name , $xss);
  }

  public function add($table, $data)
  {
    return $this->db->insert($table, $data);
  }
  
}
