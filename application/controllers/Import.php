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
}
?>