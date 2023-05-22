<section id="profile">
      <div class="container card o-hidden border-0 shadow" style="background-color: white; margin-top: 10%" >
        <div class=" row text-center mb-3">
          <div class="col">
            <h2 style="margin-top: 20px">Profile</h2>
            
          </div>
        </div>
        <div class="row justify-content-center fs-5 ">
          <div class="col-md-5">
            <div style="display: flex; align-items: center;">
                <p style="width: 70px;">Name</p>
                <p>: <?php echo $nama; ?></p>
            </div>
            <div style="display: flex; align-items: center;">
                <p style="width: 70px;">Email</p>
                <p>: <?php echo $email; ?></p>
            </div>
            <div style="display: flex; align-items: center;">
                <p style="width: 70px;">Age</p>
                <p>: <?php echo $umur; ?></p>
            </div>
            
          </div>
          <div class="col-md-3">

            <img src="<?php echo base_url('assets/img-profile/'.$foto);?>" width="200px" class="rounded-circle img-thumbnail" style="border: 7px solid #dcdcdc; width: 200px; height: 200px;" alt="">
            <?php echo form_open_multipart('user/add_fotoprofile/'); ?>
            <div class="form-group">  
                <?= $this->session->flashdata('message');?>
                <input type="file" name="image" class="form-control" size="20" required style="margin-top: 10px; margin-bottom: 10px">
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
                  <th scope="col">Unmark</th>
                </tr>
              </thead>
              <tbody class="text-center">
    <?php
    if (!empty($movies)) {
        $n = 1;
        foreach ($movies as $mvs) {
    ?>
            <tr>
                <th scope="row"><?= $n ?></th>
                <td><?= $mvs->movie_name ?></td>
                <td><?= $mvs->movie_genre ?></td>
                <td><?= $mvs->movie_code ?></td>
                <td>
                    <form action="<?php echo base_url('deleteUserWatchlist');?>" method="POST" class="btn btn-sm btn-danger">
                        <input type="hidden" id="id" name="id" value="<?=$mvs->id ?>">
                        <button class="material-symbols-outlined material-symbols-outlined btn btn-sm btn-danger" style="background-color: crimson;">bookmark_remove</button>
                    </form>
                </td>
            </tr>
    <?php
            $n++;
        }
    } else {
        echo '<tr><td colspan="5" class="text-center">No data available</td></tr>';
    }
    ?>
</tbody>

            </table>
          </div>
        </div>
      </div>
    </section>
    <form action="<?= base_url('userMovies'); ?>">
        <div style="text-align: center">
            <button type="submit" class="btn btn-secondary btn-user btn-block" style="background-color: #212529; margin-bottom: 3%;">
              <span class="material-symbols-outlined">
                bookmark_add
              </span>
              Movies
            </button>
        </div>
    </form>
    
<!-- load bootstrap js file -->
 <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>