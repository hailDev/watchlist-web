<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
     integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    
    <div class="container card o-hidden border-0 shadow" style="margin-top:4%; margin-bottom:3%; background-color: white">
    <h2 class="text-center">Movies</h2>
    <div class="text-center">
        <?= $this->session->flashdata('message');?> 
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-inner" style="padding: 1em">
            <div class="carousel-item active">
                <div class="cards-wrapper" style="justify-content: center; display: flex">
                    <div class="card" style="width: 18rem; margin: 0 0.5em; box-shadow:2px 6px 8px 0 rgba(22,22,26,0.18); border: none; border-radius: 0;">
                        <img src="<?php echo base_url('assets/img-datamovies/Mr Robot.jpg');?>" class="card-img-top" style="max-width: 100%; max-height: 60%" alt="...">
                        <form method="post" action="<?= base_url('wrap/add_watchlist/'.$detailId['id'].'/'); ?>">
                            <div class="card-body">
                            <h5 class="card-title">Mr.Robot</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <input type="hidden" id="custId" name="movie_genre" value="Crime">
                            <input type="hidden" id="custId" name="movie_code" value="mrb">
                            <button type="submit" name="movie_name" value="Mr.Robot" class="btn btn-secondary btn-user btn-block" style="background-color: #212529; text-align: center; margin-top: 15px;">Add to watchlist</button>
                            </div>
                        </form>
                    </div>
                    <div class="card" style="width: 18rem; margin: 0 0.5em; box-shadow:2px 6px 8px 0 rgba(22,22,26,0.18); border: none; border-radius: 0;">
                        <img src="<?php echo base_url('assets/img-datamovies/Who am i.jpg');?>" class="card-img-top" style="max-width: 100%; max-height: 60%" alt="...">
                        <form method="post" action="<?= base_url('wrap/add_watchlist/'.$detailId['id'].'/'); ?>">
                            <div class="card-body">
                            <h5 class="card-title">Who Am I</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <input type="hidden" id="custId" name="movie_genre" value="Crime">
                            <input type="hidden" id="custId" name="movie_code" value="wai">
                            <button type="submit" name="movie_name" value="Who am i" class="btn btn-secondary btn-user btn-block" style="background-color: #212529; text-align: center; margin-top: 15px;">Add to watchlist</button>
                            </div>
                        </form>
                    </div>
                    <div class="card" style="width: 18rem; margin: 0 0.5em; box-shadow:2px 6px 8px 0 rgba(22,22,26,0.18); border: none; border-radius: 0;">
                        <img src="<?php echo base_url('assets/img-datamovies/generation war.jpg');?>" class="card-img-top" style="max-width: 100%; max-height: 60%" alt="...">
                        <form method="post" action="<?= base_url('wrap/add_watchlist/'.$detailId['id'].'/'); ?>">
                            <div class="card-body">
                            <h5 class="card-title">Generation War</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <input type="hidden" id="custId" name="movie_genre" value="Action">
                            <input type="hidden" id="custId" name="movie_code" value="gwr">
                            <button type="submit" name="movie_name" value="Generation war" class="btn btn-secondary btn-user btn-block" style="background-color: #212529; text-align: center; margin-top: 15px;">Add to watchlist</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--batas-->
            <div class="carousel-item">
                <div class="cards-wrapper" style="justify-content: center; display: flex">
                    <div class="card" style="width: 18rem; margin: 0 0.5em; box-shadow:2px 6px 8px 0 rgba(22,22,26,0.18); border: none; border-radius: 0;">
                        <img src="<?php echo base_url('assets/img-datamovies/anohana.jpg');?>" class="card-img-top" style="max-width: 100%; max-height: 60%" alt="...">   
                        <form method="post" action="<?= base_url('wrap/add_watchlist/'.$detailId['id'].'/'); ?>">
                            <div class="card-body">
                            <h5 class="card-title">Anohana Live Action</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <input type="hidden" id="custId" name="movie_genre" value="Drama">
                            <input type="hidden" id="custId" name="movie_code" value="ahn">
                            <button type="submit" name="movie_name" value="Anohana live action" class="btn btn-secondary btn-user btn-block" style="background-color: #212529; text-align: center; margin-top: 15px;">Add to watchlist</button>
                            </div>
                        </form>
                    </div>
                    <div class="card" style="width: 18rem; margin: 0 0.5em; box-shadow:2px 6px 8px 0 rgba(22,22,26,0.18); border: none; border-radius: 0;">
                        <img src="<?php echo base_url('assets/img-datamovies/Chiisana koi no uta.jpg');?>" class="card-img-top" style="max-width: 100%; max-height: 60%" alt="...">
                        <form method="post" action="<?= base_url('wrap/add_watchlist/'.$detailId['id'].'/'); ?>">
                            <div class="card-body">
                            <h5 class="card-title">Chiisana Koi No Uta</h5>
                            <input type="hidden" id="custId" name="movie_genre" value="Drama">
                            <input type="hidden" id="custId" name="movie_code" value="cku">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button type="submit" name="movie_name" value="Chiisana koi no uta" class="btn btn-secondary btn-user btn-block" style="background-color: #212529; text-align: center; margin-top: 15px;">Add to watchlist</button>
                            </div>
                        </form>
                    </div>
                    <div class="card" style="width: 18rem; margin: 0 0.5em; box-shadow:2px 6px 8px 0 rgba(22,22,26,0.18); border: none; border-radius: 0;">
                            <img src="<?php echo base_url('assets/img-datamovies/high and low.jpg');?>" class="card-img-top" style="max-width: 100%; max-height: 60%" alt="...">
                            <?php $movie_genre = 'Action';?>
                            <?php $movie_code = 'hal';?>
                        <form method="post" action="<?= base_url('wrap/add_watchlist/'.$detailId['id'].'/'); ?>">
                            <div class="card-body">
                            <h5 class="card-title">High and Low</h5>
                            <input type="hidden" id="custId" name="movie_genre" value="Action">
                            <input type="hidden" id="custId" name="movie_code" value="hal">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button type="submit" name="movie_name" value="High & Low" class="btn btn-secondary btn-user btn-block" style="background-color: #212529; text-align: center; margin-top: 15px;">Add to watchlist</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--akhir batas-->

            <!--batas-->
            <div class="carousel-item">
                <div class="cards-wrapper" style="justify-content: center; display: flex">
                    <div class="card" style="width: 18rem; margin: 0 0.5em; box-shadow:2px 6px 8px 0 rgba(22,22,26,0.18); border: none; border-radius: 0;">
                         <img src="<?php echo base_url('assets/img-datamovies/evangelion.jpg');?>" class="card-img-top" style="max-width: 100%; max-height: 60%" alt="...">
                        <form method="post" action="<?= base_url('wrap/add_watchlist/'.$detailId['id'].'/'); ?>">
                            <div class="card-body">
                            <h5 class="card-title">Evangelion</h5>
                            <input type="hidden" id="custId" name="movie_genre" value="Mecha">
                            <input type="hidden" id="custId" name="movie_code" value="evl">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button type="submit" name="movie_name" value="Evangelion" class="btn btn-secondary btn-user btn-block" style="background-color: #212529; text-align: center; margin-top: 15px;">Add to watchlist</button>
                            </div>
                        </form>
                    </div>
                    <div class="card" style="width: 18rem; margin: 0 0.5em; box-shadow:2px 6px 8px 0 rgba(22,22,26,0.18); border: none; border-radius: 0;">
                        <img src="<?php echo base_url('assets/img-datamovies/kimi no nawa.jpg');?>" class="card-img-top" style="max-width: 100%; max-height: 60%" alt="...">
                        <form method="post" action="<?= base_url('wrap/add_watchlist/'.$detailId['id'].'/'); ?>">
                            <div class="card-body">
                            <h5 class="card-title">Kimi No Na Wa</h5>
                            <input type="hidden" id="custId" name="movie_genre" value="Romance">
                            <input type="hidden" id="custId" name="movie_code" value="knn">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button type="submit" name="movie_name" value="Kimi No Nawa" class="btn btn-secondary btn-user btn-block" style="background-color: #212529; text-align: center; margin-top: 15px;">Add to watchlist</button>
                            </div>
                        </form>
                    </div>
                    <div class="card" style="width: 18rem; margin: 0 0.5em; box-shadow:2px 6px 8px 0 rgba(22,22,26,0.18); border: none; border-radius: 0;">
                        <img src="<?php echo base_url('assets/img-datamovies/code geass.jpg');?>" class="card-img-top" style="max-width: 100%; max-height: 60%" alt="...">
                        <form method="post" action="<?= base_url('wrap/add_watchlist/'.$detailId['id'].'/'); ?>">
                            <div class="card-body">
                            <h5 class="card-title">Code Geass</h5>
                            <input type="hidden" id="custId" name="movie_genre" value="Action">
                            <input type="hidden" id="custId" name="movie_code" value="cdg">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button type="submit" name="movie_name" value="Code Geass" class="btn btn-secondary btn-user btn-block" style="background-color: #212529; text-align: center; margin-top: 15px;">Add to watchlist</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--akhir batas-->

            
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" >
            <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: #212529"></span>
            <span class="visually-hidden"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: #212529"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
     <form action="<?= base_url('profile_user/'.$detailId['id']); ?>">
        <div style="margin-bottom: 20px">
            <button type="submit" class="btn btn-secondary btn-user btn-block" style="background-color: #212529; margin-top: 15px;">Back to profile</button>
        </div>
    </form>
    </div>
   
</section>


    
    
<!-- load bootstrap js file -->
 <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>