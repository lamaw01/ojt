<?php
class Errorsln_model extends CI_Model{

	public function __construct() {
        parent::__construct();
    }


  function total_recordln(){
    return $this->db->count_all('errorln','coreln');
 }

 function get_joinln($limit,$offset){
    $this->db->select('errorln_id, errorln.account_no AS errln_account_no');
    $this->db->from('errorln');
    $this->db->join('coreln','coreln.account_no = errorln.account_no','left');
    $this->db->where('coreln.stat = 2');
    $this->db->order_by('errorln_id', 'ASC');
    $this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result();
 }



}