<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('Details_model');
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
}

 function loan($id){
    
    $result['data'] = $this->Details_model->get_detailsln($id);
    $this->load->view('loan_details_view',$result);

}

 function savings($id){
    
    $result['data'] = $this->Details_model->get_detailssv($id);
    $this->load->view('savings_details_view',$result);

}

 function time_deposit($id){
    
    $result['data'] = $this->Details_model->get_detailstd($id);
    $this->load->view('time_deposit_details_view',$result);

}

function inquire_loan($id){
    
    $result['data'] = $this->Details_model->get_detailsln($id);
    $this->load->view('inquire_loan_details_view',$result);

}

 function inquire_savings($id){
    
    $result['data'] = $this->Details_model->get_detailssv($id);
    $this->load->view('inquire_savings_details_view',$result);

}

 function inquire_time_deposit($id){
    
    $result['data'] = $this->Details_model->get_detailstd($id);
    $this->load->view('inquire_time_deposit_details_view',$result);

}


}