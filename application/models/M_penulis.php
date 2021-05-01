<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penulis extends CI_Model
{
  private $level;
  function __construct(){
    parent::__construct();
    $this->level = $this->session->userdata('level');
  }
  function _post($name , $xss = true){
    return $this->input->post($name , $xss);
  }

  public function getAllPenulis()
  {
    $this->db->select("*");
    $this->db->from("user");
    return $this->db->get()->result();
  }

  public function editstatus($kon, $where)
  {
    $data = array('status' => $kon);
    $this->db->where('date_status', $where);
    return $this->db->update('user', $data);
  }

  public function getRecentPenulis()
  {
    $this->db->select("*");
    $this->db->from("user");
    $this->db->order_by("nama", "DESC");
    $this->db->limit(5);
    return $this->db->get()->result();
  }

  public function getCountPenulis()
  {
    $this->db->select("count(nama) as total");
    $this->db->from("user");
    $q = $this->db->get()->row();
    return $q->total;
  }

  public function datatablePenulis()
  {
    $array = array("nama", "level");
    $start = $this->_post('start');
    $offset = $this->_post('length');
    if ($start != null && $offset != null) {
      $this->db->limit($offset,$start);
    }

    $search = $this->_post('search');
    if($search['value'] != ''){
      $key = $search['value'];
      $this->db->like('nama', $key);
      $this->db->or_like('level', $key);
    }

    $order = $this->_post('order');
    $column = isset($order[0]['column'])?$order[0]['column']:-1;
    if($column >= 0 && $column < count($array)){
      $ord = $array[$column];
      $by = $order[0]['dir'];
      $this->db->order_by($ord , $by);
    }

    $this->db->select("SQL_CALC_FOUND_ROWS *" ,FALSE);
    $this->db->from("user");
    $this->db->order_by("nama", "DESC");
    $sql = $this->db->get();
    $q = $sql->result();
    $this->db->select("FOUND_ROWS() AS total_row");
    $row = $this->db->get()->row();

    $sEcho = $this->_post('draw');
    $getCountAll = $this->getCountPenulis();
    $output = array(
      "draw" => intval($sEcho),
      "recordsTotal" => $getCountAll,
      "recordsFiltered" => $row->total_row,
      "data" => array()
    );

    foreach ($q as $val) {
      if ($val->level == 1) {
        $le = 'Admin';
      }else{
        $le = 'User';
      }

      if ($val->status == 1) {
        $aktif = 'Aktif';
      }else{
        $aktif = 'Non Aktif';
      }

      $btn = '<a href="'.site_url('User/edit/'.$val->email).'" class="btn btn-outline-info btn-icon rounded-circle mg-r-5"><div><i class="fa fa-download"></i></div></a>
      <a href="'.site_url('User/edit/'.$val->email).'" class="btn btn-outline-warning btn-icon rounded-circle mg-r-5"><div><i class="fa fa-pencil"></i></div></a>
      <a href="'.site_url('User/hapus/'.$val->email).'" class="btn btn-outline-danger btn-icon rounded-circle mg-r-5"><div><i class="fa fa-trash"></i></div></a>
      ';

      $output['data'][] = array(
        $val->email,
        $val->nama,
        $val->date_status,
        $aktif,
        $le,
        $btn
      );
    }
    return $output;
  }

  
}
