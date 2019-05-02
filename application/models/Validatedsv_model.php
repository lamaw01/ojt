<?php
class Validatedsv_model extends CI_Model{

	public function __construct() {
        parent::__construct();
    }


  function total_recordsv(){
    return $this->db->count_all('validatesv','coresv');
 }

 function get_joinsv($limit,$offset){
    $this->db->select('validatesv_id, validatesv.coresv_id AS val_coresv, validatesv.mbwinsv_id AS val_mbwinsv, coresv.account_name AS coresv_acc');
  	$this->db->from('validatesv');
    $this->db->join('coresv','validatesv.coresv_id = coresv.account_no','left');
    $this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result();
 }



}