<?php require 'template/header.php' ?>

<?php 

  require '../function/function.php';
  
    // query untuk value data   
  $query_profile = view("SELECT * FROM tb_profil");
  
  if (isset($_POST['submit'])) {
      $sejarah = $_POST['sejarah'];
      $detail  = $_POST['detail'];
      $struktrual  = $_POST['stuktural'];
      $visi  = $_POST['visi'];
      $misi  = $_POST['misi'];
    
      $query_update = "UPDATE tb_profil SET 
                        sejarah = '$sejarah',
                        detail = '$detail',
                        struktural = '$struktrual',
                        visi = '$visi',
                        misi = '$misi'
                         ";

        $data = mysqli_query($conn, $query_update);

          print("<script>
          window.location.replace('profile.php');
          </script>");
    }

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
            <li class="active">Edit Profile Desa</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Data Profile</h3>
                </div><!-- /.box-header -->
                <!-- form start -->

                <?php
                // var_dump($rows);
                while($row = mysqli_fetch_assoc($query_profile)) : ?>

                <form role="form" action="" method="post">

                    

                  <div class="box-body">

                    <div class="form-group">
                      <label>Sejarah</label>
                      <textarea class="form-control" id="sejarah" name="sejarah" rows="6" placeholder="Enter ..."><?= $row['sejarah'] ?></textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Detail Desa</label>
                      <textarea class="form-control" id="detail" name="detail" rows="3" placeholder="Enter ..."><?= $row['detail'] ?></textarea>

                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Struktural</label>
                      <textarea class="form-control" id="struktural" name="stuktural" rows="3" placeholder="Enter ..."><?= $row['struktural'] ?></textarea>

                    </div>                    

                    <div class="form-group">
                      <label for="exampleInputEmail1">Visi</label>
                      <textarea class="form-control" id="visi" name="visi" rows="2" placeholder="Enter ..."><?= $row['visi'] ?></textarea>

                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Misi</label>
                      <textarea class="form-control" id="misi" name="misi" rows="3" placeholder="Enter ..."><?= $row['misi'] ?></textarea>

                    </div>

                  </div><!-- /.box-body -->

                  <?php endwhile; ?>

                  <div class="box-footer">
                    <button type="submit" name='submit' class="btn btn-primary">Simpan Perubahan</button>
                  </div>
                </form>
              </div><!-- /.box -->


            </div><!--/.col (left) -->
           
          </div>   <!-- /.row -->
        </section>
        
        <!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Plugin CK editor -->
    <script src="../ckeditor/ckeditor.js"></script>
    <script src="../ckeditor/styles.js"></script>
    <script type="text/javascript">
      CKEDITOR.replace('sejarah');
      CKEDITOR.replace('detail');
      CKEDITOR.replace('struktural');
      CKEDITOR.replace('visi');
      CKEDITOR.replace('misi');
    </script>
     <?php require 'template/footer.php' ?>