<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Time_deposit extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('Show_model');
}

  function index($offset = NULL){
    $this->load->library('table');
    //pagination
    $limit = 10;
    if(!is_null($offset))
    {
        $offset = $this->uri->segment(3);
    }
    $this->load->library('pagination');
    $config['uri_segment'] = 3;
    $config['base_url'] = base_url().'time_deposit/index';
    $config['total_rows'] = $this->Show_model->total_recordtd();
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

    $result['data'] = $this->Show_model->get_jointd($limit,$offset);
    $this->load->view('time_deposit_view',$result);
 }

  function callchecktd($id){
    $this->Show_model->checktd($id);
    $this->index();
}


}