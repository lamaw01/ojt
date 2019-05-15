<?php
class Validatedtd_model extends CI_Model{

	public function __construct() {
        parent::__construct();
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