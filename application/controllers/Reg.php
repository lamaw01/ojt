<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reg extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('reg_model');
  }

  function index()
  { 
    $this->load->view('register');
  }

  function form_validation(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules("user_name", "Username", 'required|min_length[3]|max_length[16]|is_unique[tbl_users.user_name]');
    $this->form_validation->set_rules("user_password", "Password", 'required');
    $this->form_validation->set_rules("confirm_password", "Confirm Password", 'required|matches[user_password]');
    $this->form_validation->set_rules("user_fname", "First Name", 'required');
    $this->form_validation->set_rules("user_lname", "Last Name", 'required');
    $this->form_validation->set_rules('user_level', 'User Type', 'required');

    if($this->form_validation->run()){
      $this->load->model("reg_model");
      $data = array(
        "user_name"     =>$this->input->post("user_name"),
        "user_password"     =>md5($this->input->post("user_password")),
        "confirm_password"  =>$this->input->post("confirm_password"),
        "user_fname"     =>$this->input->post("user_fname"),
        "user_lname"     =>$this->input->post("user_lname"),
        "user_level"   =>$this->input->post("user_level")
      );

      $this->reg_model->insert_data($data);

      redirect(base_url() . "reg/inserted");
    }
    else{
      $this->index();
    }
  }

  function inserted(){
    $this->index();
  }


}
