<?php
class Reg_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function insert_data($data){
		
		$this->db->insert("tbl_users", $data);
	}

}
?>