<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details_model extends CI_Model{

	function __construct() {
        parent::__construct();
    }

 function get_detailsln($id){

    $this->db->select('mbwinln.open_date AS mbwinln_open_date ,mbwinln.int_rate AS mbwinln_int_rate, mbwinln.pen_rate AS mbwinln_pen_rate, mbwinln.principal_amt AS mbwinln_principal_amt, mbwinln.bal_amt AS mbwinln_bal_amt, mbwinln.over_due_pri_amt AS mbwinln_over_due, mbwinln.int_bal_amt AS mbwinln_int_bal_amt, mbwinln.pen_bal_amt AS mbwinln_pen_bal,

     coreln.open_date AS coreln_open_date, coreln.int_rate AS coreln_int_rate, coreln.penalty_rate AS coreln_pen_rate, coreln.loan_amount AS coreln_loan_amount, coreln.outstanding_bal AS coreln_out_bal, coreln.overdue_principal AS coreln_over_due, coreln.interest_due_amount AS coreln_int_due_amt, coreln.penalty AS coreln_penalty');
  	$this->db->from('coreln');
  	$this->db->join('migratedln','migratedln.account_no = coreln.account_no','left');
  	$this->db->join('mbwinln','migratedln.old_account_no = mbwinln.account_no','left');
  	$where = "coreln.stat = 2
    AND coreln.account_no = '".$id."'";
  	$this->db->where($where);
    $query = $this->db->get();
    return $query->result();
 }

 function get_detailssv($id){

    $this->db->select('mbwinsv.open_date AS mbwinsv_open_date ,mbwinsv.bal_amt AS mbwinsv_bal_amt, mbwinsv.int_bal_amt AS mbwinsv_int_bal_amt, mbwinsv.account_name AS mbwinsv_acc_name,

     coresv.open_date AS coresv_open_date, coresv.current_bal AS coresv_current_bal, coresv.interest AS coresv_interest, coresv.account_name AS coresv_acc_name');
    $this->db->from('coresv');
    $this->db->join('migratedsv','migratedsv.account_no = coresv.account_no','left');
    $this->db->join('mbwinsv','migratedsv.old_account_no = mbwinsv.account_no','left');
    $where = "coresv.stat = 2
    AND coresv.account_no = '".$id."'";
    $this->db->where($where);
    $query = $this->db->get();
    return $query->result();
 }

 function get_detailstd($id){

    $this->db->select('mbwintd.open_date AS mbwintd_open_date ,mbwintd.bal_amt AS mbwintd_bal_amt, mbwintd.int_bal_amt AS mbwintd_int_bal_amt, mbwintd.account_name AS mbwintd_acc_name,

     coretd.open_date AS coretd_open_date, coretd.principal_amount AS coretd_principal_amt, coretd.interest AS coretd_interest, coretd.account_name AS coretd_acc_name');
    $this->db->from('coretd');
    $this->db->join('migratedtd','migratedtd.account_no = coretd.account_no','left');
    $this->db->join('mbwintd','migratedtd.old_account_no = mbwintd.account_no','left');
    $where = "coretd.stat = 2
    AND coretd.account_no = '".$id."'";
    $this->db->where($where);
    $query = $this->db->get();
    return $query->result();
 }


}