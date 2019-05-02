<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validated_savings extends CI_Controller {
  function __construct(){
    parent::__construct();

    $loginstatus = $this->session->userdata('level');
        if($loginstatus != 1 && $loginstatus != 2 && $loginstatus != 3){
            $this->session->sess_destroy();
            redirect(base_url());
        }

    $this->load->model('Validatedsv_model');
}

  function index($offset = NULL){
    $this->load->library('table');
    //pagination
    $limit = 15;
    if(!is_null($offset))
    {
        $offset = $this->uri->segment(3);
    }
    $this->load->library('pagination');
    $config['uri_segment'] = 3;
    $config['base_url'] = base_url().'validated_savings/index';
    $config['total_rows'] = $this->Validatedsv_model->total_recordsv();
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

    $result['data'] = $this->Validatedsv_model->get_joinsv($limit,$offset);
    $this->load->view('validated_savings',$result);
 }

}