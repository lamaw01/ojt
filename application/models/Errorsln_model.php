<?php
class Errorsln_model extends CI_Model{

	public function __construct() {
        parent::__construct();
    }


  function total_recordln(){
    return $this->db->count_all('errorln','coreln');
 }

 function get_joinln($limit,$offset){
    $this->db->select('errorln_id, errorln.account_no AS errln_account_no, errorln.int_rate AS errln_int_rate, errorln.penalty_rate AS errln_penalty_rate, errorln.loan_amount AS errln_loan_amount, errorln.outstanding_bal AS errln_outstanding_bal, errorln.overdue_principal AS errln_overdue_principal, errorln.interest_due_amount AS errln_interest_due_amount, errorln.penalty AS errln_penalty');
    $this->db->from('errorln');
    $this->db->join('coreln','coreln.account_no = errorln.account_no','left');
    $this->db->where('coreln.stat = 2');
    $this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result();
 }



}