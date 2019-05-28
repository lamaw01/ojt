<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import extends CI_Controller
{
    public $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('import_model');
    }
    function index()
    {
        $this->load->view('dashboard_view');
    }
    function importcoreln()
    {
        $this->import_model->coreln();
        $this->load->view('dashboard_view');
    }
    function importcoresv()
    {
        $this->import_model->coresv();
        $this->load->view('dashboard_view');
    }
    function importcoretd()
    {
        $this->import_model->coretd();
        $this->load->view('dashboard_view');
    }
    function importmbwinln()
    {
        $this->import_model->mbwinln();
        $this->load->view('dashboard_view');
    }
    function importmbwinsv()
    {
        $this->import_model->mbwinsv();
        $this->load->view('dashboard_view');
    }
    function importmbwintd()
    {
        $this->import_model->mbwintd();
        $this->load->view('dashboard_view');
    }
    function importmigratedln()
    {
        $this->import_model->migratedln();
        $this->load->view('dashboard_view');
    }
    function importmigratedsv()
    {
        $this->import_model->migratedsv();
        $this->load->view('dashboard_view');
    }
    function importmigratedtd()
    {
        $this->import_model->migratedtd();
        $this->load->view('dashboard_view');
    }





    function callcorrectAllData()
    {
        $this->import_model->correctAllData();
        $this->load->view('manage_data');
    }
    function calleraseDashCoreLoan()
    {
        $this->import_model->eraseDashCoreLoan();
        $this->load->view('manage_data');
    }
    function calleraseDashCoreSavings()
    {
        $this->import_model->eraseDashCoreSavings();
        $this->load->view('manage_data');
    }
    function calleraseDashCoreTimeDeposit()
    {
        $this->import_model->eraseDashCoreTimeDeposit();
        $this->load->view('manage_data');
    }
    function callminus100MbwinLoan()
    {
        $this->import_model->minus100MbwinLoan();
        $this->load->view('manage_data');
    }
    function callminus100MbwinSavings()
    {
        $this->import_model->minus100MbwinSavings();
        $this->load->view('manage_data');
    }
    function callminus100MbwinTimeDeposit()
    {
        $this->import_model->minus100MbwinTimeDeposit();
        $this->load->view('manage_data');
    }
    function callupdateMigratedLoan()
    {
        $this->import_model->updateMigratedLoan();
        $this->load->view('manage_data');
    }
    function callupdateMigratedSavings()
    {
        $this->import_model->updateMigratedSavings();
        $this->load->view('manage_data');
    }
    function callupdateMigratedTimeDeposit()
    {
        $this->import_model->updateMigratedTimeDeposit();
        $this->load->view('manage_data');
    }





    function calleraseAllData()
    {
        $this->import_model->eraseAllData();
        $this->load->view('manage_data');
    }
    function calleraseCoreData()
    {
        $this->import_model->eraseCoreData();
        $this->load->view('manage_data');
    }
    function calleraseMbwinData()
    {
        $this->import_model->eraseMbwinData();
        $this->load->view('manage_data');
    }
    function calleraseMigratedData()
    {
        $this->import_model->eraseMigratedData();
        $this->load->view('manage_data');
    }
    function calleraseValidatedData()
    {
        $this->import_model->eraseValidatedData();
        $this->load->view('manage_data');
    }
    function calleraseErrorData()
    {
        $this->import_model->eraseErrorData();
        $this->load->view('manage_data');
    }
    function calleraseInquireData()
    {
        $this->import_model->eraseInquireData();
        $this->load->view('manage_data');
    }
}
?>