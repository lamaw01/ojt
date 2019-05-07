<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/plugins/pace/pace.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/mystyle.css');?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet">
  </head>
  <body>


    <?php if($this->session->userdata('level')==='1'):?>
  <div class="container">    
      <div class="container">
        <div class="page-header">
            <h3 class="firstfont"><strong>Welcome</strong> <strong><?php echo $this->session->userdata('user_fname');?></strong></h3>
        </div>
      </div>
      <div class="container" id="left">
          <h2 class="form-signin-heading"><font size="6" color="white">Check</font></h2>
          <br>
          <form action="<?php echo site_url('choose/check');?>" method="post">
            <div class="form-group">
              <select class="form-control" name="check_type">
                <option hidden selected>Select</option>
                <option class="#opt_indent" value="1">Loan</option>
                <option class="#opt_indent" value="2">Savings</option>
                <option class="#opt_indent" value="3">Time Deposit</option>
              </select>
            </div>
            <div class="form-group">
              <input type="submit" name="insert" value="Choose" class="btn btn-lg btn-default btn-block">
              <br>
              <br>
              <p class="pargh"><font size="3" color="white">Check to compare data from Mbwin to Core.</font></p>
            </div>
          </form>
      </div>
      <div class="container" id="right">
          <h2 class="form-signin-heading"><font size="6" color="white">Errors</font></h2>
          <br>
          <form action="<?php echo site_url('choose/errors');?>" method="post">
            <div class="form-group">
              <select class="form-control" name="errors_type">
                <option hidden selected>Select</option>
                <option value="7">Loan</option>
                <option value="8">Savings</option>
                <option value="9">Time Deposit</option>
              </select>
            </div>
            <div class="form-group">
              <input type="submit" name="insert" value="Choose" class="btn btn-lg btn-default btn-block">
              <br>
              <br>
              <p class="pargh"><font size="3" color="white">Display error data.</font></p>
            </div>
          </form>
      </div>
      <div class="container" id="center">
          <h2 class="form-signin-heading"><font size="6" color="white">Validated</font></h2>
          <br>
          <form action="<?php echo site_url('choose/validated');?>" method="post">
            <div class="form-group">
              <select class="form-control" name="validated_type">
                <option hidden selected>Select</option>
                <option value="4">Loan</option>
                <option value="5">Savings</option>
                <option value="6">Time Deposit</option>
              </select>
            </div>
            <div class="form-group">
              <input type="submit" name="insert" value="Choose" class="btn btn-lg btn-default btn-block" >
              <br>
              <br>
              <p class="pargh"><font size="3" color="white">Display validated data.</font></p>
            </div>
          </form>
      </div>
    </div>

    <?php elseif($this->session->userdata('level')==='2'):?>
       <div class="container">    
      <div class="container">
        <div class="page-header">
            <h3 class="firstfont"><b>Welcome</b> <b><?php echo $this->session->userdata('user_fname');?></b></h3>
        </div>
      </div>
      <div class="container" id="left">
          <h2 class="form-signin-heading"><font size="6" color="white">Check</font></h2>
          <br>
          <form action="<?php echo site_url('choose/check');?>" method="post">
            <div class="form-group">
              <select class="form-control" name="check_type">
                <option hidden selected>Select</option>
                <option value="1">Loan</option>
                <option value="2">Savings</option>
                <option value="3">Time Deposit</option>
              </select>
            </div>
            <div class="form-group">
              <input type="submit" name="insert" value="Choose" class="btn btn-lg btn-default btn-block">
              <br>
              <br>
              <p class="pargh"><font size="3" color="white">Check to compare data from Mbwin to Core.</font></p>
            </div>
          </form>
      </div>
      <div class="container" id="right">
          <h2 class="form-signin-heading"><font size="6" color="white">Errors</font></h2>
          <br>
          <form action="<?php echo site_url('choose/errors');?>" method="post">
            <div class="form-group">
              <select class="form-control" name="errors_type">
                <option hidden selected>Select</option>
                <option value="7">Loan</option>
                <option value="8">Savings</option>
                <option value="9">Time Deposit</option>
              </select>
            </div>
            <div class="form-group">
              <input type="submit" name="insert" value="Choose" class="btn btn-lg btn-default btn-block">
              <br>
              <br>
              <p class="pargh"><font size="3" color="white">Display error data.</font></p>
            </div>
          </form>
      </div>
      <div class="container" id="center">
          <h2 class="form-signin-heading"><font size="6" color="white">Validated</font></h2>
          <br>
          <form action="<?php echo site_url('choose/validated');?>" method="post">
            <div class="form-group">
              <select class="form-control" name="validated_type">
                <option hidden selected>Select</option>
                <option value="4">Loan</option>
                <option value="5">Savings</option>
                <option value="6">Time Deposit</option>
              </select>
            </div>
            <div class="form-group">
              <input type="submit" name="insert" value="Choose" class="btn btn-lg btn-default btn-block">
              <br>
              <br>
              <p class="pargh"><font size="3" color="white">Display validated data.</font></p>
            </div>
          </form>
      </div>
    </div>
    <?php else:?>
       <div class="container">    
      <div class="container">
        <div class="page-header">
            <h3 class="firstfont"><b>Welcome</b> <b><?php echo $this->session->userdata('user_fname');?></b></h3>
        </div>
      </div>
      <div class="container" id="left">
          <h2 class="form-signin-heading"><font size="6" color="white">Errors</font></h2>
          <br>
          <form action="<?php echo site_url('choose/errors');?>" method="post">
            <div class="form-group">
              <select class="form-control" name="errors_type">
                <option hidden selected>Select</option>
                <option value="7">Loan</option>
                <option value="8">Savings</option>
                <option value="9">Time Deposit</option>
              </select>
            </div>
            <div class="form-group">
              <input type="submit" name="insert" value="Choose" class="btn btn-lg btn-default btn-block">
              <br>
              <br>
              <p class="pargh"><font size="3" color="white">Display error data.</font></p>
            </div>
          </form>
      </div>
      <div class="container" id="right">
          <h2 class="form-signin-heading"><font size="6" color="white">Validated</font></h2>
          <br>
          <form action="<?php echo site_url('choose/validated');?>" method="post">
            <div class="form-group">
              <select class="form-control" name="validated_type">
                <option hidden selected>Select</option>
                <option value="4">Loan</option>
                <option value="5">Savings</option>
                <option value="6">Time Deposit</option>
              </select>
            </div>
            <div class="form-group">
              <input type="submit" name="insert" value="Choose" class="btn btn-lg btn-default btn-block">
              <br>
              <br>
              <p class="pargh"><font size="3" color="white">Display validated data.</font></p>
            </div>
          </form>
      </div>
    </div>
    <?php endif;?>

    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('assets/plugins/pace/pace.js'); ?>"></script>

  </body>
</html>