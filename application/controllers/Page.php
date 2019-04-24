<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('Show_model');
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }
 
  function index(){
    //Allowing access to admin only
      if($this->session->userdata('level')==='1'){
          $this->load->view('dashboard_view');
      }else{
          echo "Access Denied";
      }
 
  }
 
  function staff(){
    //Allowing access to staff only
    if($this->session->userdata('level')==='2'){
      $data['title'] = 'Tech Dashboard';
      $this->load->view('dashboard_view',$data);
    }else{
        echo "Access Denied";
    }
  }
 
  function author(){
    //Allowing access to author only
    if($this->session->userdata('level')==='3'){
      $data['title'] = 'Coop Dashboard';
      $this->load->view('dashboard_view',$data);
    }else{
        echo "Access Denied";
    }
  }
 
  /*function adminhome(){

      if($this->session->userdata('level')==='1'){
          $data['title'] = 'Admin Dashboard';
          $this->load->view('dashboard_view',$data);
      }else{
          echo "Access Denied";
      }
 
  }*/

  function adminvalidated(){

      if($this->session->userdata('level')==='1'){
          $data['title'] = 'Admin Validated';
          $this->load->view('validated',$data);
      }else{
          echo "Access Denied";
      }
  }

  function adminerrors(){

      if($this->session->userdata('level')==='1'){
          $data['title'] = 'Admin Errors';
          $this->load->view('errors',$data);
      }else{
          echo "Access Denied";
      }
 
  }

  function techhome(){

      if($this->session->userdata('level')==='2'){
          $data['title'] = 'Tech Dashboard';
          $this->load->view('dashboard_view',$data);
      }else{
          echo "Access Denied";
      }
 
  }

  function techvalidated(){

      if($this->session->userdata('level')==='2'){
          $data['title'] = 'Tech Validated';
          $this->load->view('validated',$data);
      }else{
          echo "Access Denied";
      }
 
  }

  function techerrors(){

      if($this->session->userdata('level')==='2'){
          $data['title'] = 'Tech Errors';
          $this->load->view('errors',$data);
      }else{
          echo "Access Denied";
      }
 
  }

  function coopvalidated(){

    if($this->session->userdata('level')==='3'){
      $data['title'] = 'Coop Validated';
      $this->load->view('validated',$data);
    }else{
        echo "Access Denied";
    }
  }

  function cooperrors(){

    if($this->session->userdata('level')==='3'){
      $data['title'] = 'Coop Errors';
      $this->load->view('errors',$data);
    }else{
        echo "Access Denied";
    }
  }

  function regis(){
    $this->load->view('reg');
  }


  function displayprofile(){
    $result['data']=$this->Show_model->displayprof();
    $this->load->view('profile',$result);
  }

  function adminhome(){
    $result['data']=$this->Show_model->displaymdata();
    $this->load->view('dashboard_view',$result);
  }

}