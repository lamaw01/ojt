<?php
class Show_model extends CI_Model{ 

  function displayprof(){
  	$email = $this->session->userdata('user_email');
  	$query=$this->db->query("SELECT user_fname, user_lname, user_email, user_level FROM tbl_users WHERE user_email = '".$email."'");
  	return $query->result();
  }

  /*function displaymdata(){
  	$query = $this->db->query("SELECT 'migratedln.migratedln_id', 'coreln.account_no' AS coreln_account_no, 'mbwinln.account_no' AS mbwinln_acc_no, 'coreln.account_name'
			FROM coreln
			INNER JOIN migratedln ON 'migratedln.account_no' = 'coreln.account_no'
			INNER JOIN mbwinln ON 'migratedln.old_account_no' = 'mbwinln.account_no'
			WHERE 'coreln.int_rate' = 'mbwinln.int_rate'
			AND 'coreln.penalty_rate' = 'mbwinln.pen_rate'
			AND 'coreln.loan_amount' = 'mbwinln.principal_amt'
			AND 'coreln.outstanding_bal' = 'mbwinln.bal_amt'
			AND 'coreln.overdue_principal' = 'mbwinln.over_due_pri_amt'
			AND 'coreln.interest_due_amount' = 'mbwinln.int_bal_amt'
			AND 'coreln.penalty' = 'mbwinln.pen_bal_amt'
			LIMIT 15");
  	return $query->result();
  }*/

  function displaymdata(){
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
			AND coreln.penalty = mbwinln.pen_bal_amt";
	$this->db->where($where);
	$this->db->limit(15);
	$query = $this->db->get();
    return $query->result();

  }

}