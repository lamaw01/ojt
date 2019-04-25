<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('Show_model');
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
    $config['base_url'] = base_url().'admin/index';
    $config['total_rows'] = $this->Show_model->total_record();
    $config['per_page'] = $limit;
    $config['num_links'] = 5;
    $config['first_link'] = 'First';
    $config['last_link'] = 'Last';
    $this->pagination->initialize($config);

    $result['data'] = $this->Show_model->get_join($limit,$offset);
    $this->load->view('admin_home',$result);
}



}
