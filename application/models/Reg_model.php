<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reg_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	function insert_data($data){
		
		$this->db->insert("tbl_users", $data);
	}

	
}
?>