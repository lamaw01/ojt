<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home</title>

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
      <style>
        a,p{
        font-family: 'Open Sans', sans-serif;
        }
        #left{
          float:left;width:100px;
        }
        #right{
          float:right;width:100px;
        }
        #center{
          margin:0 auto;width:100px;
        }
        h2{
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
                  <li class="active"><a data-toggle="tab" href="<?php echo base_url('page');?>">Home</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('loan');?>">L</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('savings');?>">S</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('time_deposit');?>">TD</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('validated_loan');?>">VL</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('validated_savings');?>">VS</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('validated_time_deposit');?>">VTD</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('errors_loan');?>">EL</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('errors_savings');?>">ES</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('errors_time_deposit');?>">ETD</a></li>
                <!--ACCESS MENUS FOR STAFF-->
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li class="active"><a data-toggle="tab" href="<?php echo base_url('page/tech');?>">Home</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('loan');?>">L</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('savings');?>">S</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('time_deposit');?>">TD</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('validated_loan');?>">VL</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('validated_savings');?>">VS</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('validated_time_deposit');?>">VTD</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('errors_loan');?>">EL</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('errors_savings');?>">ES</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('errors_time_deposit');?>">ETD</a></li>
                <!--ACCESS MENUS FOR AUTHOR-->
                <?php else:?>
                  <li class="active"><a data-toggle="tab" href="<?php echo base_url('page/coop');?>">Home</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('validated_loan');?>">VL</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('validated_savings');?>">VS</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('validated_time_deposit');?>">VTD</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('errors_loan');?>">EL</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('errors_savings');?>">ES</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('errors_time_deposit');?>">ETD</a></li>
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
      <div class="container">
        <div class="page-header">
            <h3>Welcome <?php echo $this->session->userdata('user_fname');?></h3>
        </div>
      </div>
      <div class="container" id="left" style="width: 200px;">
          <h2 class="form-signin-heading">Check</h2>
          <br>
          <form action="<?php echo site_url('choose/check');?>" method="post">
            <div class="form-group">
              <select class="form-control" name="check_type">
                <option hidden selected>---Select---</option>
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
      <div class="container" id="right" style="width: 200px;">
          <h2 class="form-signin-heading">Errors</h2>
          <br>
          <form action="<?php echo site_url('choose/errors');?>" method="post">
            <div class="form-group">
              <select class="form-control" name="errors_type">
                <option hidden selected>---Select---</option>
                <option value="7">Loan</option>
                <option value="8">Savings</option>
                <option value="9">Time Deposit</option>
              </select>
            </div>
            <div class="form-group">
              <input type="submit" name="insert" value="Choose" class="btn btn-lg btn-primary btn-block">
            </div>
          </form>
      </div>
      <div class="container" id="center" style="width: 200px;">
          <h2 class="form-signin-heading">Validated</h2>
          <br>
          <form action="<?php echo site_url('choose/validated');?>" method="post">
            <div class="form-group">
              <select class="form-control" name="validated_type">
                <option hidden selected>---Select---</option>
                <option value="4">Loan</option>
                <option value="5">Savings</option>
                <option value="6">Time Deposit</option>
              </select>
            </div>
            <div class="form-group">
              <input type="submit" name="insert" value="Choose" class="btn btn-lg btn-primary btn-block">
            </div>
          </form>
      </div>
    </div>

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