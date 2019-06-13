<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Details</title>

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
          <div class="container" style="width: 800px;">
            <table class="table table-striped" width="1200" border="0" cellspacing="5" cellpadding="5">
              <tr style="background-color: grey;">
                <th><p></p></th>
                <th><p>MBWIN</p></th>
                <th><p>Core</p></th>
              </tr>
              <?php if(count($data)): foreach($data as $row): ?>

            <tr>
            <?php if ($row->mbwinln_open_date != $row->coreln_open_date) { ?>
              <td style="background-color: #ff6666;"><p>Open Date</p></td>
              <td style="background-color: #ff6666;"><p><?php echo $row->mbwinln_open_date; ?></p></td>
              <td style="background-color: #ff6666;"><p><?php echo $row->coreln_open_date; ?></p></td>
            <?php } else { ?>
              <td><p>Open Date</p></td>
              <td><p><?php echo $row->mbwinln_open_date; ?></p></td>
              <td><p><?php echo $row->coreln_open_date; ?></p></td>
            <?php } ?>
            </tr>
            <tr>
            <?php if ($row->mbwinln_int_rate != $row->coreln_int_rate) { ?>
              <td style="background-color: #ff6666;"><p>Interest Rate</p></td>
              <td style="background-color: #ff6666;"><p><?php echo $row->mbwinln_int_rate; ?></p></td>
              <td style="background-color: #ff6666;"><p><?php echo $row->coreln_int_rate; ?></p></td>
            <?php } else { ?>
              <td><p>Interest Rate</p></td>
              <td><p><?php echo $row->mbwinln_int_rate; ?></p></td>
              <td><p><?php echo $row->coreln_int_rate; ?></p></td>
            <?php } ?> 
            </tr>
            <tr>
            <?php if ($row->mbwinln_pen_rate != $row->coreln_pen_rate) { ?>
              <td style="background-color: #ff6666;"><p>Penalty Rate</p></td>
              <td style="background-color: #ff6666;"><p><?php echo $row->mbwinln_pen_rate; ?></p></td>
              <td style="background-color: #ff6666;"><p><?php echo $row->coreln_pen_rate; ?></p></td>
            <?php } else { ?>
              <td><p>Penalty Rate</p></td>
              <td><p><?php echo $row->mbwinln_pen_rate; ?></p></td>
              <td><p><?php echo $row->coreln_pen_rate; ?></p></td>
            <?php } ?>
            </tr>
            <tr>
            <?php if ($row->mbwinln_principal_amt != $row->coreln_loan_amount) { ?>
              <td style="background-color: #ff6666;"><p>Loan amount</p></td>
              <td style="background-color: #ff6666;"><p><?php echo $row->mbwinln_principal_amt; ?></p></td>
              <td style="background-color: #ff6666;"><p><?php echo $row->coreln_loan_amount; ?></p></td>
            <?php } else { ?>
              <td><p>Loan amount</p></td>
              <td><p><?php echo $row->mbwinln_principal_amt; ?></p></td>
              <td><p><?php echo $row->coreln_loan_amount; ?></p></td>
            <?php } ?>
            </tr>
            <tr>
            <?php if ($row->mbwinln_bal_amt != $row->coreln_out_bal) { ?>
              <td style="background-color: #ff6666;"><p>Outstanding Balance</p></td>
              <td style="background-color: #ff6666;"><p><?php echo $row->mbwinln_bal_amt; ?></p></td>
              <td style="background-color: #ff6666;"><p><?php echo $row->coreln_out_bal; ?></p></td>
            <?php } else { ?>
              <td><p>Outstanding Balance</p></td>
              <td><p><?php echo $row->mbwinln_bal_amt; ?></p></td>
              <td><p><?php echo $row->coreln_out_bal; ?></p></td>
            <?php } ?>
            </tr>
            <tr>
            <?php if ($row->mbwinln_over_due != $row->coreln_over_due) { ?>
              <td style="background-color: #ff6666;"><p>Overdue</p></td>
              <td style="background-color: #ff6666;"><p><?php echo $row->mbwinln_over_due; ?></p></td>
              <td style="background-color: #ff6666;"><p><?php echo $row->coreln_over_due; ?></p></td>
            <?php } else { ?>
              <td><p>Overdue</p></td>
              <td><p><?php echo $row->mbwinln_over_due; ?></p></td>
              <td><p><?php echo $row->coreln_over_due; ?></p></td>
            <?php } ?>
            </tr>
            <tr>
            <?php if ($row->mbwinln_int_bal_amt != $row->coreln_int_due_amt) { ?>
              <td style="background-color: #ff6666;"><p>Interest Due Amount</p></td>
              <td style="background-color: #ff6666;"><p><?php echo $row->mbwinln_int_bal_amt; ?></p></td>
              <td style="background-color: #ff6666;"><p><?php echo $row->coreln_int_due_amt; ?></p></td>
            <?php } else { ?>
              <td><p>Interest Due Amount</p></td>
              <td><p><?php echo $row->mbwinln_int_bal_amt; ?></p></td>
              <td><p><?php echo $row->coreln_int_due_amt; ?></p></td>
            <?php } ?>
            </tr>
            <tr>
            <?php if ($row->mbwinln_pen_bal != $row->coreln_penalty) { ?>
              <td style="background-color: #ff6666;"><p>Penalty</p></td>
              <td style="background-color: #ff6666;"><p><?php echo $row->mbwinln_pen_bal; ?></p></td>
              <td style="background-color: #ff6666;"><p><?php echo $row->coreln_penalty; ?></p></td>
            <?php } else { ?>
              <td><p>Penalty</p></td>
              <td><p><?php echo $row->mbwinln_pen_bal; ?></p></td>
              <td><p><?php echo $row->coreln_penalty; ?></p></td>
            <?php } ?>
            </tr>

              <?php endforeach; ?>
              <?php else: ?>

              <?php endif; ?>
               
            </table>

              <div class="container-fluid" style="margin-top: 20px;">
                <button><a href="<?php echo base_url('inquire/loan');?>">Back</a></button>
              </div>
              <br>
              <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
            </center>
          </div>
    
    <script src="<?php echo base_url('assets/plugins/jquery/jquery-3.4.1.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/pace/pace.js'); ?>"></script>

  </body>
</html>