<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/profile.css');?>"/>
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Document</title>
</head>


<body style="background-color: #dcdcdc">

<!--navbar-->
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Management</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" style="width: 50px; height: 3%">
      <span class="material-symbols-outlined">expand_more</span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel" style="width: 12%">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin'); ?>">
                <span class="material-symbols-outlined">dashboard</span>
                Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('viewmanageUser'); ?>">
                <span class="material-symbols-outlined">person</span>
                Users
            </a>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="<?= base_url('adminMovies'); ?>">
                <span class="material-symbols-outlined">movie</span>
                Movies
                </a>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="<?= base_url('adminMovies'); ?>">
                <span class="material-symbols-outlined">add_circle</span>
                Add Movie
                </a>
          </li>
          <li class="nav-item">
            <form action="<?= base_url('control_uas/viewLogin'); ?>">
              <button type="submit" class="btn btn-secondary btn-user btn-block" style="background-color: #212529; margin-top: 15px; font-size: ;">Log out</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>



    