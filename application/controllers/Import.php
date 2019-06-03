<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import extends CI_Controller
{
    public $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Import_model');
        if($this->session->userdata('logged_in') !== TRUE){
          redirect('login');
        }
    }
    function index()
    {
      redirect('page');
    }
    function importcoreln()
    {
      $this->Import_model->coreln();
      redirect('page');
    }
    function importcoresv()
    {
      $this->Import_model->coresv();
      redirect('page');
    }
    function importcoretd()
    {
      $this->Import_model->coretd();
      redirect('page');
    }
    function importmbwinln()
    {
      $this->Import_model->mbwinln();
      redirect('page');
    }
    function importmbwinsv()
    {
      $this->Import_model->mbwinsv();
      redirect('page');
    }
    function importmbwintd()
    {
      $this->Import_model->mbwintd();
      redirect('page');
    }
    function importmigratedln()
    {
      $this->Import_model->migratedln();
      redirect('page');
    }
    function importmigratedsv()
    {
      $this->Import_model->migratedsv();
      redirect('page');
    }
    function importmigratedtd()
    {
      $this->Import_model->migratedtd();
      redirect('page');
    }





    function callcorrectAllData()
    {
        $this->Import_model->correctAllData();
        redirect('page/managedata');
    }

    /*
    function callcorrectCoreData()
    {
        $this->Import_model->correctCoreData();
        $this->load->view('manage_data');
    }
    function callcorrectMbwinData()
    {
        $this->Import_model->correctMbwinData();
        $this->load->view('manage_data');
    }
    function callcorrectMigratedData()
    {
        $this->Import_model->correctMigratedData();
        $this->load->view('manage_data');
    }
    */





    function calleraseAllData()
    {
      $this->Import_model->eraseAllData();
      $result['data1']=$this->Import_model->checkcoreln();
      $result['data2']=$this->Import_model->checkcoresv();
      $result['data3']=$this->Import_model->checkcoretd();
      $result['data4']=$this->Import_model->checkmbwinln();
      $result['data5']=$this->Import_model->checkmbwinsv();
      $result['data6']=$this->Import_model->checkmbwintd();
      $result['data7']=$this->Import_model->checkmigratedln();
      $result['data8']=$this->Import_model->checkmigratedsv();
      $result['data9']=$this->Import_model->checkmigratedtd();
      $this->load->view('manage_data',$result);
    }
    function calleraseCoreData()
    {
      $this->Import_model->eraseCoreData();
      $result['data1']=$this->Import_model->checkcoreln();
      $result['data2']=$this->Import_model->checkcoresv();
      $result['data3']=$this->Import_model->checkcoretd();
      $result['data4']=$this->Import_model->checkmbwinln();
      $result['data5']=$this->Import_model->checkmbwinsv();
      $result['data6']=$this->Import_model->checkmbwintd();
      $result['data7']=$this->Import_model->checkmigratedln();
      $result['data8']=$this->Import_model->checkmigratedsv();
      $result['data9']=$this->Import_model->checkmigratedtd();
      $this->load->view('manage_data',$result);
    }
    function calleraseMbwinData()
    {
      $this->Import_model->eraseMbwinData();
      $result['data1']=$this->Import_model->checkcoreln();
      $result['data2']=$this->Import_model->checkcoresv();
      $result['data3']=$this->Import_model->checkcoretd();
      $result['data4']=$this->Import_model->checkmbwinln();
      $result['data5']=$this->Import_model->checkmbwinsv();
      $result['data6']=$this->Import_model->checkmbwintd();
      $result['data7']=$this->Import_model->checkmigratedln();
      $result['data8']=$this->Import_model->checkmigratedsv();
      $result['data9']=$this->Import_model->checkmigratedtd();
      $this->load->view('manage_data',$result);
    }
    function calleraseMigratedData()
    {
      $this->Import_model->eraseMigratedData();
      $result['data1']=$this->Import_model->checkcoreln();
      $result['data2']=$this->Import_model->checkcoresv();
      $result['data3']=$this->Import_model->checkcoretd();
      $result['data4']=$this->Import_model->checkmbwinln();
      $result['data5']=$this->Import_model->checkmbwinsv();
      $result['data6']=$this->Import_model->checkmbwintd();
      $result['data7']=$this->Import_model->checkmigratedln();
      $result['data8']=$this->Import_model->checkmigratedsv();
      $result['data9']=$this->Import_model->checkmigratedtd();
      $this->load->view('manage_data',$result);
    }
    function calleraseValidatedData()
    {
      $this->Import_model->eraseValidatedData();
      $result['data1']=$this->Import_model->checkcoreln();
      $result['data2']=$this->Import_model->checkcoresv();
      $result['data3']=$this->Import_model->checkcoretd();
      $result['data4']=$this->Import_model->checkmbwinln();
      $result['data5']=$this->Import_model->checkmbwinsv();
      $result['data6']=$this->Import_model->checkmbwintd();
      $result['data7']=$this->Import_model->checkmigratedln();
      $result['data8']=$this->Import_model->checkmigratedsv();
      $result['data9']=$this->Import_model->checkmigratedtd();
      $this->load->view('manage_data',$result);
    }
    function calleraseErrorData()
    {
      $this->Import_model->eraseErrorData();
      $result['data1']=$this->Import_model->checkcoreln();
      $result['data2']=$this->Import_model->checkcoresv();
      $result['data3']=$this->Import_model->checkcoretd();
      $result['data4']=$this->Import_model->checkmbwinln();
      $result['data5']=$this->Import_model->checkmbwinsv();
      $result['data6']=$this->Import_model->checkmbwintd();
      $result['data7']=$this->Import_model->checkmigratedln();
      $result['data8']=$this->Import_model->checkmigratedsv();
      $result['data9']=$this->Import_model->checkmigratedtd();
      $this->load->view('manage_data',$result);
    }
    function calleraseInquireData()
    {
      $this->Import_model->eraseInquireData();
      $result['data1']=$this->Import_model->checkcoreln();
      $result['data2']=$this->Import_model->checkcoresv();
      $result['data3']=$this->Import_model->checkcoretd();
      $result['data4']=$this->Import_model->checkmbwinln();
      $result['data5']=$this->Import_model->checkmbwinsv();
      $result['data6']=$this->Import_model->checkmbwintd();
      $result['data7']=$this->Import_model->checkmigratedln();
      $result['data8']=$this->Import_model->checkmigratedsv();
      $result['data9']=$this->Import_model->checkmigratedtd();
      $this->load->view('manage_data',$result);
    }
}
?>