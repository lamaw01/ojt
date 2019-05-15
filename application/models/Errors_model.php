<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors_model extends CI_Model{

	function __construct() {
        parent::__construct();
    }


  function total_recordln(){
    return $this->db->count_all('errorln','coreln');
 }

 function get_joinln($limit,$offset){
    $this->db->select('errorln_id, errorln.account_no AS errln_account_no');
    $this->db->from('errorln');
    $this->db->join('coreln','coreln.account_no = errorln.account_no','left');
    $this->db->where('coreln.stat = 2');
    $this->db->order_by('errorln_id', 'ASC');
    $this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result();
 }

 function total_recordsv(){
    return $this->db->count_all('errorsv','coresv');
 }

 function get_joinsv($limit,$offset){
    $this->db->select('errorsv_id, errorsv.account_no AS errsv_acc_no, errorsv.open_date AS errorsv_open_date, errorsv.current_bal AS errorsv_current_bal, errorsv.interest AS errorsv_interest');
    $this->db->from('errorsv');
    $this->db->join('coresv','coresv.account_no = errorsv.account_no','left');
    $this->db->where('coresv.stat = 2');
    $this->db->order_by('errorsv_id', 'ASC');
    $this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result();
 }

 function total_recordtd(){
    return $this->db->count_all('errortd','coretd');
 }

 function get_jointd($limit,$offset){
    $this->db->select('errortd_id, errortd.account_no AS errtd_acc_no, errortd.open_date AS errortd_open_date, errortd.principal_amount AS errortd_principal_amount, errortd.interest AS errortd_interest');
    $this->db->from('errortd');
    $this->db->join('coretd','coretd.account_no = errortd.account_no','left');
    $this->db->where('coretd.stat = 2');
    $this->db->order_by('errortd_id', 'ASC');
    $this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result();
 }

}