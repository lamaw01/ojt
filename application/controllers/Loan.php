<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loan extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('Show_model');
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
}

  function index(){
    $result['data'] = $this->Show_model->get_joinln();
    $this->load->view('loan_view',$result);
 }

  function callcheckln($id){
    $this->Show_model->checkln($id);
    $this->index();
}


}