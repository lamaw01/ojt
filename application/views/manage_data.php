<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Manage Data</title>

    <link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/plugins/pace/pace.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/mystyle.css');?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet">
    
    <style>
      th {
        text-align: center;
      }
      td {
        text-align: center;
      }
      h4, h3, a{
        font-family: 'Open Sans', sans-serif;
      }
      th, td{
        padding: 10px;
      }
    </style>
    
  </head>
  <body>
    <div class="container-fluid" style="margin-top: .1em;">
      <div class="row">
      <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" target="_blank" href="https://mass-specc.coop/"><img style="position:relative; top:-18px; left: -15px;" src="<?php echo base_url('assets/img/likeAlogo.png'); ?>"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav nav-tabs main-navigation">
                <!--ACCESS MENUS FOR ADMIN-->
                <?php if($this->session->userdata('level')==='1'):?>
                  <li><a href="<?php echo base_url('page');?>">Home</a></li>
                  <li><a href="<?php echo base_url('page/check');?>">Check</a></li>

                  <li><a href="#">Reports <span class="caret"></span></a>
                    <ul>
                  <li><a href="#">Validated</a>
                      <ul>
                        <li><a href="<?php echo base_url('validated/loan');?>">Loan</a></li>
                        <li><a href="<?php echo base_url('validated/savings');?>">Savings</a></li>
                        <li><a href="<?php echo base_url('validated/time_deposit');?>">Time Deposit</a></li>
                      </ul>
                    </li>
                  <li><a href="#">Errors</a>
                    <ul>
                      <li><a href="<?php echo base_url('errors/loan');?>">Loan</a></li>
                      <li><a href="<?php echo base_url('errors/savings');?>">Savings</a></li>
                      <li><a href="<?php echo base_url('errors/time_deposit');?>">Time Deposit</a></li>
                    </ul>
                  </li>
                </ul>
                  </li>
                  <li><a href="#">Inquire <span class="caret"></span></a>
                    <ul>
                      <li><a href="<?php echo base_url('inquire/loan');?>">Loan</a></li>
                      <li><a href="<?php echo base_url('inquire/savings');?>">Savings</a></li>
                      <li><a href="<?php echo base_url('inquire/time_deposit');?>">Time Deposit</a></li>
                    </ul>
                  </li>
                <!--ACCESS MENUS FOR STAFF-->
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li><a href="<?php echo base_url('page/tech');?>">Home</a></li>
                  <li><a href="<?php echo base_url('page/check');?>">Check</a></li>
                  <li><a href="#">Reports <span class="caret"></span></a>
                    <ul>
                  <li><a href="#">Validated</a>
                      <ul>
                        <li><a href="<?php echo base_url('validated/loan');?>">Loan</a></li>
                        <li><a href="<?php echo base_url('validated/savings');?>">Savings</a></li>
                        <li><a href="<?php echo base_url('validated/time_deposit');?>">Time Deposit</a></li>
                      </ul>
                    </li>
                  <li><a href="#">Errors</a>
                    <ul>
                      <li><a href="<?php echo base_url('errors/loan');?>">Loan</a></li>
                      <li><a href="<?php echo base_url('errors/savings');?>">Savings</a></li>
                      <li><a href="<?php echo base_url('errors/time_deposit');?>">Time Deposit</a></li>
                    </ul>
                  </li>
                </ul>
                  </li>
                  <li><a href="#">Inquire <span class="caret"></span></a>
                    <ul>
                      <li><a href="<?php echo base_url('inquire/loan');?>">Loan</a></li>
                      <li><a href="<?php echo base_url('inquire/savings');?>">Savings</a></li>
                      <li><a href="<?php echo base_url('inquire/time_deposit');?>">Time Deposit</a></li>
                    </ul>
                  </li>
                <!--ACCESS MENUS FOR AUTHOR-->
                <?php else:?>
                  <li><a href="<?php echo base_url('page/coop');?>">Home</a></li>
                  <li><a href="#">Reports <span class="caret"></span></a>
                    <ul>
                  <li><a href="#">Validated</a>
                      <ul>
                        <li><a href="<?php echo base_url('validated/loan');?>">Loan</a></li>
                        <li><a href="<?php echo base_url('validated/savings');?>">Savings</a></li>
                        <li><a href="<?php echo base_url('validated/time_deposit');?>">Time Deposit</a></li>
                      </ul>
                    </li>
                  <li><a href="#">Errors</a>
                    <ul>
                      <li><a href="<?php echo base_url('errors/loan');?>">Loan</a></li>
                      <li><a href="<?php echo base_url('errors/savings');?>">Savings</a></li>
                      <li><a href="<?php echo base_url('errors/time_deposit');?>">Time Deposit</a></li>
                    </ul>
                  </li>
                </ul>
                  </li>
                  <li><a href="#">Inquire <span class="caret"></span></a>
                    <ul>
                      <li><a href="<?php echo base_url('inquire/loan');?>">Loan</a></li>
                      <li><a href="<?php echo base_url('inquire/savings');?>">Savings</a></li>
                      <li><a href="<?php echo base_url('inquire/time_deposit');?>">Time Deposit</a></li>
                    </ul>
                  </li>
                <?php endif;?>
              </ul>
              <ul class="nav navbar-nav navbar-right nav-tabs" >
                <?php if($this->session->userdata('level')==='1'):?>
                  <li class="active"><a href="<?php echo base_url('page/managedata');?>">Manage Data</a></li>
                  <li><a href="<?php echo base_url('reg');?>">Create Account</a></li>
                  <li><a href="<?php echo base_url('page/displayprofile');?>">Admin</a></li>
                  <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li class="active"><a href="<?php echo base_url('page/displayprofile');?>">Tech Staff</a></li>
                  <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
                <?php else:?>
                  <li class="active"><a href="<?php echo base_url('page/displayprofile');?>">Coop Staff</a></li>
                  <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
                <?php endif;?>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>
      </div>
    </div>
    <div class="container">
      <div class="container-fluid" style="width: 350px; float: left;">
        <table class="table table-striped"  cellpadding="2">
          <tr>
            <td>
              <h5>Correct All Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/callcorrectAllData'>Correct</a></button>
            </td>
          </tr>
        <!--
          <tr>
            <td>
              <h5>Correct Core Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/callcorrectCoreData'>Correct</a></button>
            </td>
          </tr>
          <tr>
            <td>
              <h5>Correct Mbwin Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/callcorrectMbwinData'>Correct</a></button>
            </td>
          </tr>
          <tr>
            <td>
              <h5>Correct Migrated Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/callcorrectMigratedData'>Correct</a></button>
            </td>
          </tr>
        -->
        </table>
      </div>
        <div style="margin-left: 250px; margin-top: 15px;">
            <p>Click only once</p>
        </div>
      <div class="container" style="width: 150px; height: 1px; margin-top: -30px;">
        <?php
        if($this->uri->segment(2) == "callcorrectAllData"){
          echo '<p class="text-success">Data Corrected</p>';
        }
        elseif($this->uri->segment(2) == "callcorrectCoreData") {
          echo '<p class="text-success">Data Corrected</p>';
        }
        elseif($this->uri->segment(2) == "callcorrectMbwinData") {
          echo '<p class="text-success">Data Corrected</p>';
        }
        elseif($this->uri->segment(2) == "callcorrectMigratedData") {
          echo '<p class="text-success">Data Corrected</p>';
        }
        elseif($this->uri->segment(2) == "calleraseAllData") {
          echo '<p class="text-danger">Data Deleted</p>';
        }
        elseif($this->uri->segment(2) == "calleraseCoreData") {
          echo '<p class="text-danger">Data Deleted</p>';
        }
        elseif($this->uri->segment(2) == "calleraseMbwinData") {
          echo '<p class="text-danger">Data Deleted</p>';
        }
        elseif($this->uri->segment(2) == "calleraseMigratedData") {
          echo '<p class="text-danger">Data Deleted</p>';
        }
        elseif($this->uri->segment(2) == "calleraseValidatedData") {
          echo '<p class="text-danger">Data Deleted</p>';
        }
        elseif($this->uri->segment(2) == "calleraseErrorData") {
          echo '<p class="text-danger">Data Deleted</p>';
        }
        elseif($this->uri->segment(2) == "calleraseInquireData") {
          echo '<p class="text-danger">Data Deleted</p>';
        }
        ?>
      </div>
      <div class="container-fluid" style="width: 350px; float: right; margin-top: -15px;">
        <table class="table table-striped"  cellpadding="2">
          <tr>
            <td>
              <h5>Delete All Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/calleraseAllData'>Delete</a></button>
            </td>
          </tr>
          <tr>
            <td>
              <h5>Delete Core Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/calleraseCoreData'>Delete</a></button>
            </td>
          </tr>
          <tr>
            <td>
              <h5>Delete Mbwin Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/calleraseMbwinData'>Delete</a></button>
            </td>
          </tr>
          <tr>
            <td>
              <h5>Delete Migrated Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/calleraseMigratedData'>Delete</a></button>
            </td>
          </tr>
          <tr>
            <td>
              <h5>Delete Validated Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/calleraseValidatedData'>Delete</a></button>
            </td>
          </tr>
          <tr>
            <td>
              <h5>Delete Error Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/calleraseErrorData'>Delete</a></button>
            </td>
          </tr>
          <tr>
            <td>
              <h5>Delete Inquire Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/calleraseInquireData'>Delete</a></button>
            </td>
          </tr>
        </table>
      </div>
    </div>
    <script src="<?php echo base_url('assets/plugins/jquery/jquery-3.4.1.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/pace/pace.js'); ?>"></script>
    
  </body>
</html>