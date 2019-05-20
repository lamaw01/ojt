<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
    }elseif($type == 3){
      redirect('time_deposit');
    }
    else{
      $this->load->view('header');
      $this->load->view('dashboard_view');

    }
  }

  function validated(){
    $type = $this->input->post('validated_type');
    
    if($type == 4){
      redirect('validated/loan');
    }elseif($type == 5){
      redirect('validated/savings');
    }elseif($type == 6){
      redirect('validated/time_deposit');
    }
    else{
      $this->load->view('header');
      $this->load->view('dashboard_view');
    }
  }

  function errors(){
    $type = $this->input->post('errors_type');
    
    if($type == 7){
      redirect('errors/loan');
    }elseif($type == 8){
      redirect('errors/savings');
    }elseif ($type == 9) {
      redirect('errors/time_deposit');
    }
    else{
      $this->load->view('header');
      $this->load->view('dashboard_view');
    }
  }

  function inquire(){
    $type = $this->input->post('inquire_type');
    
    if($type == 11){
      redirect('search_inquire/loan');
    }elseif($type == 12){
      redirect('search_inquire/savings');
    }elseif ($type == 13) {
      redirect('search_inquire/time_deposit');
    }
    else{
      $this->load->view('header');
      $this->load->view('dashboard_view');
    }
  }
}