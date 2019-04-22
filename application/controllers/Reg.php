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
    $data['title'] = 'Register';
    $this->load->view('register',$data);
  }

  public function form_validation(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules("user_email", "Email", 'required');
    $this->form_validation->set_rules("user_password", "Password", 'required');
    $this->form_validation->set_rules("confirm_password", "Confirm Password", 'required|matches[user_password]');
    $this->form_validation->set_rules("user_fname", "First Name", 'required');
    $this->form_validation->set_rules("user_lname", "Last Name", 'required');
    $this->form_validation->set_rules('user_level', 'User Type', 'required');

    if($this->form_validation->run()){
      $this->load->model("reg_model");
      $data = array(
        "user_email"     =>$this->input->post("user_email"),
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

  public function inserted(){
    $this->index();
  }


}
