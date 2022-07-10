<?php 
  require 'template/header.php';
  require '../function/function.php';

  $query = view("SELECT * FROM tb_wisata");
  $i = 1;
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Wisata
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data Wisata</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Wisata</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

                <a href="tambah_wisata.php" class="btn bg-olive" style="margin:10px 0;">Tambah</a>


                  <table id="example2" class="table table-bordered table-hover">

                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Wisata</th>
                        <th>Thumbnail</th>
                        <th>Deskripsi Wisata</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <?php while ($row = mysqli_fetch_array($query)) : ?>
                    <tbody>
                      <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $row['judul'] ?></td>
                        <td>
                          <img src="../img/samangki/wisata/<?= $row['gambar_utama'] ?>" width="150" alt="">
                        </td>
                        <td><?= $row['deskripsi'] ?></td>
                        <td>
                          <a href="edit_wisata.php?id=<?= $row['id_wisata'] ?>" class="btn normal bg-primary">Edit</a>
                          <a href="hapus_wisata.php?id=<?= $row['id_wisata'] ?>&no_file=2" class="btn normal bg-maroon">Hapus</a>
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