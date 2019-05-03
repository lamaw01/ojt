<?php
class Errorstd_model extends CI_Model{

	public function __construct() {
        parent::__construct();
    }


  function total_recordtd(){
    return $this->db->count_all('errortd','coretd');
 }

 function get_jointd($limit,$offset){
    $this->db->select('errortd_id, errortd.account_no AS errtd_acc_no, errortd.open_date AS errortd_open_date, errortd.principal_amount AS errortd_principal_amount, errortd.interest AS errortd_interest');
    $this->db->from('errortd');
    $this->db->join('coretd','coretd.account_no = errortd.account_no','left');
    $this->db->where('coretd.stat = 2');
    $this->db->order_by('errortd_id', 'ASC');
    $this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result();
 }



}