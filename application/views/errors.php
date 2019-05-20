<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Errors</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/plugins/pace/pace.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/mystyle.css');?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet">

  </head>
  <body>
    <div class="container-fluid">
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
              <ul class="nav navbar-nav nav-tabs">
                <!--ACCESS MENUS FOR ADMIN-->
                <?php if($this->session->userdata('level')==='1'):?>
                  <li><a href="<?php echo base_url('page');?>">Home</a></li>
                  <li><a href="<?php echo base_url('page/check');?>">Check</a></li>
                  <li><a href="<?php echo base_url('page/validated');?>">Validated</a></li>
                  <li class="active"><a href="<?php echo base_url('page/errors');?>">Errors</a></li>
                <!--ACCESS MENUS FOR STAFF-->
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li><a href="<?php echo base_url('page/tech');?>">Home</a></li>
                  <li><a href="<?php echo base_url('page/check');?>">Check</a></li>
                  <li><a href="<?php echo base_url('page/validated');?>">Validated</a></li>
                  <li class="active"><a href="<?php echo base_url('page/errors');?>">Errors</a></li>
                <!--ACCESS MENUS FOR AUTHOR-->
                <?php else:?>
                  <li><a href="<?php echo base_url('page/coop');?>">Home</a></li>
                  <li><a href="<?php echo base_url('page/validated');?>">Validated</a></li>
                  <li class="active"><a href="<?php echo base_url('page/errors');?>">Errors</a></li>
                <?php endif;?>
              </ul>
              <ul class="nav navbar-nav navbar-right nav-tabs" >
                <?php if($this->session->userdata('level')==='1'):?>
                  <li><a href="<?php echo base_url('page/displayprofile');?>">Admin</a></li>
                  <li><a href="<?php echo base_url('reg');?>">Manage Account</a></li>
                  <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li><a href="<?php echo base_url('page/displayprofile');?>">Tech Staff</a></li>
                  <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
                <?php else:?>
                  <li><a href="<?php echo base_url('page/displayprofile');?>">Coop Staff</a></li>
                  <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
                <?php endif;?>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>
      </div>
    </div>

    <center>
    <div class="container" id="div-chk-back">
      <div class="container-fluid">
        <div class="page-header" id="flesh">
            <h3 class="pargh"><strong>Errors</strong></h3>
        </div>
      </div>
      <div class="container-fluid">
        <p class="pargh"><font size="3">Display error data</font></p>
      </div>
        <div id="div-marg">
          <form action="<?php echo site_url('choose/errors');?>" method="post">
            <div class="container col-sm-4">
              <a value="1" class="this-size btn btn-lg btn-primary" href="<?php echo site_url('errors/loan') ?>">Loan</a>
            </div>
            <div class="container col-sm-4">
              <a value="2" class="this-size btn btn-lg btn-success" href="<?php echo site_url('errors/savings') ?>">Savings</a>
            </div>
            <div class="container col-sm-4">
              <a value="3" class="this-size btn btn-lg btn-warning" href="<?php echo site_url('errors/time_deposit') ?>">Time Deposit</a>
            </div>
          </form>
        </div>
      </div>
    </center>

    <!--DISPLAY MIGRATED DATA FOR ADMIN-->

    <script src="<?php echo base_url('assets/plugins/jquery/jquery-3.4.1.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/pace/pace.js'); ?>"></script>
    
  </body>
</html>