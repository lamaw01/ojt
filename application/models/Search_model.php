<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Search_model extends CI_Model {

  public function __construct() {
    parent::__construct(); 
  }

  // Fetch records
  public function getDataln($rowno,$rowperpage,$search="") {
 
    $this->db->select('validateln.*, coreln.account_name AS coreln_acc_name');
    $this->db->from('validateln');
    $this->db->join('coreln','validateln.coreln_id = coreln.account_no','left');

    if($search != ''){
      $this->db->like('coreln.account_name', $search);
      $this->db->or_like('validateln.mbwinln_id', $search);
      $this->db->or_like('validateln.coreln_id', $search);
    }

    $this->db->limit($rowperpage, $rowno); 
    $query = $this->db->get();
 
    return $query->result_array();
  }

  // Select total records
  public function getrecordCountln($search = '') {

    $this->db->select('count(*) as allcount, coreln.account_name AS coreln_acc_name');
    $this->db->from('validateln');
    $this->db->join('coreln','validateln.coreln_id = coreln.account_no','left');
 
    if($search != ''){
      $this->db->like('coreln.account_name', $search);
      $this->db->or_like('validateln.mbwinln_id', $search);
      $this->db->or_like('validateln.coreln_id', $search);
    }

    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }


public function getDatasv($rowno,$rowperpage,$search="") {
 
    $this->db->select('validatesv.*, coresv.account_name AS coresv_acc_name');
    $this->db->from('validatesv');
    $this->db->join('coresv','validatesv.coresv_id = coresv.account_no','left');

    if($search != ''){
      $this->db->like('coresv.account_name', $search);
      $this->db->or_like('validatesv.mbwinsv_id', $search);
      $this->db->or_like('validatesv.coresv_id', $search);
    }

    $this->db->limit($rowperpage, $rowno); 
    $query = $this->db->get();
 
    return $query->result_array();
  }

  // Select total records
  public function getrecordCountsv($search = '') {

    $this->db->select('count(*) as allcount, coresv.account_name AS coresv_acc_name');
    $this->db->from('validatesv');
    $this->db->join('coresv','validatesv.coresv_id = coresv.account_no','left');
 
    if($search != ''){
      $this->db->like('coresv.account_name', $search);
      $this->db->or_like('validatesv.mbwinsv_id', $search);
      $this->db->or_like('validatesv.coresv_id', $search);
    }

    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }

  public function getDatatd($rowno,$rowperpage,$search="") {
 
    $this->db->select('validatetd.*, coretd.account_name AS coretd_acc_name');
    $this->db->from('validatetd');
    $this->db->join('coretd','validatetd.coretd_id = coretd.account_no','left');

    if($search != ''){
      $this->db->like('coretd.account_name', $search);
      $this->db->or_like('validatetd.mbwintd_id', $search);
      $this->db->or_like('validatetd.coretd_id', $search);
    }

    $this->db->limit($rowperpage, $rowno); 
    $query = $this->db->get();
 
    return $query->result_array();
  }

  // Select total records
  public function getrecordCounttd($search = '') {

    $this->db->select('count(*) as allcount, coretd.account_name AS coretd_acc_name');
    $this->db->from('validatetd');
    $this->db->join('coretd','validatetd.coretd_id = coretd.account_no','left');
 
    if($search != ''){
      $this->db->like('coretd.account_name', $search);
      $this->db->or_like('validatetd.mbwintd_id', $search);
      $this->db->or_like('validatetd.coretd_id', $search);
    }

    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }
}