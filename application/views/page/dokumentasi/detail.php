<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Dokumentasi Detail</h2>
                <ol>
                    <li><a href="<?= base_url('') ?>">Home</a></li>
                    <li><a href="<?= base_url('landingpage/alldokumentasi/') ?>">Dokumentasi</a></li>
                    <li>Dokumentasi Detail</li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="<?= base_url('vendor/dokumentasi/') . $dokumentasi['thumbnail']; ?>" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Informasi</h3>
                        <ul>
                            <li><strong>Nama Pengunjung</strong>: <?= $dokumentasi['nama_pengunjung'] ?></li>
                            <li><strong>Tanggal Berkunjung</strong>: <?= $dokumentasi['tanggal']; ?></li>
                            <li>
                                <p>
                                    "<?php echo $dokumentasi['deskripsi'] ?>"
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->