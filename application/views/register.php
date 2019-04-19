<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Register</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!--<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">-->

</head>
<body>
  <center>
<div class="container" style="width: 400px;">
    <h2 class="form-signin-heading">Register</h2>
    <form method="POST" action="<?php echo base_url()?>reg/form_validation">
      <?php
      if($this->uri->segment(2) == "inserted"){
        echo '<p class="text-success">Account Registered</p>';
      }
      ?>

      <div class="form-group">
        <input type="text" name="user_email" class="form-control" placeholder="Email">
        <span class="text-danger"><?php echo form_error("user_email"); ?></span>
      </div>
      <div class="form-group">
        <input type="password" name="user_password" class="form-control" placeholder="Password">
        <span class="text-danger"><?php echo form_error("user_password"); ?></span>
      </div>
      <div class="form-group">
        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
        <span class="text-danger"><?php echo form_error("confirm_password"); ?></span>
      </div>
      <div class="form-group">
        <input type="text" name="user_fname" class="form-control" placeholder="First Name">
        <span class="text-danger"><?php echo form_error("user_fname"); ?></span>
      </div>
      <div class="form-group">
        <input type="text" name="user_lname" class="form-control" placeholder="Last Name">
        <span class="text-danger"><?php echo form_error("user_lname"); ?></span>
      </div>
      <div class="form-group">
        <select class="form-control" name="user_level">
          <option value="1">Admin</option>
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
</body>
</html>