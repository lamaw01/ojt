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
}
?>