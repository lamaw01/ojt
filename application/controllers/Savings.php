<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Savings extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('Show_model');
}

  function index(){
    $result['data'] = $this->Show_model->get_joinsv();
    $this->load->view('savings_view',$result);
 }

  function callchecksv($id){
    $this->Show_model->checksv($id);
    $this->index();
}


}