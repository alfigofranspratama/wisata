<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Dokumentasi</h2>
                <ol>
                    <li><a href="<?= base_url('') ?>">Home</a></li>
                    <li>Dokumentasi</li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row portfolio-container" data-aos="fade-up">
                <?php
                foreach ($dokumentasi as $row) :
                ?>
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="<?= base_url('vendor/dokumentasi/') . $row->thumbnail ?>" style="width: 100% !important; height: 336px !important; object-fit:cover;" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="<?= base_url('vendor/dokumentasi/') . $row->thumbnail ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $row->nama_pengunjung ?>"><i class="bx bx-plus"></i></a>
                                <a href="<?= base_url('landingpage/dokumentasi/') . $row->id_dokumentasi ?>#portfolio-details" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>

        </div>
    </section><!-- End Portfolio Section -->

</main><!-- End #main -->