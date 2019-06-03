<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Time_deposit extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('Show_model');
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
}

  function index(){
    $result['data'] = $this->Show_model->get_jointd();
    $this->load->view('time_deposit_view',$result);
 }

  function callchecktd($id){
    $this->Show_model->checktd($id);
    $this->index();
}


}