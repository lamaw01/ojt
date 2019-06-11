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
        <header style="text-align: center;"><p style="font-size: 20px; color: green;">Correct Data</p></header>
        <table class="table table-striped"  cellpadding="2">
          <tr>
            <?php
            if($data1 > 1 && $data2 > 1 && $data3 > 1 && $data4 > 1 && $data5 > 1 && $data6 > 1 && $data7 > 1 && $data8 > 1 && $data9 > 1) { ?>
              <td>
              <h5>All Data</h5>
              </td>
              <td>
              <button><a href='<?php echo base_url()?>import/callcorrectAllData'>Correct</a></button>
              </td>
            <?php } ?>
          </tr>
          <tr>
            <td>
              <h5>Core Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/callcorrectCoreData'>Correct</a></button>
            </td>
          </tr>
          <tr>
            <td>
              <h5>Mbwin Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/callcorrectMbwinData'>Correct</a></button>
            </td>
          </tr>
          <tr>
            <td>
              <h5>Migrated Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/callcorrectMigratedData'>Correct</a></button>
            </td>
          </tr>
        </table>  
        <table class="table table-striped"  cellpadding="2">
          <header style="text-align: center; padding-top: 100px;"><p style="font-size: 20px; color: blue;">Backup Database</p></header>
          <tr>
            <td>
              <h5>Backup Database</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/backup'>Export</a></button>
            </td>
          </tr>
        </table>
      </div>
      <div class="container" style="width: 150px; height: 1px; margin-top: 15px; float: center;">
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
        elseif($this->uri->segment(2) == "calldeleteCoreLoan") {
          echo '<p class="text-danger">Data Deleted</p>';
        }
        elseif($this->uri->segment(2) == "calldeleteCoreSavings") {
          echo '<p class="text-danger">Data Deleted</p>';
        }
        elseif($this->uri->segment(2) == "calldeleteCoreTimeDeposit") {
          echo '<p class="text-danger">Data Deleted</p>';
        }
        elseif($this->uri->segment(2) == "calldeleteMbwinLoan") {
          echo '<p class="text-danger">Data Deleted</p>';
        }
        elseif($this->uri->segment(2) == "calldeleteMbwinSavings") {
          echo '<p class="text-danger">Data Deleted</p>';
        }
        elseif($this->uri->segment(2) == "calldeleteMbwinTimeDeposit") {
          echo '<p class="text-danger">Data Deleted</p>';
        }
        elseif($this->uri->segment(2) == "calldeleteMigratedLoan") {
          echo '<p class="text-danger">Data Deleted</p>';
        }
        elseif($this->uri->segment(2) == "calldeleteMigratedSavings") {
          echo '<p class="text-danger">Data Deleted</p>';
        }
        elseif($this->uri->segment(2) == "calldeleteMigratedTimeDeposit") {
          echo '<p class="text-danger">Data Deleted</p>';
        }
        elseif($this->uri->segment(2) == "calldeleteAllReports") {
          echo '<p class="text-danger">Data Deleted</p>';
        }
        elseif($this->uri->segment(2) == "calldeleteAllInquire") {
          echo '<p class="text-danger">Data Deleted</p>';
        }
        ?>
      </div>
      <div class="container-fluid" style="width: 350px; margin-top: -15px; float: right;">
        <table class="table table-striped"  cellpadding="2">
        <header style="text-align: center;"><p style="font-size: 20px; color: red;">Delete Data</p></header>
          <tr>
            <td>
              <h5>All Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/calleraseAllData'>Delete</a></button>
            </td>
          </tr>
            <td>
              <h5>Core Loan Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/calldeleteCoreLoan'>Delete</a></button>
            </td>
          </tr>
          <tr>
            <td>
              <h5>Core Savings Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/calldeleteCoreSavings'>Delete</a></button>
            </td>
          </tr>
          <tr>
            <td>
              <h5>Core Time Deposit Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/calldeleteCoreTimeDeposit'>Delete</a></button>
            </td>
          </tr>
          <tr>
            <td>
              <h5>Mbwin Loan Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/calldeleteMbwinLoan'>Delete</a></button>
            </td>
          </tr>
          <tr>
            <td>
              <h5>Mbwin Savings Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/calldeleteMbwinSavings'>Delete</a></button>
            </td>
          </tr>
          <tr>
            <td>
              <h5>Mbwin Time Deposit Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/calldeleteMbwinTimeDeposit'>Delete</a></button>
            </td>
          </tr>
          <tr>
            <td>
              <h5>Migrated Loan Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/calldeleteMigratedLoan'>Delete</a></button>
            </td>
          </tr>
          <tr>
            <td>
              <h5>Migrated Savings Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/calldeleteMigratedSavings'>Delete</a></button>
            </td>
          </tr>
          <tr>
            <td>
              <h5>Migrated Time Deposit Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/calldeleteMigratedTimeDeposit'>Delete</a></button>
            </td>
          </tr>
          <tr>
            <td>
              <h5>All Reports Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/calldeleteAllReports'>Delete</a></button>
            </td>
          </tr>
          <tr>
            <td>
              <h5>All Inquire Data</h5>
            </td>
            <td>
              <button><a href='<?php echo base_url()?>import/calldeleteAllInquire'>Delete</a></button>
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