<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Search_errors_model extends CI_Model {

  function __construct() {
    parent::__construct(); 
  }

  // Fetch records
  function getDataln($rowno,$rowperpage,$search="") {
 
    $this->db->select('errorln.*,errorln.account_no AS errorln_acc_no , coreln.account_name AS coreln_acc_name');
    $this->db->from('errorln');
    $this->db->join('coreln','errorln.account_no = coreln.account_no','left');

    $newsearch = $search;
    if(preg_match('/\s/', $search)){
          $arr = explode(" ", $search);
          $newsearch = $arr[0];
    }
    if($search != ''){
      $this->db->like('coreln.account_name', $newsearch);
      $this->db->or_like('errorln.account_no', $search);
    }
    $this->db->order_by('errorln_id', 'ASC');
    $this->db->limit($rowperpage, $rowno); 
    $query = $this->db->get();
 
    return $query->result_array();
  }

  // Select total records
  function getrecordCountln($search = '') {

    $this->db->select('count(*) as allcount, coreln.account_name AS coreln_acc_name');
    $this->db->from('errorln');
    $this->db->join('coreln','errorln.account_no = coreln.account_no','left');
 
    if($search != ''){
      $this->db->like('coreln.account_name', $search);
      $this->db->or_like('errorln.account_no', $search);
    }

    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }


  function getDatasv($rowno,$rowperpage,$search="") {
 
    $this->db->select('errorsv.*, errorsv.account_no AS error_acc_no, coresv.account_no AS coresv_acc_no, coresv.account_name AS coresv_acc_name');
    $this->db->from('errorsv');
    $this->db->join('coresv','errorsv.account_no = coresv.account_no','left');
  /*if (preg_match('/\s/', $search) > 0) {
        $search = array_map('trim', array_filter(explode(' ', $search)));
        foreach ($search as $key => $value) {
          $this->db->or_like('coresv.account_name', $value);
    }
  }*/
    $newsearch = $search;
    if(preg_match('/\s/', $search)){
          $arr = explode(" ", $search);
          $newsearch = $arr[0];
    }
    if($search != ''){
      $this->db->like('coresv.account_name', $newsearch);
      $this->db->or_like('errorsv.account_no', $search);
    }

    $this->db->order_by('errorsv_id', 'ASC');
    $this->db->limit($rowperpage, $rowno); 
    $query = $this->db->get();
 
    return $query->result_array();

  }

  // Select total records
  function getrecordCountsv($search = '') {

    $this->db->select('count(*) as allcount, coresv.account_name AS coresv_acc_name');
    $this->db->from('errorsv');
    $this->db->join('coresv','errorsv.account_no = coresv.account_no','left');

    if($search != ''){
      $this->db->like('coresv.account_name', $search);
      $this->db->or_like('errorsv.account_no', $search);
    }

    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }

  function getDatatd($rowno,$rowperpage,$search="") {
 
    $this->db->select('errortd.*, errortd.account_no AS errortd_acc_no, coretd.account_name AS coretd_acc_name');
    $this->db->from('errortd');
    $this->db->join('coretd','errortd.account_no = coretd.account_no','left');

    $newsearch = $search;
    if(preg_match('/\s/', $search)){
          $arr = explode(" ", $search);
          $newsearch = $arr[0];
    }
    if($search != ''){
      $this->db->like('coretd.account_name', $newsearch);
      $this->db->or_like('errortd.account_no', $search);
    }

    $this->db->order_by('errortd_id', 'ASC');
    $this->db->limit($rowperpage, $rowno); 
    $query = $this->db->get();
 
    return $query->result_array();
  }

  // Select total records
  function getrecordCounttd($search = '') {

    $this->db->select('count(*) as allcount, coretd.account_name AS coretd_acc_name');
    $this->db->from('errortd');
    $this->db->join('coretd','errortd.account_no = coretd.account_no','left');
  
    if($search != ''){
      $this->db->like('coretd.account_name', $search);
      $this->db->or_like('errortd.account_no', $search);
    }

    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }
}