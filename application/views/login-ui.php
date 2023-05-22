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
      </div>
      <div class="box">
        <form action="<?php echo site_url('control_uas\viewLogin');?>" method="post">
          <h2>Sign In</h2>
          <div class="inputBox">
            <input type="text" id="inputemail" name="email" value="<?= set_value('email');?>" required="required" />
            <?= form_error('email', '<small class="text-danger pl-2">', '</small>');?>
            <span>Username</span>
            <i></i>
          </div>
          <div class="inputBox">
            <input type="password" id="inputpassword" name="password" required="required" />
            <?= form_error('password', '<small class="text-danger pl-2">', '</small>');?>
            <span>password</span>
            <i></i>
          </div>
          <div class="links">
            <a href="<?php echo base_url('forgotPassword');?>">Forgot Password</a>
            <a href="<?php echo base_url('viewRegistration');?>">Don't have account?</a>
          </div>
          <input type="submit" value="Login" />
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
