<?php 
  require 'template/header.php';
  require '../function/function.php';

  $query = view("SELECT * FROM tb_login");
  $i = 1;
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data User
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data User</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data User</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <a href="tambah_user.php" class="btn  btn-success">+ Tambah</a>

                  <table id="example2" class="table table-bordered table-hover">

                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Profile</th>
                        <th>Nama User</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <?php while ($row = mysqli_fetch_array($query)) : ?>
                    <tbody>
                      <tr>
                        <td><?= $i++ ?></td>
                        <td>
                          <img src="../img/profile/<?= $row['profile'] ?>" width="150" alt="">
                        </td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['username'] ?></td>
                        <td><?= $row['password'] ?></td>

                        <td>
                          <a href="edit_user.php?id=<?= $row['id_login'] ?>" class="btn normal bg-primary">Edit</a>
                          <a href="hapus_user.php?id=<?= $row['id_login'] ?>&no_file=1" class="btn normal bg-maroon">Hapus</a>
                        </td>
                      </tr>
                      
                    </tbody>
                    <?php endwhile; ?>

                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     <?php require 'template/footer.php' ?>