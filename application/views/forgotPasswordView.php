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
      <?= form_error('email', '<small class="text-danger pl-2">', '</small>');?>
      </div>
      <div class="box">
        <form action="<?php echo base_url('forgotPassword');?>" method="post">
        
          <h2>Forgot Password</h2>
          <div class="inputBox">
            <input type="text" id="inputemail" name="email" value="<?= set_value('email');?>" required="required" />
            
            <span>User e-mail</span>
            <i></i>
          </div>
          <div class="links">
            <a href=""></a>
            <a href="<?php echo base_url('viewLogin');?>">Back to login</a>
          </div>
          <div style="padding-top:">
            <input type="submit" value="Reset" />
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
