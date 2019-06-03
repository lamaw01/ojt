<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home</title>

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
    <?php if($this->session->userdata('level')==='1'):?>
      <div class="container" style="width: 150px; height: 1px; margin-top: 10px;">
        <?php
        if($this->uri->segment(2) == "importcoreln"){
          echo '<p class="text-success"><font size="3">Import Success</font></p>';
        }
        elseif($this->uri->segment(2) == "importcoresv") {
          echo '<p class="text-success"><font size="3">Import Success</font></p>';
        }
        elseif($this->uri->segment(2) == "importcoretd") {
          echo '<p class="text-success"><font size="3">Import Success</font></p>';
        }
        elseif($this->uri->segment(2) == "importmbwinln") {
          echo '<p class="text-success"><font size="3">Import Success</font></p>';
        }
        elseif($this->uri->segment(2) == "importmbwinsv") {
          echo '<p class="text-success"><font size="3">Import Success</font></p>';
        }
        elseif($this->uri->segment(2) == "importmbwintd") {
          echo '<p class="text-success"><font size="3">Import Success</font></p>';
        }
        elseif($this->uri->segment(2) == "importmigratedln") {
          echo '<p class="text-success"><font size="3">Import Success</font></p>';
        }
        elseif($this->uri->segment(2) == "importmigratedsv") {
          echo '<p class="text-success"><font size="3">Import Success</font></p>';
        }
        elseif($this->uri->segment(2) == "importmigratedtd") {
          echo '<p class="text-success"><font size="3">Import Success</font></p>';
        }
        ?>
      </div>
    <div class="container" >    
      <div class="container">
        <div class="page-header">
            <h3 class="firstfont"><strong>Welcome</strong> <strong><?php echo $this->session->userdata('user_fname','user_lname');?></strong></h3>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="container-fluid" style="float: left; width: 200px;">
        <div id="flip1"><h5>Import CORE Loan</h5></div>
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
              <tr>
                <td>
                  <p class="text-success" style="padding-top: 10px; text-align: center;"><?php echo $data1; ?> Data Inserted</p>
                </td>
              </tr>
            </table>
            </center>
          </form>
        </div>
        <br>
        <div id="flip2"><h5>Import CORE Savings</h5></div>
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
              <tr>
                <td>
                  <p class="text-success" style="padding-top: 10px; text-align: center;"><?php echo $data2; ?> Data Inserted</p>
                </td>
              </tr>
            </table>
            </center> 
          </form>
        </div>
        <br>
        <div id="flip3"><h5>Import CORE Time Deposit</h5></div>
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
              <tr>
                <td>
                  <p class="text-success" style="padding-top: 10px; text-align: center;"><?php echo $data3; ?> Data Inserted</p>
                </td>
              </tr>
            </table>
            </center>
          </form>
        </div>
      </div>
      <div class="container-fluid" style="float: right; width: 200px; margin-right: 160px;">
        <div id="flip7"><h5>Import Migrated Loan</h5></div>
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
              <tr>
                <td>
                  <p class="text-success" style="padding-top: 10px; text-align: center;"><?php echo $data7; ?> Data Inserted</p>
                </td>
              </tr>
            </table>
            </center>
          </form>
        </div>
        <br>
        <div id="flip8"><h5>Import Migrated Savings</h5></div>
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
              <tr>
                <td>
                  <p class="text-success" style="padding-top: 10px; text-align: center;"><?php echo $data8; ?> Data Inserted</p>
                </td>
              </tr>
            </table> 
            </center>
          </form>
        </div>
        <br>
        <div id="flip9"><h5>Import Migrated Time Deposit</h5></div>
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
              <tr>
                <td>
                  <p class="text-success" style="padding-top: 10px; text-align: center;"><?php echo $data9; ?> Data Inserted</p>
                </td>
              </tr>
            </table>
            </center>
          </form>
        </div>
      </div>
      <div class="container-fluid" style="float: center; width: 200px; margin-right: 550px;">
        <div id="flip4"><h5>Import MBWIN Loan</h5></div>
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
              <tr>
                <td>
                  <p class="text-success" style="padding-top: 10px; text-align: center;"><?php echo $data4; ?> Data Inserted</p>
                </td>
              </tr>
            </table>
            </center>
          </form>
        </div>
        <br>
        <div id="flip5"><h5>Import MBWIN Savings</h5></div>
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
              <tr>
                <td>
                  <p class="text-success" style="padding-top: 10px; text-align: center;"><?php echo $data5; ?> Data Inserted</p>
                </td>
              </tr>
            </table>
            </center>
          </form>
        </div>
        <br>
        <div id="flip6"><h5>Import MBWIN Time Deposit</h5></div>
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
              <tr>
                <td>
                  <p class="text-success" style="padding-top: 10px; text-align: center;"><?php echo $data6; ?> Data Inserted</p>
                </td>
              </tr>
            </table> 
            </center>
          </form>
        </div>
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
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
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