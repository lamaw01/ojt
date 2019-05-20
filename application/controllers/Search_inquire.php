<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_inquire extends CI_Controller {

  function __construct(){
 
    parent::__construct();
    $this->load->helper('url');

    // Load session
    $this->load->library('session');

    // Load Pagination library
    $this->load->library('pagination');

    // Load model
    $this->load->model('Search_inquire_model');
  }

  function loan($rowno=NULL){

    // Search text
    $search_text = "";
    if($this->input->post('submit') != NULL ){
      $search_text = $this->input->post('search');
      $this->session->set_userdata(array("search"=>$search_text));
    }else{
      if($this->session->userdata('search') != NULL){
        $search_text = $this->session->userdata('search');
      }
    }

    // Row per page
    $rowperpage = 10;
    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }
 
    // All records count
    $allcount = $this->Search_inquire_model->getrecordCountln($search_text);

    // Get records
    $users_record = $this->Search_inquire_model->getDataln($rowno,$rowperpage,$search_text);
 
    // Pagination Configuration
    $config['uri_segment'] = 3;
    $config['base_url'] = base_url().'search_inquire/loan';
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;
    $config['num_links'] = 5;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['prev_link'] = '&laquo;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['next_link'] = '&raquo;';


    $config['first_link'] = false;
    $config['last_link'] = false;

    // Initialize
    $this->pagination->initialize($config);
 
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;
    $data['search'] = $search_text;

    // Load view
    $this->load->view('search_inquire_loan',$data);
 
  }

  function savings($rowno=0){

    // Search text
    $search_text = "";
    if($this->input->post('submit') != NULL ){
      $search_text = $this->input->post('search');
      $this->session->set_userdata(array("search"=>$search_text));
    }else{
      if($this->session->userdata('search') != NULL){
        $search_text = $this->session->userdata('search');
      }
    }

    // Row per page
    $rowperpage = 10;
    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }
 
    // All records count
    $allcount = $this->Search_inquire_model->getrecordCountsv($search_text);

    // Get records
    $users_record = $this->Search_inquire_model->getDatasv($rowno,$rowperpage,$search_text);
 
    // Pagination Configuration
    $config['uri_segment'] = 3;
    $config['base_url'] = base_url().'search_inquire/savings';
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;
    $config['num_links'] = 5;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['prev_link'] = '&laquo;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['next_link'] = '&raquo;';


    $config['first_link'] = false;
    $config['last_link'] = false;

    // Initialize
    $this->pagination->initialize($config);
 
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;
    $data['search'] = $search_text;

    // Load view
    $this->load->view('search_inquire_savings',$data);
 
  }

  function time_deposit($rowno=0){

    // Search text
    $search_text = "";
    if($this->input->post('submit') != NULL ){
      $search_text = $this->input->post('search');
      $this->session->set_userdata(array("search"=>$search_text));
    }else{
      if($this->session->userdata('search') != NULL){
        $search_text = $this->session->userdata('search');
      }
    }

    // Row per page
    $rowperpage = 10;
    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }
 
    // All records count
    $allcount = $this->Search_inquire_model->getrecordCounttd($search_text);

    // Get records
    $users_record = $this->Search_inquire_model->getDatatd($rowno,$rowperpage,$search_text);
 
    // Pagination Configuration
    $config['uri_segment'] = 3;
    $config['base_url'] = base_url().'search_inquire/time_deposit';
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;
    $config['num_links'] = 5;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['prev_link'] = '&laquo;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['next_link'] = '&raquo;';


    $config['first_link'] = false;
    $config['last_link'] = false;

    // Initialize
    $this->pagination->initialize($config);
 
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;
    $data['search'] = $search_text;

    // Load view
    $this->load->view('search_inquire_time_deposit',$data);
 
  }

}