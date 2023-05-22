<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Document</title>
</head>


<body style="background-color: #dcdcdc">

<!--navbar-->

<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My watch list</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" style="width: 50px; height: 3%">
      <span class="material-symbols-outlined">expand_more</span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel" style="width: 8%">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url('profile_user/'.$detailId['id']); ?>">
                <span class="material-symbols-outlined">person</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('view_datamovies/'.$detailId['id']); ?>">
                <span class="material-symbols-outlined">add_circle</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>



<section id="profile">
      <div class="container card o-hidden border-0 shadow" style="background-color: white; margin-top: 10%" >
        <div class=" row text-center mb-3">
          <div class="col">
            <h2 style="margin-top: 20px">Profile</h2>
            
          </div>
        </div>
        <div class="row justify-content-center fs-5 ">
          <div class="col-md-5">
            <p>Name           : <?= $detailId['name'];?></p>
            <p>Email          : <?= $detailId['email'];?></p>
            <p>Age            : <?= $detailId['age'];?></p>
            <p>Favorite genre : <?= $detailId['genre'];?></p>     
            <form action="<?= base_url('viewUsers'); ?>">
            <button type="submit" class="btn btn-secondary btn-user btn-block" style="background-color: #212529; margin-top: 15px;">Back to user list</button>
            </form>
          </div>
          <div class="col-md-3">

            <img src="<?php echo base_url('assets/img-profile/'.$detailId['image']);?>" width="200px" class="rounded-circle img-thumbnail" style="border: 7px solid #dcdcdc; width: 200px; height: 200px;" alt="">
            <?php echo form_open_multipart('wrap/add_fotoprofile/'.$detailId['id']); ?>
            <div class="form-group">
              
              <?= $this->session->flashdata('message');?>
              <input type="file" name="image" class="form-control" size="20" required="" style="margin-top: 10px; margin-bottom: 10px">
            </div>
            <button type="submit" class="btn btn-primary" style="margin-bottom: 10px">Upload</button>
            <?php echo form_close(); ?>
            
          </div>
        </div>
      </div>
    </section>

    <section id="watchlist">
      <div class="container card o-hidden border-0 shadow" style="background-color: white; margin-top:100px; margin-bottom: 10px">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Watch list</h2>
            <?= $this->session->flashdata('pesan');?>
          </div>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-auto">
            <table class="table">
              <thead class="text-center">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Movies Name</th>
                  <th scope="col">Movies Genre</th>
                  <th scope="col">Movies Code</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <?php
                $n=1;
                foreach ($watchArr as $wls) { ?>
                    <th scope="row"><?= $n?></th>
                    <td><?=$wls['movie_name'] ?></td>
                    <td><?=$wls['movie_genre'] ?></td>
                    <td><?=$wls['movie_code'] ?></td>
                    <td>
                    <a href="<?php echo 
                    base_url('wrap/delete_watchlist/'.$wls['id'].'/'.$wls['movie_code']);?>" 
                    class="btn btn-sm btn-danger" style="background-color: crimson; " >Delete</a>
                    |
                    <a href="<?php echo 
                    base_url('wrap/get_det_watchlist/'.$wls['id'].'/'.$wls['local_id']);?>" 
                    class="btn btn-sm btn-warning" style="background-color: #ffff66; color: #212529">Edit</a>
                    </td>
                </tr>
                
            <?php $n ++; } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <form action="<?= base_url('view_datamovies/'.$detailId['id']); ?>">
        <div style="text-align: center">
            <button type="submit" class="btn btn-secondary btn-user btn-block" style="background-color: #212529; margin-bottom: 3%;">Add watchlist</button>
        </div>
        </form>
    
<!-- load bootstrap js file -->
 <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>