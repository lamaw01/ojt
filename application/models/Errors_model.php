<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors_model extends CI_Model{

	function __construct() {
        parent::__construct();
    }


 function total_recordln(){
    return $this->db->count_all('errorln');
 }

 function get_joinln($limit,$offset){
    $this->db->select('errorln_id, errorln.coreln_id AS err_coreln, errorln.mbwinln_id AS err_mbwin, coreln.account_name AS coreln_acc_name');
    $this->db->from('errorln');
    $this->db->join('coreln','errorln.coreln_id = coreln.account_no');
    $this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result();
 }

 function total_recordsv(){
    return $this->db->count_all('errorsv');
 }

 function get_joinsv($limit,$offset){
    $this->db->select('errorsv_id, errorsv.coresv_id AS err_coresv, errorsv.mbwinsv_id AS err_mbwinsv, coresv.account_name AS coresv_acc_name');
    $this->db->from('errorsv');
    $this->db->join('coresv','errorsv.coresv_id = coresv.account_no');
    $this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result();
 }

 function total_recordtd(){
    return $this->db->count_all('errortd','coretd');
 }

 function get_jointd($limit,$offset){
    $this->db->select('errortd_id, errortd.coretd_id AS err_coretd, errortd.mbwintd_id AS err_mbwintd, coretd.account_name AS coretd_acc_name');
    $this->db->from('errortd');
    $this->db->join('coretd','errortd.coretd_id = coretd.account_no');
    $this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result();
 }

}