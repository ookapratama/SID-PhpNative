<?php 
    require 'template/header.php'; 
    require '../function/function.php';
   
    if (isset($_POST['submit'])) {
        
        $no_file = $_POST['no_file'];
        // var_dump(update($_POST, $no_file));
        if (insert($_POST, $no_file) > 0) {
            
            echo "<script>
            window.location.replace('wisata.php');
          </script>";
        }
        else {
            echo "<script>
                alert('Gagal gemink');
            </script>";   
        }
    }


    ?>

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Wisata Desa
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Tambah Wisata Desa</li>
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
                  <h3 class="box-title">Data Wisata</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                                
                <form role="form" action="" method="post" enctype="multipart/form-data">

                  <input type="hidden" name="no_file" value="2">

                  <div class="box-body">

                    <div class="form-group">
                      <label>Judul</label>
                      <input class="form-control" id="judul" name="judul" rows="6" placeholder="Enter ...">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Deskripsi Wisata</label>
                      <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Enter ..."></textarea>

                    </div>          

                    <div class="form-group">
                      <label for="exampleInputEmail1">Thumbnail Wisata</label>
                      <input type="file" required class="form-control" id="gambar" name="gambar" placeholder="Enter ..."> 

                    </div>

                  </div><!-- /.box-body -->

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
      CKEDITOR.replace('deskripsi');
    //   CKEDITOR.replace('penulis');
    //   CKEDITOR.replace('uploaded');
      CKEDITOR.replace('misi');
    </script>


<?php require 'template/footer.php'; ?>