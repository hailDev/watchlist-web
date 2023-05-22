<section id="profile">
    
    <div class="container card o-hidden border-0 shadow" style="margin-top:4%; margin-bottom:3%; background-color: white">
    <h2 class="text-center">Movies</h2>
    <div class="text-center">
        <?= $this->session->flashdata('message');?> 
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php for ($i = 0; $i < count($dataMovies); $i++): ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i == 0) ? 'active' : ''; ?>"></li>
        <?php endfor; ?>
    </ol>
    <div class="carousel-inner">
        <?php $counter = 0; ?>
        <?php foreach ($dataMovies as $index => $movie): ?>
            <?php if ($counter % 3 == 0): ?>
                <div class="carousel-item <?php echo ($index == 0) ? 'active' : ''; ?>">
                    <div class="cards-wrapper" style="justify-content: center; display: flex">
            <?php endif; ?>
            <div class="card" style="width: 18rem; margin: 0 0.5em; box-shadow:2px 6px 8px 0 rgba(22,22,26,0.18); border: none; border-radius: 0;">
                <img src="<?php echo base_url('assets/img-datamovies/'.$movie['movie_image']);?>" class="card-img-top" style="max-width: 100%; max-height: 50%" alt="...">
                <form method="post" action="<?= base_url('addWatchlistUser'); ?>">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center"><?php echo $movie['movie_name']; ?></h5>
                        <h6 class="card-title">Genre   : <?php echo $movie['movie_genre']; ?></h6>
                        <h6 class="card-title">Rating  : <?php echo $movie['movie_rating']; ?></h6>
                        
                        <input type="hidden" id="custId" name="movie_name" value="<?php echo $movie['movie_name']; ?>">
                        <input type="hidden" id="custId" name="movie_kode" value="<?php echo $movie['movie_kode']; ?>">
                        <input type="hidden" id="custId" name="movie_genre" value="<?php echo $movie['movie_genre']; ?>">
                        <input type="hidden" id="custId" name="movie_id" value="<?php echo $movie['movie_id']; ?>">
                        <p class="card-text"><?php echo $movie['description']; ?></p>
                        <button type="submit" class="btn btn-secondary btn-user btn-block" style="background-color: #212529; text-align: center; margin-top: 15px; height:45px;">
                            <span class="material-symbols-outlined" >
                                bookmark
                            </span>
                            <span style="padding-left: 1px;">
                                 add
                            </span>
                        </button>
                    </div>
                </form>
                <form action="<?= base_url('userRating'); ?>" method="post">
                    <div class="mb-4 row align-items-center" style="padding-left: 15px">
                            <div class="col-sm-3" >
                                <button type="submit" class="btn btn-secondary btn-user btn-block" style="background-color: #212529; width: 70px; height: 40px">
                                    Rate
                                </button>
                                <input type="hidden" id="custId" name="movie_kode" value="<?php echo $movie['movie_kode']; ?>">
                            </div> 
                            <div class="col-sm-3" style="margin-left: 10px;">
                                <input type="text" class="form-control form-control-user" id="inputrating" placeholder="0" name="rating" style="height: 35px; width: 35px" value="">
                                <?= form_error('role', '<small class="text-danger pl-2">', '</small>');?>
                            </div>  
                        </div>
                    </div>
                </form> 
            <?php $counter++; ?>
            <?php if ($counter % 3 == 0 || $counter == count($dataMovies)): ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: #000;"></span>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: #000;"></span>
    </a>
</div>

<script>
    // Inisialisasi carousel
    $('.carousel').carousel();
</script>



   
</section>


    <!-- Masukkan script jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Masukkan script Bootstrap Carousel -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!--Konten-->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
 <!-- load bootstrap js file -->
 <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>