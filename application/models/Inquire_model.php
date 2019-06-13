<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inquire_model extends CI_Model{

	function __construct() {
        parent::__construct();
    }


 function total_recordln(){
    return $this->db->count_all('inquireln');
 }

 function get_joinln($limit,$offset){
    $this->db->select('inquireln_id, inquireln.account_no AS inquireln_acc_no, inquireln.old_account_no AS inquireln_old_acc_no, coreln.account_name AS coreln_acc_name, stat');
    $this->db->from('inquireln');
    $this->db->join('coreln','inquireln.account_no = coreln.account_no');
    $this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result();
 }

 function total_recordsv(){
    return $this->db->count_all('inquiresv');
 }

 function get_joinsv($limit,$offset){
    $this->db->select('inquiresv_id, inquiresv.account_no AS inquiresv_acc_no, inquiresv.old_account_no AS inquiresv_old_acc_no, coresv.account_name AS coresv_acc_name, stat');
    $this->db->from('inquiresv');
    $this->db->join('coresv','inquiresv.account_no = coresv.account_no');
    $this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result();
 }

 function total_recordtd(){
    return $this->db->count_all('inquiretd');
 }

 function get_jointd($limit,$offset){
    $this->db->select('inquiretd_id, inquiretd.account_no AS inquiretd_acc_no, inquiretd.old_account_no AS inquiretd_old_acc_no, coretd.account_name AS coretd_acc_name, stat');
    $this->db->from('inquiretd');
    $this->db->join('coretd','inquiretd.account_no = coretd.account_no');
    $this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result();
 }

}