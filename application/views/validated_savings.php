<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Validated</title>
    
    <link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/plugins/pace/pace.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/mystyle.css');?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet">
    
  </head>
  <body>
    <div class="container-fluid" style="margin-top: .1em;">
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
              <ul class="nav navbar-nav nav-tabs main-navigation">
                <!--ACCESS MENUS FOR ADMIN-->
                <?php if($this->session->userdata('level')==='1'):?>
                  <li><a href="<?php echo base_url('page');?>">Home</a></li>
                  <li><a href="<?php echo base_url('page/check');?>">Check</a></li>

                  <li><a href="#">Reports <span class="caret"></span></a>
                    <ul>
                  <li><a href="#">Validated</a>
                      <ul>
                        <li><a href="<?php echo base_url('validated/loan');?>">Loan</a></li>
                        <li><a href="<?php echo base_url('validated/savings');?>">Savings</a></li>
                        <li><a href="<?php echo base_url('validated/time_deposit');?>">Time Deposit</a></li>
                      </ul>
                    </li>
                  <li><a href="#">Errors</a>
                    <ul>
                      <li><a href="<?php echo base_url('errors/loan');?>">Loan</a></li>
                      <li><a href="<?php echo base_url('errors/savings');?>">Savings</a></li>
                      <li><a href="<?php echo base_url('errors/time_deposit');?>">Time Deposit</a></li>
                    </ul>
                  </li>
                </ul>
                  </li>
                  <li><a href="#">Inquire <span class="caret"></span></a>
                    <ul>
                      <li><a href="<?php echo base_url('inquire/loan');?>">Loan</a></li>
                      <li><a href="<?php echo base_url('inquire/savings');?>">Savings</a></li>
                      <li><a href="<?php echo base_url('inquire/time_deposit');?>">Time Deposit</a></li>
                    </ul>
                  </li>
                <!--ACCESS MENUS FOR STAFF-->
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li><a href="<?php echo base_url('page/tech');?>">Home</a></li>
                  <li><a href="<?php echo base_url('page/check');?>">Check</a></li>
                  <li><a href="#">Reports <span class="caret"></span></a>
                    <ul>
                  <li><a href="#">Validated</a>
                      <ul>
                        <li><a href="<?php echo base_url('validated/loan');?>">Loan</a></li>
                        <li><a href="<?php echo base_url('validated/savings');?>">Savings</a></li>
                        <li><a href="<?php echo base_url('validated/time_deposit');?>">Time Deposit</a></li>
                      </ul>
                    </li>
                  <li><a href="#">Errors</a>
                    <ul>
                      <li><a href="<?php echo base_url('errors/loan');?>">Loan</a></li>
                      <li><a href="<?php echo base_url('errors/savings');?>">Savings</a></li>
                      <li><a href="<?php echo base_url('errors/time_deposit');?>">Time Deposit</a></li>
                    </ul>
                  </li>
                </ul>
                  </li>
                  <li><a href="#">Inquire <span class="caret"></span></a>
                    <ul>
                      <li><a href="<?php echo base_url('inquire/loan');?>">Loan</a></li>
                      <li><a href="<?php echo base_url('inquire/savings');?>">Savings</a></li>
                      <li><a href="<?php echo base_url('inquire/time_deposit');?>">Time Deposit</a></li>
                    </ul>
                  </li>
                <!--ACCESS MENUS FOR AUTHOR-->
                <?php else:?>
                  <li><a href="<?php echo base_url('page/coop');?>">Home</a></li>
                  <li><a href="#">Reports <span class="caret"></span></a>
                    <ul>
                  <li><a href="#">Validated</a>
                      <ul>
                        <li><a href="<?php echo base_url('validated/loan');?>">Loan</a></li>
                        <li><a href="<?php echo base_url('validated/savings');?>">Savings</a></li>
                        <li><a href="<?php echo base_url('validated/time_deposit');?>">Time Deposit</a></li>
                      </ul>
                    </li>
                  <li><a href="#">Errors</a>
                    <ul>
                      <li><a href="<?php echo base_url('errors/loan');?>">Loan</a></li>
                      <li><a href="<?php echo base_url('errors/savings');?>">Savings</a></li>
                      <li><a href="<?php echo base_url('errors/time_deposit');?>">Time Deposit</a></li>
                    </ul>
                  </li>
                </ul>
                  </li>
                  <li><a href="#">Inquire <span class="caret"></span></a>
                    <ul>
                      <li><a href="<?php echo base_url('inquire/loan');?>">Loan</a></li>
                      <li><a href="<?php echo base_url('inquire/savings');?>">Savings</a></li>
                      <li><a href="<?php echo base_url('inquire/time_deposit');?>">Time Deposit</a></li>
                    </ul>
                  </li>
                <?php endif;?>
              </ul>
              <ul class="nav navbar-nav navbar-right nav-tabs" >
                <?php if($this->session->userdata('level')==='1'):?>
                  <li><a href="<?php echo base_url('page/managedata');?>">Manage Data</a></li>
                  <li><a href="<?php echo base_url('reg');?>">Create Account</a></li>
                  <li><a href="<?php echo base_url('page/displayprofile');?>">Admin</a></li>
                  <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li><a href="<?php echo base_url('page/displayprofile');?>">Tech Staff</a></li>
                  <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
                <?php else:?>
                  <li><a href="<?php echo base_url('page/displayprofile');?>">Coop Staff</a></li>
                  <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
                <?php endif;?>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>
      </div>
    </div>
      <center>
        <div class="container" id="srch-bar">
         <form method='post' action="<?= base_url() ?>search_validated/savings">
          <div class="col-md-10">
            <input class="form-control" type='text' name='search' value='<?php $search ?>' placeholder='Search'>
          </div>
          <div>
           <input class="btn btn-info" type='submit' name='submit' value='Submit'>
          </div>
         </form>  
       </div>
       <br>
          <div class="container container_size divTB">
            <table class="table table-striped" width="600" border="0" cellspacing="5" cellpadding="5">
              <tr style="background-color: grey;">
                <th><p>No.</p></th>
                <th><p>Core No.</p></th>
                <th><p>MBWIN No.</p></th>
                <th><p>Account Name</p></th>
                <th><p></p></th>
              </tr>
              <?php if(count($data)): foreach($data as $row): ?>

              <tr>
              <td><p><?php echo $row->validatesv_id; ?></p></td>
              <td><p><?php echo $row->val_coresv; ?></p></td>
              <td><p><?php echo $row->val_mbwinsv; ?></p></td>
              <td><p><?php echo $row->coresv_acc; ?></p></td>
              <td><a class='btn btn-primary btn-md' href='<?php echo base_url()?>details/savings/<?php echo $row->val_coresv; ?>'>Details</a></td>

              <?php endforeach; ?>
              <?php else: ?>

              <?php endif; ?>
               
            </table>
  
              <p> <?php echo $this->pagination->create_links(); ?> </p>
              <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
            </center>
          </div>
          
    <script src="<?php echo base_url('assets/plugins/jquery/jquery-3.4.1.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/pace/pace.js'); ?>"></script>

  </body>
</html>