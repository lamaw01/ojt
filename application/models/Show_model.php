<?php
class Show_model extends CI_Model{ 

  function displayprof(){
  	$email = $this->session->userdata('user_email');
  	$query=$this->db->query("SELECT user_fname, user_lname, user_email, user_level FROM tbl_users WHERE user_email = '".$email."'");
  	return $query->result();
  }

}