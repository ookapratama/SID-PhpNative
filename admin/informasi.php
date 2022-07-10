<?php 
    require 'template/header.php';
    require '../function/function.php';

    $query_informasi = view("SELECT * FROM tb_informasi");

 ?>

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Informasi Desa
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Informasi Desa</li>
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

                <a href="tambah_informasi.php" class="btn bg-olive" style="margin:10px 0;">Tambah</a>

                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Penulis</th>
                        <th>Tanggal Upload</th>
                        <th>Gambar</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <?php 
                    $i = 1;
                    while($row = mysqli_fetch_assoc($query_informasi)) : 

                    $cut = substr($row['deskripsi'], 0, 150);
                    
                    ?>
                    <tbody>
                        <td><?= $i++ ?></td>
                        <td><?= $row['judul'] ?></td>
                        <td><?= $cut ?></td>
                        <td><?= $row['penulis'] ?></td>
                        <td><?= $row['uploaded'] ?></td>
                        <td><img src="../img/samangki/informasi/<?= $row['gambar'] ?>" width="150" alt=""></td>
                        <td>
                          <a href="edit_informasi.php?id=<?= $row['id_informasi'] ?>" class="btn normal bg-primary">Edit</a>
                          <a href="hapus_informasi.php?id=<?= $row['id_informasi'] ?>&no_file=4" class="btn normal bg-maroon">Hapus</a>
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