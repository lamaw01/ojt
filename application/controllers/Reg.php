<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reg extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('reg_model');
  }

  public function index()
  { 
    $this->load->view('register');
  }

  public function form_validation(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules("user_email", "Email", 'required');
    $this->form_validation->set_rules("user_password", "Password", 'required');
    $this->form_validation->set_rules("user_name", "Name", 'required');
    $this->form_validation->set_rules('user_level', 'User Type', 'required');

    if($this->form_validation->run()){
      $this->load->model("reg_model");
      $data = array(
        "user_email"     =>$this->input->post("user_email"),
        "user_password"     =>md5($this->input->post("user_password")),
        "user_name"     =>$this->input->post("user_name"),
        "user_level"   =>$this->input->post("user_level")
      );

      $this->reg_model->insert_data($data);

      redirect(base_url() . "reg/inserted");
    }
    else{
      $this->index();
    }
  }

  public function inserted(){
    $this->index();
  }


}
