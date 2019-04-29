<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home</title>

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
      <style>
        a,p{
        font-family: 'Fjalla One', sans-serif;
        }
        p{
          text-align: center;
        }
      </style>
  </head>
  <body>
    <div class="container">
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
              <a class="navbar-brand" target="_blank" href="https://mass-specc.coop/"><img style="position:relative; top:-18px; left: -15px;" src="<?php echo base_url('assets/logo.png'); ?>"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <!--ACCESS MENUS FOR ADMIN-->
                  <li><a href="<?php echo base_url('page/displayprofile');?>">Admin</a></li>
                  <li><a href="<?php echo base_url('admin');?>">Home</a></li>
                  <li><a href="<?php echo base_url('validated');?>">Validated</a></li>
                  <li><a href="<?php echo base_url('errors');?>">Errors</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>
      </div>
    </div>
        <center>
          <div class="container">
            
            <table width="600" border="0" cellspacing="5" cellpadding="5">
              <form method="POST" action="<?php echo base_url()?>admin/callcheck">
              <tr style="background:#CCC">
                <th><p>No</p></th>
                <th><p>CoreLN No</p></th>
                <th><p>MBWINLN No</p></th>
                <th><p>Account Name</p></th>
              </tr>
              <?php if(count($data)): foreach($data as $row): ?>

              <tr>
              <td><p><?php echo $row->migratedln_id; ?></p></td>
              <td><p><?php echo $row->coreln_account_no; ?></p></td>
              <td><p><?php echo $row->mbwinln_acc_no; ?></p></td>
              <td><p><?php echo $row->account_name; ?></p></td>
              <td><a class='btn btn-primary btn-xs' href='<?php echo base_url()?>admin/callcheck/<?php echo $row->migratedln_id; ?>'>Check</a></td>
              </tr>

              <?php endforeach; ?>
              <?php else: ?>

              <?php endif; ?>
              <?php
              if($this->uri->segment(2) == "callcheck"){
                  $query = $this->db->query("call checkval('$row->migratedln_id')");
                  mysqli_next_result($this->db->conn_id);

                  if($query->num_rows() > 0){
                    echo '<p class="text-success">Data Validated</p>';
                  }else{
                    echo '<p class="text-danger ">Validation Error</p>';
                  }
              }
            ?>
               
            </table>
          </form>
  
              <p> <?php echo $this->pagination->create_links(); ?> </p>
              <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
            </center>
          </div>
 
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>