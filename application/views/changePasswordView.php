<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
     <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>"/>
    <title>Document</title>
  </head>
  <body>
    

    <div class="login-wrapper">
      <div class="flash-message">
      <?= $this->session->flashdata('message');?>
      <?= form_error('password1', '<small class="text-danger pl-2">', '</small>');?>
      </div>
      <div class="box">
        <form action="<?php echo base_url('changePassword');?>" method="post">
        
          <h4 style="text-align: center">Change Password for</h4>
          <h6 style="text-align: center"><?= $this->session->userdata('reset_email'); ?></h6>
          <div class="inputBox">
            <input type="password" id="password1" name="password1" required="required" />
            <span>New password</span>
            <i></i>
          </div>
          <div class="inputBox">
            <input type="password" id="password2" name="password2" required="required" />
            <span>Repeat password</span>
            <i></i>
          </div>
          <div style="padding-top:">
            <input type="submit" value="Change" />
          </div>
        </form>
      </div>
    
    </div>
  </body>

  <script src="<?php echo 
base_url('assets/js/jquery.min.js');?>"></script>
 <!-- load bootstrap js file -->
 <script src="<?php echo 
base_url('assets/js/bootstrap.min.js');?>"></script>
</html>
