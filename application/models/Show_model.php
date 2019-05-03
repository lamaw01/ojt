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

 function total_recordln(){
    return $this->db->count_all('coreln','mbwinln','migratedln');
 }

 function get_joinln($limit,$offset){
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
			AND migratedln.stat = 0
      AND coreln.stat = 0";
  	$this->db->where($where);
    $this->db->order_by('migratedln_id', 'ASC');
    $this->db->limit($limit, $offset);
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

 function get_joinsv($limit,$offset){
    $this->db->select('migratedsv.migratedsv_id, coresv.account_no AS coresv_account_no, mbwinsv.account_no AS mbwinsv_acc_no, coresv.account_name');
    $this->db->from('coresv');
    $this->db->join('migratedsv','migratedsv.account_no = coresv.account_no','left');
    $this->db->join('mbwinsv','migratedsv.old_account_no = mbwinsv.account_no','left');
    $where = "coresv.open_date = mbwinsv.open_date
      AND coresv.current_bal = mbwinsv.bal_amt
      AND coresv.interest = mbwinsv.int_bal_amt
      AND migratedsv.stat = 0
      AND coresv.stat = 0";
    $this->db->where($where);
    $this->db->order_by('migratedsv_id', 'ASC');
    $this->db->limit($limit, $offset);
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

 function get_jointd($limit,$offset){
    $this->db->select('migratedtd.migratedtd_id, coretd.account_no AS coretd_account_no, mbwintd.account_no AS mbwintd_acc_no, coretd.account_name');
    $this->db->from('coretd');
    $this->db->join('migratedtd','migratedtd.account_no = coretd.account_no','left');
    $this->db->join('mbwintd','migratedtd.old_account_no = mbwintd.account_no','left');
    $where = "coretd.open_date = mbwintd.open_date
      AND coretd.principal_amount = mbwintd.bal_amt
      AND coretd.interest = mbwintd.int_bal_amt
      AND migratedtd.stat = 0
      AND coretd.stat = 0";
    $this->db->where($where);
    $this->db->order_by('migratedtd_id', 'ASC');
    $this->db->limit($limit, $offset);
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