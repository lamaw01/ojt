<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
      <style>
        a,p{
        font-family: 'Open Sans', sans-serif;
      }
        p{
          text-align: center;
        }
      </style>
  </head>
  <body>
    <div class="container">
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
              <a class="navbar-brand" target="_blank" href="https://mass-specc.coop/"><img style="position:relative; top:-18px; left: -15px;" src="<?php echo base_url('assets/logo.png'); ?>"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav nav-tabs">
                <!--ACCESS MENUS FOR ADMIN-->
                <?php if($this->session->userdata('level')==='1'):?>
                  <li class="active"><a data-toggle="tab" href="<?php echo base_url('page');?>">Landing</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('loan');?>">Data</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('validated');?>">Validated</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('errors');?>">Errors</a></li>
                <!--ACCESS MENUS FOR STAFF-->
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li class="active"><a data-toggle="tab" href="<?php echo base_url('page/tech');?>">Landing</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('tech');?>">Data</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('validated');?>">Validated</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('errors');?>">Errors</a></li>
                <!--ACCESS MENUS FOR AUTHOR-->
                <?php else:?>
                  <li class="active"><a data-toggle="tab" href="<?php echo base_url('page/coop');?>">Landing</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('validated');?>">Validated</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('errors');?>">Errors</a></li>
                <?php endif;?>
              </ul>
              <ul class="nav navbar-nav navbar-right nav-tabs" >
                <?php if($this->session->userdata('level')==='1'):?>
                  <li><a data-toggle="tab" href="<?php echo base_url('page/displayprofile');?>">Admin</a></li>
                  <li><a data-toggle="tab" href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li><a data-toggle="tab" href="<?php echo base_url('page/displayprofile');?>">Tech Staff</a></li>
                  <li><a data-toggle="tab" href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
                <?php else:?>
                  <li><a data-toggle="tab" href="<?php echo base_url('page/displayprofile');?>">Coop Staff</a></li>
                  <li><a data-toggle="tab" href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
                <?php endif;?>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>
      </div>
    </div>

    <!--DISPLAY MIGRATED DATA FOR ADMIN-->
    <?php if($this->session->userdata('level')==='1'):?>
      <div class="container">
        <div class="page-header">
            <h3>Welcome <?php echo $this->session->userdata('user_fname');?></h3>
        </div>
      </div>
      <center>
      <div class="container" style="width: 200px;">
          <h2 class="form-signin-heading">Validate</h2>
          <br>
          <form action="<?php echo site_url('choose');?>" method="post">
            <div class="form-group">
              <select class="form-control" name="type_no">
                <option value="1">Loan</option>
                <option value="2">Savings</option>
                <option value="3">Time Deposit</option>
              </select>
            </div>
            <div class="form-group">
              <input type="submit" name="insert" value="Choose" class="btn btn-lg btn-primary btn-block">
            </div>
          </form>
      </div>
      </center>
    <?php elseif($this->session->userdata('level')==='2'):?>
       <div class="container">
        <div class="page-header">
            <h3>Welcome <?php echo $this->session->userdata('user_fname');?></h3>
        </div>
      </div>
    <?php else:?>
       <div class="container">
        <div class="page-header">
            <h3>Welcome <?php echo $this->session->userdata('user_fname');?></h3>
        </div>
      </div>
    <?php endif;?>
 
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>