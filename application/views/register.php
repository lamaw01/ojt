<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Register</title>

  <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?= base_url('assets/plugins/pace/pace.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/mystyle.css');?>" rel="stylesheet">

</head>
<body>
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
        <a href="<?= base_url(); ?>" class="btn btn-lg btn-warning btn-block">Back</a>
      </div>
    </form>
</div>
</center>
   <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
   <script src="<?= base_url('assets/plugins/pace/pace.js'); ?>"></script>
</body>
</html>