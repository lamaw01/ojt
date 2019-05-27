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
        redirect('import');
    }
    function importcoresv()
    {
        $this->import_model->coresv();
        redirect('import');
    }
    function importcoretd()
    {
        $this->import_model->coretd();
        redirect('import');
    }
    function importmbwinln()
    {
        $this->import_model->mbwinln();
        redirect('import');
    }
    function importmbwinsv()
    {
        $this->import_model->mbwinsv();
        redirect('import');
    }
    function importmbwintd()
    {
        $this->import_model->mbwintd();
        redirect('import');
    }
    function importmigratedln()
    {
        $this->import_model->migratedln();
        redirect('import');
    }
    function importmigratedsv()
    {
        $this->import_model->migratedsv();
        redirect('import');
    }
    function importmigratedtd()
    {
        $this->import_model->migratedtd();
        redirect('import');
    }

    function calleraseDashCoreLoan()
    {
        $this->import_model->eraseDashCoreLoan();
        $this->index();
    }

    function calleraseDashCoreSavings()
    {
        $this->import_model->eraseDashCoreSavings();
        $this->index();
    }
    function calleraseDashCoreTimeDeposit()
    {
        $this->import_model->eraseDashCoreTimeDeposit();
        $this->index();
    }
    function callminus100MbwinLoan()
    {
        $this->import_model->minus100MbwinLoan();
        $this->index();
    }
    function callminus100MbwinSavings()
    {
        $this->import_model->minus100MbwinSavings();
        $this->index();
    }
    function callminus100MbwinTimeDeposit()
    {
        $this->import_model->minus100MbwinTimeDeposit();
        $this->index();
    }
    function callupdateMigratedLoan()
    {
        $this->import_model->updateMigratedLoan();
        $this->index();
    }
    function callupdateMigratedSavings()
    {
        $this->import_model->updateMigratedSavings();
        $this->index();
    }
    function callupdateMigratedTimeDeposit()
    {
        $this->import_model->updateMigratedTimeDeposit();
        $this->index();
    }

}
?>