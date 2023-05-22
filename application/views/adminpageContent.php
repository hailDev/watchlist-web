<section id="watchlist">
      <div class="container card o-hidden border-0 shadow" style="background-color: white; margin-top:100px; margin-bottom: 10px">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Dashboard</h2>
            <?= $this->session->flashdata('pesan');?>
          </div>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-auto">
            <table class="table">
              <thead class="text-center">
                <!-- <tr>
                  <th scope="col">No</th>
                  <th scope="col">Movies Name</th>
                  <th scope="col">Movies Genre</th>
                  <th scope="col">Movies Code</th>
                  <th scope="col">Action</th>
                </tr> -->
              </thead>
              <tbody class="text-center">
                <?php
                if (!empty($watchArr)) {
                    $n=1;
                    foreach ($watchArr as $wls) { ?>
                        <tr>
                            <th scope="row"><?= $n?></th>
                            <td><?=$wls['movie_name'] ?></td>
                            <td><?=$wls['genre'] ?></td>
                            <td><?=$wls['movie_code'] ?></td>
                            <td>
                                <a href="<?php echo base_url('wrap/delete_watchlist/');?>" class="btn btn-sm btn-danger" style="background-color: crimson; " ><span class="material-symbols-outlined">bookmark_remove</span></a> |
                                <a href="<?php echo base_url('wrap/get_det_watchlist/');?>" class="btn btn-sm btn-warning" style="background-color: #ffff66; color: #212529"><span class="material-symbols-outlined">edit</span></a>
                            </td>
                        </tr>
                        <?php $n ++;
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
    
<!-- load bootstrap js file -->
 <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>