<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Errors</title>

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/plugins/pace/pace.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/mystyle.css');?>" rel="stylesheet">

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
                  <li class="active"><a data-toggle="tab" href="<?php echo base_url('errors_loan');?>">Error Details</a></li>
                <!--ACCESS MENUS FOR STAFF-->
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li><a data-toggle="tab" href="<?php echo base_url('page/tech');?>">Home</a></li>
                  <li class="active"><a data-toggle="tab" href="<?php echo base_url('errors_loan');?>">Error Details</a></li>
                <!--ACCESS MENUS FOR AUTHOR-->
                <?php else:?>
                  <li><a data-toggle="tab" href="<?php echo base_url('page/coop');?>">Home</a></li>
                  <li class="active"><a data-toggle="tab" href="<?php echo base_url('errors_loan');?>">Error Details</a></li>
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
      <center>
          <div class="container" style="width: 600px">
            <table class="table table-striped" width="600" border="0" cellspacing="5" cellpadding="5">
              <tr style="background-color: grey;">
                <th><p></p></th>
                <th><p>MBWIN</p></th>
                <th><p>Core</p></th>
              </tr>
              <?php if(count($data)): foreach($data as $row): ?>

              <tr>
                <td><p>Open Date</p></td>
                <td><p><?php echo $row->mbwintd_open_date; ?></p></td>
                <td><p><?php echo $row->coretd_open_date; ?></p></td>
              </tr>
              <tr>
                <td><p>Principal Amount</p></td>
                <td><p><?php echo $row->mbwintd_bal_amt; ?></p></td>
                <td><p><?php echo $row->coretd_principal_amt; ?></p></td>
              </tr>
              <tr>
                <td><p>Interest</p></td>
                <td><p><?php echo $row->mbwintd_int_bal_amt; ?></p></td>
                <td><p><?php echo $row->coretd_interest; ?></p></td>
              </tr>
              <tr>
                <td><p>Account Name</p></td>
                <td><p><?php echo $row->mbwintd_acc_name; ?></p></td>
                <td><p><?php echo $row->coretd_acc_name; ?></p></td>
              </tr>
              <?php endforeach; ?>
              <?php else: ?>

              <?php endif; ?>
               
            </table>
  
              <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
            </center>
          </div>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('assets/plugins/pace/pace.js'); ?>"></script>
  </body>
</html>