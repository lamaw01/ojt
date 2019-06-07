<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('Show_model');
    $this->load->model('Import_model');
    $this->load->library('pagination');
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }
 
  function index(){
    //Allowing access to admin only
    if($this->session->userdata('level')==='1'){
      $result['data1']=$this->Import_model->checkcoreln();
      $result['data2']=$this->Import_model->checkcoresv();
      $result['data3']=$this->Import_model->checkcoretd();
      $result['data4']=$this->Import_model->checkmbwinln();
      $result['data5']=$this->Import_model->checkmbwinsv();
      $result['data6']=$this->Import_model->checkmbwintd();
      $result['data7']=$this->Import_model->checkmigratedln();
      $result['data8']=$this->Import_model->checkmigratedsv();
      $result['data9']=$this->Import_model->checkmigratedtd();
      $this->load->view('dashboard_view',$result);
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
      $result['data1']=$this->Import_model->checkcoreln();
      $result['data2']=$this->Import_model->checkcoresv();
      $result['data3']=$this->Import_model->checkcoretd();
      $result['data4']=$this->Import_model->checkmbwinln();
      $result['data5']=$this->Import_model->checkmbwinsv();
      $result['data6']=$this->Import_model->checkmbwintd();
      $result['data7']=$this->Import_model->checkmigratedln();
      $result['data8']=$this->Import_model->checkmigratedsv();
      $result['data9']=$this->Import_model->checkmigratedtd();
      $this->load->view('manage_data',$result);
    }else{
      $this->session->sess_destroy();
      redirect(base_url());
    }
  }

  function finish(){
    //Allowing access to tech only
    $loginstatus = $this->session->userdata('level');
    if($loginstatus == 1 || $loginstatus == 2 || $loginstatus == 3){
      $this->load->view('done');
    }else{
      $this->session->sess_destroy();
      redirect(base_url());
    }
  }
}