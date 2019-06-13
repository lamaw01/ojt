<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validated extends CI_Controller {
  function __construct(){
    parent::__construct();

    $loginstatus = $this->session->userdata('level');
        if($loginstatus != 1 && $loginstatus != 2 && $loginstatus != 3){
            $this->session->sess_destroy();
            redirect(base_url());
        }
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }

    $this->load->model('Validated_model');
}

  function loan($offset = NULL){
    $this->load->library('table');
    //pagination
    $limit = 10;
    if(!is_null($offset))
    {
        $offset = $this->uri->segment(3);
    }
    $this->load->library('pagination');
    $config['uri_segment'] = 3;
    $config['use_page_numbers'] = false;
    $config['base_url'] = base_url().'validated/loan';
    $config['total_rows'] = $this->db->count_all_results('validateln');
    $config['per_page'] = $limit;
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


    $this->pagination->initialize($config);

    $result['data'] = $this->Validated_model->get_joinln($limit,$offset);
    $this->load->view('validated_loan',$result);
 }
 
 function savings($offset = NULL){
    $this->load->library('table');
    //pagination
    $limit = 10;
    if(!is_null($offset))
    {
        $offset = $this->uri->segment(3);
    }
    $this->load->library('pagination');
    $config['uri_segment'] = 3;
    $config['use_page_numbers'] = false;
    $config['base_url'] = base_url().'validated/savings';
    $config['total_rows'] = $this->db->count_all_results('validateln');
    $config['per_page'] = $limit;
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


    $this->pagination->initialize($config);

    $result['data'] = $this->Validated_model->get_joinsv($limit,$offset);
    $this->load->view('validated_savings',$result);
 }
 
 function time_deposit($offset = NULL){
    $this->load->library('table');
    //pagination
    $limit = 10;
    if(!is_null($offset))
    {
        $offset = $this->uri->segment(3);
    }
    $this->load->library('pagination');
    $config['uri_segment'] = 3;
    $config['use_page_numbers'] = false;
    $config['base_url'] = base_url().'validated/time_deposit';
    $config['total_rows'] = $this->db->count_all_results('validateln');
    $config['per_page'] = $limit;
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


    $this->pagination->initialize($config);

    $result['data'] = $this->Validated_model->get_jointd($limit,$offset);
    $this->load->view('validated_time_deposit',$result);
 }

}