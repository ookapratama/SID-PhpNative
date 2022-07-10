<?php require 'header1.php';
require 'function/function.php';

$id = $_GET['id'];
var_dump($id);

$query_produk = view("SELECT * FROM tb_produk WHERE id_produk = $id");

?>

<section id="blog-single" class="p-top-80 p-bottom-80">

    <!--Container-->
    <div class="container clearfix">

        <div class="row">

            <div class="col-xs-12">

                <!--Post Single-->
                <div class="postSingle">

                    <?php while ($row = mysqli_fetch_array($query_produk)) : ?>
                        <div class="postMedia">
                            <img alt="" src="img/samangki/produk/<?= $row['gambar'] ?>">
                        </div>


                        <div class="postTitle">
                            <center>
                                <h1><?= $row['judul'] ?></h1>
                                <div class="divider-small"></div>
                            </center>
                        </div>
                        <!--Post title-->

                        <p>
                            <?= $row['deskripsi'] ?>
                        </p>
                    <?php endwhile; ?>

                </div>
            </div>
        </div>

        <hr>



    </div>
</section>

<div class="container">
    <div class="row">

        <?php
        $query_sub = view("SELECT * FROM tb_produk LIMIT 3");
        while ($row = mysqli_fetch_array($query_sub)) :
            $cut_info = substr($row['deskripsi'], 0, 50);

        ?>
            <!-- Sub Informasi -->



            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="?id=<?= $row['id_produk'] ?>">
                        <img src="img/samangki/produk/<?= $row['gambar'] ?>" alt="...">
                        <div class="caption">
                            <h6><?= $row['judul'] ?></h6>
                    </a>
                </div>
            </div>
    </div>

<?php endwhile; ?>


</div>
</div>



<?php require 'footer.php' ?>