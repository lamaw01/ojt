<?php
class Show_model extends CI_Model{

	public function __construct() {
        parent::__construct();
    }

  function displayprof(){
  	$email = $this->session->userdata('user_email');
  	$query=$this->db->query("SELECT user_fname, user_lname, user_email, user_level FROM tbl_users WHERE user_email = '".$email."'");
  	return $query->result();
  }

  function validated_ad(){
  	$this->db->select('migratedln.migratedln_id, coreln.account_no AS coreln_account_no, mbwinln.account_no AS mbwinln_acc_no, coreln.account_name');
  	$this->db->from('coreln');
  	$this->db->join('migratedln','migratedln.account_no = coreln.account_no','left');
  	$this->db->join('mbwinln','migratedln.old_account_no = mbwinln.account_no','left');
  	$where = "coreln.int_rate = mbwinln.int_rate
			AND coreln.penalty_rate = mbwinln.pen_rate
			AND coreln.loan_amount = mbwinln.principal_amt
			AND coreln.outstanding_bal = mbwinln.bal_amt
			AND coreln.overdue_principal = mbwinln.over_due_pri_amt
			AND coreln.interest_due_amount = mbwinln.int_bal_amt
			AND coreln.penalty = mbwinln.pen_bal_amt
			AND stat = 0";
	$this->db->where($where);
	$query = $this->db->get();
    return $query->result();

  }

  function total_record(){
    return $this->db->count_all('coreln','mbwinln','migratedln');
 }

 function get_join($limit,$offset){
    $this->db->select('migratedln.migratedln_id, coreln.account_no AS coreln_account_no, mbwinln.account_no AS mbwinln_acc_no, coreln.account_name');
  	$this->db->from('coreln');
  	$this->db->join('migratedln','migratedln.account_no = coreln.account_no','left');
  	$this->db->join('mbwinln','migratedln.old_account_no = mbwinln.account_no','left');
  	$where = "coreln.int_rate = mbwinln.int_rate
			AND coreln.penalty_rate = mbwinln.pen_rate
			AND coreln.loan_amount = mbwinln.principal_amt
			AND coreln.outstanding_bal = mbwinln.bal_amt
			AND coreln.overdue_principal = mbwinln.over_due_pri_amt
			AND coreln.interest_due_amount = mbwinln.int_bal_amt
			AND coreln.penalty = mbwinln.pen_bal_amt
			AND migratedln.status = 0";
	$this->db->where($where);
    $this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result();
 }



}