<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/plugins/pace/pace.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/mystyle.css');?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet">
    
  </head>
  <body>
  <center>
      <div class="container" id="login_design">
       <div class="container-fluid">
         <form class="form-signin" action="<?php echo site_url('login/auth');?>" method="post">
          <br>
           <h2 class="form-signin-heading">Please sign in</h2>
           <?php echo $this->session->flashdata('msg');?>
          <br>
           <div class="form-group has-feedback has-feedback-left">
            <i class="form-control-feedback glyphicon glyphicon-user"></i>
           <label for="username" class="sr-only">Username</label>
           <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
           </div>
           <div class="form-group has-feedback has-feedback-left">
            <i class="form-control-feedback glyphicon glyphicon-lock"></i>
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
         </form>
       </div>
       </div> <!-- /container -->
  </center>

    <script src="<?php echo base_url('assets/plugins/jquery/jquery-3.4.1.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/pace/pace.js'); ?>"></script>
    
  </body>
</html>