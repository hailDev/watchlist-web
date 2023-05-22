<section id="users" style="padding-top: 7rem">
        <div class="container-sm">
        <div class="row justify-content-md-center">
        <div class="card o-hidden border-0 shadow" style="background: #f0f8ff; width: auto">
        <div class="col-md-auto">
        <h2 style="text-align: center">Users</h2>
            <table class="table">
                <thead style="text-align: center">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody style="text-align: center">
                <?php
                $n=1;
                $eml="";
                foreach ($users as $u) { ?>
                    <?php if($u['role']==1){
                        $u['role'] = "admin";
                    }elseif($u['role']==2){
                        $u['role'] = "user";
                    }
                    ?>
                    <th scope="row"><?= $n?></th>
                    <td><?=$u['id'] ;?></td>
                    <td><?=$u['name'] ;?></td>
                    <td><?=$u['email'] ;?></td>
                    <td><?=$u['age'] ;?></td>
                    <td><?=$u['role'] ;?></td>
                    <td>
                    <form action="<?php echo 
                    base_url('deleteuserData');?>" method="POST" style="display: inline-block;">
                        <input type="hidden" name="email" value=<?=$u['email'] ?>>
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                        <button type="submit" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editUserModal<?=$u['id'] ;?>">Edit</button>              
                </td>
                </tr>
                
            <?php $n ++; } ?>
                    
                </tbody>
            </table>
            
        </div>
        </div>
        </div>
        </div>
        <div style="text-align: center">
            <button type="submit" class="btn btn-secondary btn-user btn-block" style="background-color: #212529; margin-top: 15px;">Add user</button>
        </div>
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

<!-- Modal -->
<?php foreach ($users as $u) { ?>
<div class="modal fade" id="editUserModal<?=$u['id'] ?>" tabindex="-1" aria-labelledby="editUserModalLabel<?=$u['id'] ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editUserModalLabel">Edit user</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> 
        <form action="<?php echo 
                    base_url('updateuserData');?>" method="POST" style="display: inline-block;">
                        <input type="hidden" name="email" value=<?=$u['email'] ?>>
            <div class="modal-body">
                        <div class="mb-3 row"> 
                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-user" id="inputname" placeholder="Name" name="name" style="margin-top: 5px" value="<?=$u['name'] ?>">
                                <?= form_error('age', '<small class="text-danger pl-2">', '</small>');?>
                            </div>
                        </div>

                        <div class="mb-3 row"> 
                            <label for="inputAge" class="col-sm-2 col-form-label">Age</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-user" id="inputage" placeholder="Age" name="age" style="margin-top: 5px" value="<?=$u['age'] ?>">
                                <?= form_error('age', '<small class="text-danger pl-2">', '</small>');?>
                            </div>
                        </div>

                        <div class="mb-3 row"> 
                            <label for="inputRole" class="col-sm-2 col-form-label">Role</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-user" id="inputage" placeholder="Role" name="role" style="margin-top: 5px" value="<?=$u['role'] ?>">
                                <?= form_error('role', '<small class="text-danger pl-2">', '</small>');?>
                            </div>
                        </div>

                        <div class="mb-3 row"> 
                            <label for="inputRole" class="col-sm-2 col-form-label">Note</label>
                            <div class="col-sm-10">
                                <div style="font-size: 15px";>
                                <p>Role 1 is Admin<br>Role 2 is User</p>
                                </div>
                            </div>
                        </div>

                        

                        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
  </div>
</div>
<?php $n ++; } ?>

    
    
<!-- load bootstrap js file -->
 <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>