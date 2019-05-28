<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('Show_model');
    $this->load->library('pagination');
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }
 
  function index(){
    //Allowing access to admin only
    if($this->session->userdata('level')==='1'){ 
      $this->load->view('dashboard_view');
    }else{
      $this->session->sess_destroy();
      redirect(base_url());
      }
  }
 
  function tech(){
    //Allowing access to tech only
    if($this->session->userdata('level')==='2'){
      $this->load->view('dashboard_view');
    }else{
        $this->session->sess_destroy();
        redirect(base_url());
    }
  }
 
  function coop(){
    //Allowing access to coop only
    if($this->session->userdata('level')==='3'){
      $this->load->view('dashboard_view');
    }else{
        $this->session->sess_destroy();
        redirect(base_url());
    }
  }


  function regis(){
    $this->load->view('reg');
  }


  function displayprofile(){
    $result['data']=$this->Show_model->displayprof();
    $this->load->view('profile',$result);
  }

  function check(){
    //Allowing access to tech only
    $loginstatus = $this->session->userdata('level');
    if($loginstatus == 1 || $loginstatus == 2){
      $this->load->view('check');
    }else{
      $this->session->sess_destroy();
      redirect(base_url());
    }
  }

  function validated(){
    //Allowing access to tech only
    $loginstatus = $this->session->userdata('level');
    if($loginstatus == 1 || $loginstatus == 2 || $loginstatus == 3){
      $this->load->view('validated');
    }else{
      $this->session->sess_destroy();
      redirect(base_url());
    }
  }

  function errors(){
    //Allowing access to tech only
    $loginstatus = $this->session->userdata('level');
    if($loginstatus == 1 || $loginstatus == 2 || $loginstatus == 3){
      $this->load->view('errors');
    }else{
      $this->session->sess_destroy();
      redirect(base_url());
    }
  }

  function inquire(){
    //Allowing access to tech only
    $loginstatus = $this->session->userdata('level');
    if($loginstatus == 1 || $loginstatus == 2 || $loginstatus == 3){
      $this->load->view('inquire');
    }else{
      $this->session->sess_destroy();
      redirect(base_url());
    }
  }

  function managedata(){
    //Allowing access to tech only
    $loginstatus = $this->session->userdata('level');
    if($loginstatus == 1){
      $this->load->view('manage_data');
    }else{
      $this->session->sess_destroy();
      redirect(base_url());
    }
  }

}