<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
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
                  <li class="active"><a href="<?php echo base_url('page');?>">Home</a></li>
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
                  <li class="active"><a href="<?php echo base_url('page/tech');?>">Home</a></li>
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
                  <li class="active"><a href="<?php echo base_url('page/coop');?>">Home</a></li>
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
                  <li><a href="<?php echo base_url('reg');?>">Manage Account</a></li>
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
    <?php if($this->session->userdata('level')==='1'):?>
    <div class="container">    
      <div class="container">
        <div class="page-header">
            <h3 class="firstfont"><strong>Welcome</strong> <strong><?php echo $this->session->userdata('user_fname','user_lname');?></strong></h3>
        </div>
      </div>
      <div id="flip1"><h4>Import CORE Loan</h4></div>
      <div id="panel1">
        <br>
        <form action="<?php echo site_url();?>import/importcoreln" method="post" enctype="multipart/form-data"> 
          <center>
          <table>
            <tr>
              <td>
                <input type="file" name="userfile" id="userfile">
              </td>
            </tr>
            <tr>  
              <td>
                  <button style="margin-top: 20px;" type="submit" name="submit">Import</button>
              </td>
            </tr>
          </table>
          </center>
        </form>
      </div>
      <br>
      <div id="flip2"><h4>Import CORE Savings</h4></div>
      <div id="panel2">
        <br>
        <form action="<?php echo site_url();?>import/importcoresv" method="post" enctype="multipart/form-data"> 
          <center>
          <table>
            <tr>
              <td>
                <input type="file" name="userfile" id="userfile">
              </td>
            </tr>
            <tr>
              <td>
                  <button style="margin-top: 20px;" type="submit" name="submit">Import</button>
              </td>
            </tr>
          </table>
          </center> 
        </form>
      </div>
      <br>
      <div id="flip3"><h4>Import CORE Time Deposit</h4></div>
      <div id="panel3">
        <br>
        <form action="<?php echo site_url();?>import/importcoretd" method="post" enctype="multipart/form-data"> 
          <center>
          <table>
            <tr>
              <td>
                <input type="file" name="userfile" id="userfile">
              </td>
            </tr>
            <tr>
              <td>
                  <button style="margin-top: 20px;" type="submit" name="submit">Import</button>
              </td>
            </tr>
          </table>
          </center>
        </form>
      </div>
      <br>
      <div id="flip4"><h4>Import MBWIN Loan</h4></div>
      <div id="panel4">
        <br>
        <form action="<?php echo site_url();?>import/importmbwinln" method="post" enctype="multipart/form-data">
          <center>
          <table>
            <tr>
              <td>
                <input type="file" name="userfile" id="userfile">
              </td>
            </tr>
            <tr>
              <td>
                  <button style="margin-top: 20px;" type="submit" name="submit">Import</button>
              </td>
            </tr>
          </table>
          </center>
        </form>
      </div>
      <br>
      <div id="flip5"><h4>Import MBWIN Savings</h4></div>
      <div id="panel5">
        <br>
        <form action="<?php echo site_url();?>import/importmbwinsv" method="post" enctype="multipart/form-data">
          <center>
          <table>
            <tr>
              <td>
                <input type="file" name="userfile" id="userfile">
              </td>
            </tr>
            <tr>
              <td>
                  <button style="margin-top: 20px;" type="submit" name="submit">Import</button>
              </td>
            </tr>
          </table>
          </center>
        </form>
      </div>
      <br>
      <div id="flip6"><h4>Import MBWIN Time Deposit</h4></div>
      <div id="panel6">
        <br>
        <form action="<?php echo site_url();?>import/importmbwintd" method="post" enctype="multipart/form-data">
          <center>
          <table>
            <tr>
              <td>
                <input type="file" name="userfile" id="userfile">
              </td>
            </tr>
            <tr>
              <td>
                  <button style="margin-top: 20px;" type="submit" name="submit">Import</button>
              </td>
            </tr>
          </table> 
          </center>
        </form>
      </div>
      <br>
      <div id="flip7"><h4>Import Migrated Loan</h4></div>
      <div id="panel7">
        <br>
        <form action="<?php echo site_url();?>import/importmigratedln" method="post" enctype="multipart/form-data">
          <center>
          <table>
            <tr>
              <td>
                <input type="file" name="userfile" id="userfile">
              </td>
            </tr>
            <tr>
              <td>
                  <button style="margin-top: 20px;" type="submit" name="submit">Import</button>
              </td>
            </tr>
          </table>
          </center>
        </form>
      </div>
      <br>
      <div id="flip8"><h4>Import Migrated Savings</h4></div>
      <div id="panel8">
        <br>
        <form action="<?php echo site_url();?>import/importmigratedsv" method="post" enctype="multipart/form-data">
          <center>
          <table>
            <tr>
              <td>
                <input type="file" name="userfile" id="userfile">
              </td>
            </tr>
            <tr>
              <td>
                  <button style="margin-top: 20px;" type="submit" name="submit">Import</button>
              </td>
            </tr>
          </table> 
          </center>
        </form>
      </div>
      <br>
      <div id="flip9"><h4>Import Migrated Time Deposit</h4></div>
      <div id="panel9">
        <br>
        <form action="<?php echo site_url();?>import/importmigratedtd" method="post" enctype="multipart/form-data"> 
          <center>
          <table>
            <tr>
              <td>
                <input type="file" name="userfile" id="userfile">
              </td>
            </tr>
            <tr>
              <td>
                  <button style="margin-top: 20px;" type="submit" name="submit">Import</button>
              </td>
            </tr>
          </table>
          </center>
        </form>
      </div>
      <br>
    </div>
    <?php elseif($this->session->userdata('level')==='2'):?>
    <div class="container">    
      <div class="container">
        <div class="page-header">
            <h3 class="firstfont"><b>Welcome</b> <b><?php echo $this->session->userdata('user_fname');?></b></h3>
        </div>
      </div>
    </div>
    <?php else:?>
    <div class="container">    
      <div class="container">
        <div class="page-header">
            <h3 class="firstfont"><b>Welcome</b> <b><?php echo $this->session->userdata('user_fname');?></b></h3>
        </div>
      </div>
    </div>
    <?php endif;?>

    <script src="<?php echo base_url('assets/plugins/jquery/jquery-3.4.1.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/pace/pace.js'); ?>"></script>

    <script>

      $(document).ready(function(){
        $("#flip1").click(function(){
          $("#panel1").slideToggle("slow");
        });
      });

      $(document).ready(function(){
        $("#flip2").click(function(){
          $("#panel2").slideToggle("slow");
        });
      });

      $(document).ready(function(){
        $("#flip3").click(function(){
          $("#panel3").slideToggle("slow");
        });
      });

      $(document).ready(function(){
        $("#flip4").click(function(){
          $("#panel4").slideToggle("slow");
        });
      });

      $(document).ready(function(){
        $("#flip5").click(function(){
          $("#panel5").slideToggle("slow");
        });
      });

      $(document).ready(function(){
        $("#flip6").click(function(){
          $("#panel6").slideToggle("slow");
        });
      });

      $(document).ready(function(){
        $("#flip7").click(function(){
          $("#panel7").slideToggle("slow");
        });
      });

      $(document).ready(function(){
        $("#flip8").click(function(){
          $("#panel8").slideToggle("slow");
        });
      });

      $(document).ready(function(){
        $("#flip9").click(function(){
          $("#panel9").slideToggle("slow");
        });
      });



    </script>

  </body>
</html>