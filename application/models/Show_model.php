<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show_model extends CI_Model{

	function __construct() {
        parent::__construct();
    }

  function displayprof(){
  	$username = $this->session->userdata('user_name');
  	$query=$this->db->query("SELECT user_fname, user_lname, user_name, user_level FROM tbl_users WHERE user_name = '".$username."'");
  	return $query->result();
  }

 function total_recordln(){
    return $this->db->count_all('coreln','mbwinln','migratedln');
 }

 function get_joinln(){
    $this->db->select('migratedln.migratedln_id AS migrateln_id, migratedln.account_no AS migratedln_acc_no, migratedln.old_account_no AS migratedln_old_acc_no, coreln.account_name');
  	$this->db->from('migratedln');
  	$this->db->join('coreln','migratedln.account_no = coreln.account_no','left');
    $this->db->where('stat = 0');
    $this->db->limit(5);
    $query = $this->db->get();
    return $query->result();
 }


 function checkln($id){

  	$query = $this->db->query("call checkvalln('$id')");
    mysqli_next_result($this->db->conn_id);

    if($query->num_rows() > 0){
      $query = $this->db->query("call valln('$id')");
    }else{
      $query = $this->db->query("call errln('$id')");
    }
  	
 }


 function total_recordsv(){
    return $this->db->count_all('coresv','mbwinsv','migratedsv');
 }

 function get_joinsv(){
    $this->db->select('migratedsv.migratedsv_id AS migratesv_id, migratedsv.account_no AS migratedsv_acc_no, migratedsv.old_account_no AS migratedsv_old_acc_no, coresv.account_name');
    $this->db->from('migratedsv');
    $this->db->join('coresv','migratedsv.account_no = coresv.account_no','left');
    $this->db->where('stat = 0');
    $this->db->limit(5);
    $query = $this->db->get();
    return $query->result();
 }


 function checksv($id){

    $query = $this->db->query("call checkvalsv('$id')");
    mysqli_next_result($this->db->conn_id);

    if($query->num_rows() > 0){
      $query = $this->db->query("call valsv('$id')");
    }else{
      $query = $this->db->query("call errsv('$id')");
    }
    
 }

 function total_recordtd(){
    return $this->db->count_all('coretd','mbwintd','migratedtd');
 }

 function get_jointd(){
    $this->db->select('migratedtd.migratedtd_id AS migratetd_id, migratedtd.account_no AS migratedtd_acc_no, migratedtd.old_account_no AS migratedtd_old_acc_no, coretd.account_name');
    $this->db->from('migratedtd');
    $this->db->join('coretd','migratedtd.account_no = coretd.account_no','left');
    $this->db->where('stat = 0');
    $this->db->limit(5);
    $query = $this->db->get();
    return $query->result();
 }


 function checktd($id){

    $query = $this->db->query("call checkvaltd('$id')");
    mysqli_next_result($this->db->conn_id);

    if($query->num_rows() > 0){
      $query = $this->db->query("call valtd('$id')");
    }else{
      $query = $this->db->query("call errtd('$id')");
    }
    
 }

 


}