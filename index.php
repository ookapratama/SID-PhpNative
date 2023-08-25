<?php

use kcfinder\session;

require 'header.php';
require 'function/function.php';

// Untuk cek session
if (session_status() === PHP_SESSION_ACTIVE)
        session_destroy();


// session_destroy();
// var_dump(session_destroy());

?>


<!-- Start Intro -->
<section id="data" class="parallax-bg" style="background-image:url(img/samangki/bg.jpg)" data-stellar-background-ratio="0.5">
    <!-- Section Title -->
    <div class="js-height-full container">
        <div class="intro-content white-color text-center vertical-section">
            <div class="vertical-content">
                <h4 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.8s">Selamat Datang di</h4>
                <h1 class="wow zoomIn m-bottom-20" data-wow-duration="1s" data-wow-delay="0.6s">Desa Samangki</h1>
                <a href="tentang_desa.php" class="btn btn-main btn-theme wow fadeInUp" data-wow-delay="0.8s">Selangkapnya</a>
            </div>
        </div>
        <!-- Scroll Down -->
        <!-- <div class="scroll-next">
                <a data-scroll href="#services" class="scroll-down"><i
                        class="fa fa-angle-down scroll-down-icon"></i></a>
            </div> -->
        <!-- End Scroll Down -->
    </div>
</section>
<!-- End Intro -->


<!-- Start Portfolio -->
<section id="portfolio" class="p-top-80">
    <div class="container-fluid no-padding">

        <!-- Section Title -->
        <div class="section-title text-center m-bottom-30">
            <h2>Wisata & Produk Desa</h2>
            <div class="divider-center-small"></div>
        </div>

        <!-- Portfolio-filter -->
        <ul class="pf-filter pf-filter-gray text-center list-inline">
            <li><a href="#" data-filter="*" class="iso-active iso-button">All</a></li>
            <li><a href="#" data-filter=".graphic" class="iso-button">Wisata</a></li>
            <li><a href="#" data-filter=".webdesign" class="iso-button">Produk Desa</a></li>
            <!-- <li><a href="#" data-filter=".branding" class="iso-button">Branding</a></li>
                <li><a href="#" data-filter=".video" class="iso-button">Video</a></li> -->
        </ul>

        <!-- Portfolio -->
        <div class="portfolio portfolio-isotope col-4">

            <!-- Wisata Item -->
            <?php
            $query_wisata = view("SELECT * FROM tb_wisata");

            while ($row = mysqli_fetch_array($query_wisata)) :
            ?>
                <div class="pf-item graphic">
                    <a href="<?= file_exists('img/samangki/wisata/' . $row['gambar_utama']) ? 'img/samangki/wisata/' . $row['gambar_utama'] : 'img/samangki/wisata/1.jpg'  ?>" class="pf-style lightbox-image mfp-image">
                        <div class="pf-image">
                            <img src="<?= file_exists('img/samangki/wisata/' . $row['gambar_utama']) ? 'img/samangki/wisata/' . $row['gambar_utama'] : 'img/samangki/wisata/1.jpg'  ?>" alt="">
                            <div class="overlay">
                                <div class="overlay-caption">
                                    <div class="overlay-content">
                                        <div class="pf-info white-color">
                                            <h4 class="pf-title"><?= $row['judul'] ?></h4>
                                            <p>Wisata</p>
                                        </div> <!-- .pf-info -->
                                    </div> <!-- .overlay-content -->
                                </div> <!-- .overlay-caption -->
                            </div> <!-- .overlay -->
                        </div> <!-- .pf-image -->
                    </a> <!-- .pf-style -->
                </div>
            <?php endwhile; ?>

            <!-- Produk Item -->
            <?php
            $query_produk = view("SELECT * FROM tb_produk");

            while ($row = mysqli_fetch_array($query_produk)) :

            ?>

                <div class="pf-item webdesign">
                    <a href="<?= file_exists('img/samangki/produk/' . $row['gambar']) ? 'img/samangki/produk/' . $row['gambar'] : 'img/samangki/produk/1.jpg'  ?>" class="pf-style lightbox-image mfp-image">
                        <div class="pf-image">
                            <img src="<?= file_exists('img/samangki/produk/' . $row['gambar']) ? 'img/samangki/produk/' . $row['gambar'] : 'img/samangki/produk/1.jpg'  ?>" alt="">
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
                    </a> <!-- .pf-style -->
                </div>

            <?php endwhile; ?>

        </div> <!-- /.container -->
</section>
<!-- End Portfolio -->


<!-- Start blog -->
<section id="informasi" class="p-top-80 p-bottom-80">

    <!-- Section Title -->
    <div class="section-title text-center m -bottom-40">
        <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">Informasi</h2>
        <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
        <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">Informasi mengenai Desa Samangki</p>
    </div>

    <!-- === blog === -->
    <div class="container ">
        <div class="row">

            <div id="owl-blog" class="owl-carousel owl-theme">

                <?php
                // dari berita yang terbaru di upload
                $query_informasi = view("SELECT * FROM tb_informasi ORDER BY uploaded DESC ");
                while ($row = mysqli_fetch_assoc($query_informasi)) :
                    $cut_info = substr($row['deskripsi'], 0, 200);
                ?>

                    <!-- === Blog item 1 === -->
                    <div class="blog wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="blog-media">
                            <a href="informasi_detail.php?id=<?= $row['id_informasi'] ?>">
                                <img src="<?= file_exists('img/samangki/informasi/' . $row['gambar']) ? 'img/samangki/informasi/' . $row['gambar'] : 'img/samangki/informasi/1.jpg' ?>" alt=""></a>
                        </div>
                        <!--post media-->

                        <div class="blog-post-info clearfix">
                            <span class="time"><i class="fa fa-calendar"></i><?= $row['uploaded'] ?></span>
                            <span class="comments"><a href="#"><i class="fa fa-comments"></i> 4 Comments</a></span>
                        </div>
                        <!--post info-->

                        <div class="blog-post-body">
                            <h4><a class="title" href="informasi_detail.php?id=<?= $row['id_informasi'] ?>"><?= $row['judul'] ?></a></h4>
                            <p class="p-bottom-20">
                                <?= $cut_info ?>
                            </p>
                            <a href="informasi_detail.php?id=<?= $row['id_informasi'] ?>" class="read-more">Read More >></a>
                        </div>
                        <!--post body-->


                    </div>
                    <!-- /.blog -->
                <?php endwhile; ?>

            </div><!-- /#owl-testimonials -->

        </div> <!-- /.row -->
    </div> <!-- /.container -->

</section>




<?php require 'footer.php' ?>