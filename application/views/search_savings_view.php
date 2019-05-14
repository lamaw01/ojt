<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Search</title>

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
                  <li class="active"><a data-toggle="tab" href="<?php echo base_url('validated_savings');?>">Validated Savings</a></li>
                <!--ACCESS MENUS FOR STAFF-->
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li><a data-toggle="tab" href="<?php echo base_url('page/tech');?>">Home</a></li>
                  <li class="active"><a data-toggle="tab" href="<?php echo base_url('validated_savings');?>">Validated Savings</a></li>
                <!--ACCESS MENUS FOR AUTHOR-->
                <?php else:?>
                  <li><a data-toggle="tab" href="<?php echo base_url('page/coop');?>">Home</a></li>
                  <li class="active"><a data-toggle="tab" href="<?php echo base_url('validated_savings');?>">Validated Savings</a></li>
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
   <!-- Search form (start) -->
   <div class="container_size">
     <form method='post' action="<?= base_url() ?>search/search_savings">
      <div class="col-md-10">
        <input class="form-control" type='text' name='search' value='<?php $search ?>' placeholder='Search'>
      </div>
      <div>
       <input class="btn btn-info" type='submit' name='submit' value='Submit'>
      </div>
     </form>
   </div>
   <br>

   <!-- Posts List -->
   <div class="container container_size divTB">
   <table class="table table-striped" width="600" border="0" cellspacing="5" cellpadding="5">
    <tr style="background-color: grey;">
      <th><p>No.</p></th>
      <th><p>Core No.</p></th>
      <th><p>MBWIN No.</p></th>
      <th><p>Account Name</p></th>
    </tr>
    <?php 
    $validatesv_id = $row+1;
    foreach($result as $data){

      $mbwinsv_id = substr($data['mbwinsv_id'],0, 180)."";
      $coresv_id = substr($data['coresv_id'],0, 180)."";
      $coresv_acc_name = substr($data['coresv_acc_name'],0, 180)."";
      echo "<tr>";
      echo "<td><p>".$validatesv_id."</p></td>";
      echo "<td><p>".$coresv_id."</p></td>";
      echo "<td><p>".$mbwinsv_id."</p></td>";
      echo "<td><p>".$coresv_acc_name."</p></td>";
      echo "</tr>";

      $validatesv_id++;

    }
    if(count($result) == 0){
      echo "<tr>";
      echo "<td colspan='4'>No record found.</td>";
      echo "</tr>";
    }
    ?>
   </table>
 

   <!-- Paginate -->
   <p> <?= $pagination; ?> </p> 
   <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
   </div>
  </center>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?= base_url('assets/plugins/pace/pace.js'); ?>"></script>
 </body>
</html>