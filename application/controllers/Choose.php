<?php
class Choose extends CI_Controller{
  function __construct(){
    parent::__construct();
  }
  
  function index(){
    $type = $this->input->post('type_no');
    
    if($type == 1){
      redirect('loan');
    }elseif($type == 2){
      redirect('savings');
    }else{
      echo "time deposit";
    }
  }
}