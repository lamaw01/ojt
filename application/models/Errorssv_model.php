<?php
class Errorssv_model extends CI_Model{

	public function __construct() {
        parent::__construct();
    }


  function total_recordsv(){
    return $this->db->count_all('errorsv','coresv');
 }

 function get_joinsv($limit,$offset){
    $this->db->select('errorsv_id, errorsv.account_no AS errsv_acc_no, errorsv.open_date AS errorsv_open_date, errorsv.current_bal AS errorsv_current_bal, errorsv.interest AS errorsv_interest');
    $this->db->from('errorsv');
    $this->db->join('coresv','coresv.account_no = errorsv.account_no','left');
    $this->db->where('coresv.stat = 2');
    $this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result();
 }



}