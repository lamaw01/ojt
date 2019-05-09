<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('login_model');
  }
 
  function index(){
    $this->load->view('login_view');
  }
 
  function auth(){
    $username    = $this->input->post('username',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->login_model->validate($username,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $id = $data['user_id'];
        $fname  = $data['user_fname'];
        $lname  = $data['user_lname'];
        $username = $data['user_name'];
        $level = $data['user_level'];
        $sesdata = array(
            'user_id'  => $user_id,
            'user_fname'  => $fname,
            'user_lname'  => $lname,
            'user_name'     => $username,
            'level'     => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($level === '1'){
            redirect('page');
 
        // access login for tech
        }elseif($level === '2'){
            redirect('page/tech');
 
        // access login for coop
        }else{
            redirect('page/coop');
        }
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('login');
    }
  }
 
  function logout(){
      $this->session->sess_destroy();
      redirect('login');
  }
 
} 