<?php
class Validated_model extends CI_Model{

	public function __construct() {
        parent::__construct();
    }


  function total_recordvl(){
    return $this->db->count_all('validateln','coreln');
 }

 function get_joinvl($limit,$offset){
    $this->db->select('validateln_id, validateln.coreln_id AS val_coreln, validateln.mbwinln_id AS val_mbwin, coreln.account_name AS coreln_acc');
  	$this->db->from('validateln');
    $this->db->join('coreln','validateln.coreln_id = coreln.account_no','left');
    $this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result();
 }



}