<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <title>My Watch List</title>
</head>
<body style="background-color: #dcdcdc">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background-color: #212529">
      <div class="container">
        <a class="navbar-brand" style="color: white" href="#">Watch List</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <!--Konten-->
    <section id="home" class="jumbotron" style="padding-top: 7rem">
        <div class="card o-hidden border-0 shadow col-md-6 justify-content-center offset-md-3" style="background: radial-gradient(#f8f8ff,#dcdcdc); height: auto; ">
            <div class="p-5">
            <h2 style="text-align: center">Registration</h2>
            <form class="user" method="post" action="<?= base_url('control_uas/viewRegistration'); ?>">
                <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="inputnama" placeholder="Name" name="name" value="<?= set_value('name');?>">
                        <?= form_error('name', '<small class="text-danger pl-2">', '</small>');?>
                </div>
                <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="inputemail" placeholder="Email" name="email" style="margin-top: 5px" value="<?= set_value('email');?>">
                        <?= form_error('email', '<small class="text-danger pl-2">', '</small>');?>
                </div>
                <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="inputage" placeholder="Age" name="age" style="margin-top: 5px" value="<?= set_value('age');?>">
                        <?= form_error('age', '<small class="text-danger pl-2">', '</small>');?>
                </div>
                <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control-user" id="inputpassword1" placeholder="Password" name="password1" style="margin-top: 5px">
                        <?= form_error('password1', '<small class="text-danger pl-2">', '</small>');?>
                </div>
                <div class="col-sm-6">
                        <input type="password" class="form-control form-control-user" id="inputpassword2" placeholder="Repeat Password" name="password2" style="margin-top: 5px">
                        <?= form_error('password2', '<small class="text-danger pl-2">', '</small>');?>
                </div>
                </div>
                <button type="submit" class="btn btn-secondary btn-user btn-block" style="background-color: #212529; text-align: center; margin-top: 15px;">Register Account</button>
                <hr>
            </form>
            <div class="text-center">
              <a class="small" style="text-decoration: none; color: #212529;" href="<?php echo base_url('viewLogin');?>">Already have an account?</a>
            </div>
            <div class="text-center">
              <a class="small" style="text-decoration: none; color: #212529;" href="<?php echo base_url('forgotPassword');?>">Forgot password</a>
            </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffff"
          fill-opacity="1"
          d="M0,128L30,106.7C60,85,120,43,180,42.7C240,43,300,85,360,122.7C420,160,480,192,540,186.7C600,181,660,139,720,128C780,117,840,139,900,165.3C960,192,1020,224,1080,213.3C1140,203,1200,149,1260,128C1320,107,1380,117,1410,122.7L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
</body>
</html>