<?php require 'template/header.php' ?>
<?php 

  require '../function/function.php';
  
  $query_profile = view("SELECT * FROM tb_profil");
  

?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Profile Desa
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Profile Desa</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Profile</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Sejarah</th>
                        <th>Detail </th>
                        <th>Struktur</th>
                        <th>Visi</th>
                        <th>Misi</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <?php 
                    $i = 1;
                    while($row = mysqli_fetch_assoc($query_profile)) : ?>
                    <tbody>
                        <td><?= $i++ ?></td>
                        <td><?= $row['sejarah'] ?></td>
                        <td><?= $row['detail'] ?></td>
                        <td><?= $row['struktural'] ?></td>
                        <td><?= $row['visi'] ?></td>
                        <td><?= $row['misi'] ?></td>
                        <td>
                          <a href="edit_profile.php" class="btn normal bg-primary">Edit</a>
                        </td>
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