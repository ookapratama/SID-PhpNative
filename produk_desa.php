<?php require 'header1.php';
require 'function/function.php';

$query_produk = view("SELECT * FROM tb_produk");

?>


<!-- Section Title Portfolio -->
<div class="section-title-bg text-center">
    <h2 class="wow fadeInDown no-margin" data-wow-duration="1s" data-wow-delay="0.6s"><strong>PRODUK DESA</strong>
    </h2>
    <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
    <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">PRODUK-PRODUK YANG ADA DI
        DESA
        SAMANGKI</p>
</div>


<!-- Start Portfolio -->
<section id="portfolio" class="p-top-80 p-bottom-80">
    <div class="container">

        <!-- Portfolio -->
        <div class="portfolio portfolio-isotope col-4 gutter">

            <!-- Portfolio Item -->
            <?php while ($row = mysqli_fetch_array($query_produk)) : ?>

                <div class="pf-item">

                    <!-- Button trigger modal -->
                    <a href="produk_detail.php?id=<?= $row['id_produk'] ?>" class="" >

                        <div class="pf-image">
                            <img src="img/samangki/produk/<?= $row['gambar'] ?>" alt="">
                            <div class="overlay">
                                <div class="overlay-caption">
                                    <div class="overlay-content">
                                        <div class="pf-info white-color">
                                            <h4 class="pf-title"><?= $row['judul'] ?></h4>
                                            <p>Produk Desa</p>
                                        </div> <!-- .pf-info -->
                                    </div> <!-- .overlay-content -->
                                </div> <!-- .overlay-caption -->
                            </div> <!-- .overlay -->
                        </div> <!-- .pf-image -->
                    </a>


                </div>
            <?php endwhile; ?>



        </div> <!-- Portfolio -->

    </div> <!-- /.container -->
</section>
<!-- End Portfolio -->


<!-- Modal -->


<?php require 'footer.php' ?>