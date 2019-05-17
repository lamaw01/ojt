<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Manage Account</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/plugins/pace/pace.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/mystyle.css');?>" rel="stylesheet">
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
    </style>
    
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
                  <li><a data-toggle="tab" href="<?php echo base_url('page');?>">Home</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('page/check');?>">Check</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('page/validated');?>">Validated</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('page/errors');?>">Errors</a></li>
                <!--ACCESS MENUS FOR STAFF-->
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li><a data-toggle="tab" href="<?php echo base_url('page/tech');?>">Home</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('page/check');?>">Check</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('page/validated');?>">Validated</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('page/errors');?>">Errors</a></li>
                <!--ACCESS MENUS FOR AUTHOR-->
                <?php else:?>
                  <li><a data-toggle="tab" href="<?php echo base_url('page/coop');?>">Home</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('page/validated');?>">Validated</a></li>
                  <li><a data-toggle="tab" href="<?php echo base_url('page/errors');?>">Errors</a></li>
                <?php endif;?>
              </ul>
              <ul class="nav navbar-nav navbar-right nav-tabs" >
                <?php if($this->session->userdata('level')==='1'):?>
                  <li><a data-toggle="tab" href="<?php echo base_url('page/displayprofile');?>">Admin</a></li>
                  <li class="active"><a data-toggle="tab" href="<?php echo base_url('reg');?>">Manage Account</a></li>
                  <li><a data-toggle="tab" href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li><a data-toggle="tab" href="<?php echo base_url('page/displayprofile');?>">Tech Staff</a></li>
                  <li><a data-toggle="tab" href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
                <?php else:?>
                  <li></li>><a data-toggle="tab" href="<?php echo base_url('page/displayprofile');?>">Coop Staff</a></li>
                  <li><a data-toggle="tab" href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
                <?php endif;?>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>
      </div>
    </div>
    <center>
<div class="container" id="register_design">
  <br>
    <h2 class="form-signin-heading">Register</h2>
    <form method="POST" action="<?php echo base_url()?>reg/form_validation">
      <br>
      <?php
      if($this->uri->segment(2) == "inserted"){
        echo '<p class="text-success">Account Registered</p>';
      }
      ?>
      <div class="form-group">
        <input type="text" name="user_name" class="form-control" placeholder="Username" required>
        <span class="text-danger"><?php echo form_error("user_name"); ?></span>
      </div>
      <div class="form-group">
        <input type="password" name="user_password" class="form-control" placeholder="Password" required>
        <span class="text-danger"><?php echo form_error("user_password"); ?></span>
      </div>
      <div class="form-group">
        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
        <span class="text-danger"><?php echo form_error("confirm_password"); ?></span>
      </div>
      <div class="form-group">
        <input type="text" name="user_fname" class="form-control" placeholder="First Name" required>
        <span class="text-danger"><?php echo form_error("user_fname"); ?></span>
      </div>
      <div class="form-group">
        <input type="text" name="user_lname" class="form-control" placeholder="Last Name" required>
        <span class="text-danger"><?php echo form_error("user_lname"); ?></span>
      </div>
      <div class="form-group">
        <select class="form-control" name="user_level">
          <!--<option value="1">Admin</option>--->
          <option value="2">Tech staff</option>
          <option value="3">Coop staff</option>
        </select>
      </div>
      <div class="form-group">
        <input type="submit" name="insert" value="Register" class="btn btn-lg btn-primary btn-block">
      </div>
    </form>
</div>
</center>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('assets/plugins/pace/pace.js'); ?>"></script>
  </body>
</html>