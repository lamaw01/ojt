<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>

    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/mystyle.css');?>" rel="stylesheet">
    
  </head>
  <body>
  <center>
      <div class="container" id="login_design">
       <div class="container" style="width: 370px;">
         <form class="form-signin" action="<?php echo site_url('login/auth');?>" method="post">
          <br>
           <h2 class="form-signin-heading">Please sign in</h2>
           <?php echo $this->session->flashdata('msg');?>
          <br>
           <div class="form-group">
           <label for="username" class="sr-only">Username</label>
           <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
           </div>
           <div class="form-group">
           <label for="password" class="sr-only">Password</label>
           <input type="password" name="password" class="form-control" placeholder="Password" required>
           </div>
           <!--
           <div class="checkbox">
             <label>
               <input type="checkbox" value="remember-me"> Remember me
             </label>
           </div>
         -->
           <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
           <a href="<?= base_url('Reg'); ?>" class="btn btn-lg btn-warning btn-block" >Register</a>
         </form>
       </div>
       </div> <!-- /container -->
  </center>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('assets/plugins/pace/pace.js'); ?>"></script>
  </body>
</html>