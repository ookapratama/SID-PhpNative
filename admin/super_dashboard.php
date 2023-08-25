<?php require 'template/header.php';
require '../function/function.php';

// query wisata
$query_wisata = mysqli_query($conn, "SELECT * FROM tb_wisata");
// query produk
$query_produk = mysqli_query($conn, "SELECT* FROm tb_produk");
// query informasi
$query_info = mysqli_query($conn, "SELECT * FROM tb_informasi");
// query user
$query_user = mysqli_query($conn, "SELECT * FROM tb_login");

?>

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <?php if ($_SESSION['level'] == 1) { ?>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">

              <?php $count_user = mysqli_num_rows($query_user); ?>

              <h3><?= $count_user ?></h3>
              <p>Akun Desa</p>
            </div>
            <div class="icon">
              <i class=" glyphicon glyphicon-user"></i>
            </div>
            <a href="user.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div><!-- ./col -->


        

      <?php } else {
      ?>
        
      <?php } ?>


    </div><!-- /.row -->


  </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require 'template/footer.php' ?>