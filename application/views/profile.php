<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
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
              <a class="navbar-brand" target="_blank" href="https://mass-specc.coop/"><img style="position:relative; top:-18px; left: -15px;" src="<?php echo base_url('assets/likeAlogo.png'); ?>"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav nav-tabs">
                <!--ACCESS MENUS FOR ADMIN-->
                <?php if($this->session->userdata('level')==='1'):?>
                  <li><a data-toggle="tab" href="<?php echo base_url('page');?>">Home</a></li>
                <!--ACCESS MENUS FOR STAFF-->
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li><a data-toggle="tab" href="<?php echo base_url('page/tech');?>">Home</a></li>
                <!--ACCESS MENUS FOR AUTHOR-->
                <?php else:?>
                  <li><a data-toggle="tab" href="<?php echo base_url('page/coop');?>">Home</a></li>
                <?php endif;?>
              </ul>
              <ul class="nav navbar-nav navbar-right nav-tabs" >
                <?php if($this->session->userdata('level')==='1'):?>
                  <li class="active"><a data-toggle="tab" href="<?php echo base_url('page/displayprofile');?>">Admin</a></li>
                  <li><a data-toggle="tab" href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li class="active"><a data-toggle="tab" href="<?php echo base_url('page/displayprofile');?>">Tech Staff</a></li>
                  <li><a data-toggle="tab" href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
                <?php else:?>
                  <li class="active"><a data-toggle="tab" href="<?php echo base_url('page/displayprofile');?>">Coop Staff</a></li>
                  <li><a data-toggle="tab" href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
                <?php endif;?>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>
      </div>
    </div>
    <div class="container">
      <h3 class="form-signin-heading firstfont"><b>Profile<b></h3>
      <br>
      
      <?php
      $i=1;
      foreach($data as $row)
      {

      echo "<h4><b>First Name :   </b>".$row->user_fname."</h4>";
      echo "<h4><b>Last Name :  </b>".$row->user_lname."</h4>";
      echo "<h4><b>Email :  </b>".$row->user_email."</h4>";
      echo "<h4><b>User Level :   </b>".$row->user_level."</h4>";

      $i++;
      }
       ?>
    </div>
 
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('assets/plugins/pace/pace.js'); ?>"></script>
  </body>
</html>