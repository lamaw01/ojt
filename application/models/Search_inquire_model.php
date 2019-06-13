<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Search_inquire_model extends CI_Model {

  function __construct() {
    parent::__construct(); 
  }

  // Fetch records
  function getDataln($rowno,$rowperpage,$search="") {
 
    $this->db->select('inquireln_id, inquireln.account_no AS inquireln_acc_no, inquireln.old_account_no AS inquireln_old_acc_no, coreln.account_name AS coreln_acc_name, stat');
    $this->db->from('inquireln');
    $this->db->join('coreln','inquireln.account_no = coreln.account_no');

    $newsearch = $search;
    if(preg_match('/\s/', $search)){
          $arr = explode(" ", $search);
          $newsearch = $arr[0];
    }
    if($search != ''){
      $this->db->like('coreln.account_name', $newsearch);
      $this->db->or_like('inquireln.account_no', $search);
      $this->db->or_like('inquireln.old_account_no', $search);
    }
    $this->db->limit($rowperpage, $rowno); 
    $query = $this->db->get();
 
    return $query->result_array();
  }

  // Select total records
  function getrecordCountln($search = '') {

    $this->db->select('count(*) as allcount, coreln.account_name AS coreln_acc_name');
    $this->db->from('inquireln');
    $this->db->join('coreln','inquireln.account_no = coreln.account_no');
 
    if($search != ''){
      $this->db->like('coreln.account_name', $search);
      $this->db->or_like('inquireln.account_no', $search);
      $this->db->or_like('inquireln.old_account_no', $search);
    }

    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }


  function getDatasv($rowno,$rowperpage,$search="") {
 
    $this->db->select('inquiresv_id, inquiresv.account_no AS inquiresv_acc_no, inquiresv.old_account_no AS inquiresv_old_acc_no, coresv.account_name AS coresv_acc_name, stat');
    $this->db->from('inquiresv');
    $this->db->join('coresv','inquiresv.account_no = coresv.account_no');

    $newsearch = $search;
    if(preg_match('/\s/', $search)){
          $arr = explode(" ", $search);
          $newsearch = $arr[0];
    }
    if($search != ''){
      $this->db->like('coresv.account_name', $newsearch);
      $this->db->or_like('inquiresv.account_no', $search);
      $this->db->or_like('inquiresv.old_account_no', $search);
    }

    $this->db->limit($rowperpage, $rowno); 
    $query = $this->db->get();
 
    return $query->result_array();

  }

  // Select total records
  function getrecordCountsv($search = '') {

    $this->db->select('count(*) as allcount, coresv.account_name AS coresv_acc_name');
    $this->db->from('inquiresv');
    $this->db->join('coresv','inquiresv.account_no = coresv.account_no');

    if($search != ''){
      $this->db->like('coresv.account_name', $search);
      $this->db->or_like('inquiresv.account_no', $search);
      $this->db->or_like('inquiresv.old_account_no', $search);
    }

    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }

  function getDatatd($rowno,$rowperpage,$search="") {
 
    $this->db->select('inquiretd_id, inquiretd.account_no AS inquiretd_acc_no, inquiretd.old_account_no AS inquiretd_old_acc_no, coretd.account_name AS coretd_acc_name, stat');
    $this->db->from('inquiretd');
    $this->db->join('coretd','inquiretd.account_no = coretd.account_no');

    $newsearch = $search;
    if(preg_match('/\s/', $search)){
          $arr = explode(" ", $search);
          $newsearch = $arr[0];
    }
    if($search != ''){
      $this->db->like('coretd.account_name', $newsearch);
      $this->db->or_like('inquiretd.account_no', $search);
      $this->db->or_like('inquiretd.old_account_no', $search);
    }

    $this->db->limit($rowperpage, $rowno); 
    $query = $this->db->get();
 
    return $query->result_array();
  }

  // Select total records
  function getrecordCounttd($search = '') {

    $this->db->select('count(*) as allcount, coretd.account_name AS coretd_acc_name');
    $this->db->from('inquiretd');
    $this->db->join('coretd','inquiretd.account_no = coretd.account_no');
  
    if($search != ''){
      $this->db->like('coretd.account_name', $search);
      $this->db->or_like('inquiretd.account_no', $search);
      $this->db->or_like('inquiretd.old_account_no', $search);
    }

    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }
}