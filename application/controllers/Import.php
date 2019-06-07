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
    function callcorrectCoreData()
    {
        $this->Import_model->correctCoreData();
        redirect('page/managedata');
    }
    function callcorrectMbwinData()
    {
        $this->Import_model->correctMbwinData();
        redirect('page/managedata');
    }
    function callcorrectMigratedData()
    {
        $this->Import_model->correctMigratedData();
        redirect('page/managedata');
    }





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
    function calldeleteCoreLoan()
    {
      $this->Import_model->deleteCoreLoan();
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
    function calldeleteCoreSavings()
    {
      $this->Import_model->deleteCoreSavings();
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
    function calldeleteCoreTimeDeposit()
    {
      $this->Import_model->deleteCoreTimeDeposit();
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
    function calldeleteMbwinLoan()
    {
      $this->Import_model->deleteMbwinLoan();
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
    function calldeleteMbwinSavings()
    {
      $this->Import_model->deleteMbwinSavings();
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
    function calldeleteMbwinTimeDeposit()
    {
      $this->Import_model->deleteMbwinTimeDeposit();
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
    function calldeleteMigratedLoan()
    {
      $this->Import_model->deleteMigratedLoan();
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
    function calldeleteMigratedSavings()
    {
      $this->Import_model->deleteMigratedSavings();
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
    function calldeleteMigratedTimeDeposit()
    {
      $this->Import_model->deleteMigratedTimeDeposit();
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
    function calldeleteAllReports()
    {
      $this->Import_model->deleteAllReports();
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
    function calldeleteAllInquire()
    {
      $this->Import_model->deleteAllInquire();
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