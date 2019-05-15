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
        $this->load->view('header');
        $this->load->view('dashboard_view');
      }else{
          $this->session->sess_destroy();
          redirect(base_url());
      }
  }
 
  function tech(){
    //Allowing access to tech only
    if($this->session->userdata('level')==='2'){
      $this->load->view('header');
      $this->load->view('dashboard_view');
    }else{
        $this->session->sess_destroy();
        redirect(base_url());
    }
  }
 
  function coop(){
    //Allowing access to coop only
    if($this->session->userdata('level')==='3'){
      $this->load->view('header');
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


}