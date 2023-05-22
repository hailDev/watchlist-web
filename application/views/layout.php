<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Layout</title>
 <!-- load bootstrap css file -->
 <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" 
rel="stylesheet">
</head>
<body>
  
<div class="modal-body row">
  <div class="col-md-6">
    <!-- Your first column here -->
    <h1>Mahasiswa</h1>
    <table class="table table-danger">
        <thead>
            <tr>
            <th scope="col">Country Id</th>
            <th scope="col">Country Name</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no=1;
            foreach ($mhsArr as $mhs){ ?>
            <tr>
            <th scope="row"><?=$no?></th>
            <td><?=$mhs['Country_id']?></td>
            <td><?=$mhs['country_name']?></td>
            </tr>
         <?php } ?>
            
        </tbody>
        </table>
  </div>
  <div class="col-md-6">
    <!-- Your second column here -->
    <h1>Login</h1>
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>




<!-- load jquery js file -->
<script src="<?php echo 
base_url('assets/js/jquery.min.js');?>"></script>
 <!-- load bootstrap js file -->
 <script src="<?php echo 
base_url('assets/js/bootstrap.min.js');?>"></script>

</body>
</html>
