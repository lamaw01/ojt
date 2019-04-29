<?php
class Errors_model extends CI_Model{

	public function __construct() {
        parent::__construct();
    }


  function total_recorder(){
    return $this->db->count_all('errorln');
 }

 function get_joiner($limit,$offset){
    $this->db->select('errorln_id, account_no, int_rate, penalty_rate, loan_amount, outstanding_bal, overdue_principal, interest_due_amount, penalty');
    $this->db->from('errorln');
    $this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result();
 }



}