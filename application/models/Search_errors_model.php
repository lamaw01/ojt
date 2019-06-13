<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Search_errors_model extends CI_Model {

  function __construct() {
    parent::__construct(); 
  }

  // Fetch records
  function getDataln($rowno,$rowperpage,$search="") {
 
    $this->db->select('errorln.*,errorln.coreln_id AS errorln_acc_no, errorln.mbwinln_id AS errorln_old_acc_no, coreln.account_name AS coreln_acc_name');
    $this->db->from('errorln');
    $this->db->join('coreln','errorln.coreln_id = coreln.account_no');

    $newsearch = $search;
    if(preg_match('/\s/', $search)){
          $arr = explode(" ", $search);
          $newsearch = $arr[0];
    }
    if($search != ''){
      $this->db->like('coreln.account_name', $newsearch);
      $this->db->or_like('errorln.mbwinln_id', $search);
      $this->db->or_like('errorln.coreln_id', $search);
    }
    $this->db->limit($rowperpage, $rowno); 
    $query = $this->db->get();
 
    return $query->result_array();
  }

  // Select total records
  function getrecordCountln($search = '') {

    $this->db->select('count(*) as allcount, coreln.account_name AS coreln_acc_name');
    $this->db->from('errorln');
    $this->db->join('coreln','errorln.coreln_id = coreln.account_no');
 
    if($search != ''){
      $this->db->like('coreln.account_name', $search);
      $this->db->or_like('errorln.mbwinln_id', $search);
      $this->db->or_like('errorln.coreln_id', $search);
    }

    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }


  function getDatasv($rowno,$rowperpage,$search="") {
 
    $this->db->select('errorsv.*, errorsv.coresv_id AS error_acc_no, errorsv.mbwinsv_id AS errorsv_old_acc_no, coresv.account_no AS coresv_acc_no, coresv.account_name AS coresv_acc_name');
    $this->db->from('errorsv');
    $this->db->join('coresv','errorsv.coresv_id = coresv.account_no');

    $newsearch = $search;
    if(preg_match('/\s/', $search)){
          $arr = explode(" ", $search);
          $newsearch = $arr[0];
    }
    if($search != ''){
      $this->db->like('coresv.account_name', $newsearch);
      $this->db->or_like('errorsv.mbwinsv_id', $search);
      $this->db->or_like('errorsv.coresv_id', $search);
    }
    $this->db->limit($rowperpage, $rowno); 
    $query = $this->db->get();
 
    return $query->result_array();

  }

  // Select total records
  function getrecordCountsv($search = '') {

    $this->db->select('count(*) as allcount, coresv.account_name AS coresv_acc_name');
    $this->db->from('errorsv');
    $this->db->join('coresv','errorsv.coresv_id = coresv.account_no');

    if($search != ''){
      $this->db->like('coresv.account_name', $search);
      $this->db->or_like('errorsv.mbwinsv_id', $search);
      $this->db->or_like('errorsv.coresv_id', $search);
    }

    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }

  function getDatatd($rowno,$rowperpage,$search="") {
 
    $this->db->select('errortd.*, errortd.coretd_id AS errortd_acc_no, errortd.mbwintd_id AS errort_old_acc_no, coretd.account_name AS coretd_acc_name');
    $this->db->from('errortd');
    $this->db->join('coretd','errortd.coretd_id = coretd.account_no');

    $newsearch = $search;
    if(preg_match('/\s/', $search)){
          $arr = explode(" ", $search);
          $newsearch = $arr[0];
    }
    if($search != ''){
      $this->db->like('coretd.account_name', $newsearch);
      $this->db->or_like('errortd.mbwintd_id', $search);
      $this->db->or_like('errortd.coretd_id', $search);
    }
    $this->db->limit($rowperpage, $rowno); 
    $query = $this->db->get();
 
    return $query->result_array();
  }

  // Select total records
  function getrecordCounttd($search = '') {

    $this->db->select('count(*) as allcount, coretd.account_name AS coretd_acc_name');
    $this->db->from('errortd');
    $this->db->join('coretd','errortd.coretd_id = coretd.account_no');
  
    if($search != ''){
      $this->db->like('coretd.account_name', $search);
      $this->db->or_like('errortd.mbwintd_id', $search);
      $this->db->or_like('errortd.coretd_id', $search);
    }

    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }
}