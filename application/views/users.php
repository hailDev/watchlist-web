<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    
    <title>User</title>
</head>
<body style="background-color: #dcdcdc">

    <!--Navbar-->
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
            <a class="nav-link active" aria-current="page" href="<?php echo base_url('wrap');?>">
                <span class="material-symbols-outlined">person_add</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('wrap/viewUsers');?>">
                <span class="material-symbols-outlined">group</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

    <!--Konten-->

    <section id="users" style="padding-top: 7rem">
        <div class="container-sm">
        <div class="row justify-content-md-center">
        <div class="card o-hidden border-0 shadow" style="background: radial-gradient(#f8f8ff,#dcdcdc); width: auto">
        <div class="col-md-auto">
        <h2 style="text-align: center">Users</h2>
            <table class="table">
                <thead style="text-align: center">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">User id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">Favorite genre</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody style="text-align: center">
                <?php
                $n=1;
                foreach ($usr as $u) { ?>
                    <th scope="row"><?= $n?></th>
                    <td><?=$u['id'] ?></td>
                    <td><?=$u['name'] ?></td>
                    <td><?=$u['email'] ?></td>
                    <td><?=$u['age'] ?></td>
                    <td><?=$u['genre'] ?></td>
                    <td>
                    <a href="<?php echo 
                    base_url('wrap/deleteUser/'.$u['id']);?>" 
                    class="btn btn-sm btn-danger" style="background-color: crimson; " >Delete</a>
                    |
                    <a href="<?php echo 
                    base_url('wrap/edit_user/'.$u['id']);?>" 
                    class="btn btn-sm btn-warning" style="background-color: #ffff66; color: #212529">Edit</a>
                    |
                    <a href="<?php echo 
                    base_url('profile_user/'.$u['id']);?>" 
                    class="btn btn-sm btn-success" style="background-color: #00ff7f; color: #212529">View</a>
                    </td>
                </tr>
                
            <?php $n ++; } ?>
                    
                </tbody>
            </table>
            
        </div>
        </div>
        </div>
        </div>
        <form action="<?= base_url('wrap'); ?>">
        <div style="text-align: center">
            <button type="submit" class="btn btn-secondary btn-user btn-block" style="background-color: #212529; margin-top: 15px;">Add user</button>
        </div>
        </form>
        <div style="padding-top: 100px">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffff"
          fill-opacity="1"
          d="M0,128L30,106.7C60,85,120,43,180,42.7C240,43,300,85,360,122.7C420,160,480,192,540,186.7C600,181,660,139,720,128C780,117,840,139,900,165.3C960,192,1020,224,1080,213.3C1140,203,1200,149,1260,128C1320,107,1380,117,1410,122.7L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
      </div>
    </section>

    
 <!-- load bootstrap js file -->
 <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>