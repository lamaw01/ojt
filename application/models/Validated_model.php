<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validated_model extends CI_Model{

	function __construct() {
        parent::__construct();
    }


 function total_recordln(){
    return $this->db->count_all('validateln','coreln');
 }

 function get_joinln($limit,$offset){
    $this->db->select('validateln_id, validateln.coreln_id AS val_coreln, validateln.mbwinln_id AS val_mbwin, coreln.account_name AS coreln_acc_name');
  	$this->db->from('validateln');
    $this->db->join('coreln','validateln.coreln_id = coreln.account_no','left');
    $this->db->order_by('validateln_id', 'ASC');
    $this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result();
 }

 function total_recordsv(){
    return $this->db->count_all('validatesv','coresv');
 }

 function get_joinsv($limit,$offset){
    $this->db->select('validatesv_id, validatesv.coresv_id AS val_coresv, validatesv.mbwinsv_id AS val_mbwinsv, coresv.account_name AS coresv_acc');
    $this->db->from('validatesv');
    $this->db->join('coresv','validatesv.coresv_id = coresv.account_no','left');
    $this->db->order_by('validatesv_id', 'ASC');
    $this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result();
 }

 function total_recordtd(){
    return $this->db->count_all('validatetd','coretd');
 }

 function get_jointd($limit,$offset){
    $this->db->select('validatetd_id, validatetd.coretd_id AS val_coretd, validatetd.mbwintd_id AS val_mbwintd, coretd.account_name AS coretd_acc');
    $this->db->from('validatetd');
    $this->db->join('coretd','validatetd.coretd_id = coretd.account_no','left');
    $this->db->order_by('validatetd_id', 'ASC');
    $this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result();
 }
}