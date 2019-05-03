<?php
class Choose extends CI_Controller{
  function __construct(){
    parent::__construct();
  }
  
  function check(){
    $type = $this->input->post('check_type');
    
    if($type == 1){
      redirect('loan');
    }elseif($type == 2){
      redirect('savings');
    }else{
      redirect('time_deposit');
    }
  }

  function validated(){
    $type = $this->input->post('validated_type');
    
    if($type == 4){
      redirect('validated_loan');
    }elseif($type == 5){
      redirect('validated_savings');
    }else{
      redirect('validated_time_deposit');
    }
  }

  function errors(){
    $type = $this->input->post('errors_type');
    
    if($type == 7){
      redirect('errors_loan');
    }elseif($type == 8){
      redirect('errors_savings');
    }else{
      redirect('errors_time_deposit');
    }
  }
}