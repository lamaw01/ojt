<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  function __construct(){
    parent::__construct();

    $loginstatus = $this->session->userdata('level');
        if($loginstatus != 1){
            $this->session->sess_destroy();
            redirect(base_url());
        }

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

    $result['data'] = $this->Show_model->get_join($limit,$offset);
    $this->load->view('admin_home',$result);
 }

  function callcheck($id){
    $this->Show_model->checkln($id);
    $this->index();
}


}