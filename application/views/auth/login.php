<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login Admin Wisata</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('vendor/admin/') ?>assets/img/favicon.png" rel="icon">
    <link href="<?= base_url('vendor/admin/') ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('vendor/admin/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('vendor/admin/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('vendor/admin/') ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('vendor/admin/') ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url('vendor/admin/') ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url('vendor/admin/') ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('vendor/admin/') ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('vendor/admin/') ?>assets/css/style.css" rel="stylesheet">

    <style>
        body {
            background: url("<?= base_url('vendor/images/backround-vector.png') ?>");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

</head>

<body>
    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login Wisata</h5>
                                        <p class="text-center small">Masukkan Email dan Password dengan benar.</p>
                                    </div>
                                    <form class="row g-3 needs-validation" novalidate method="post" action="<?= base_url('admin'); ?>">
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <input type="email" name="email" class="form-control" id="yourUsername" required>
                                                <div class="invalid-feedback">Masukkan Email.</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword" required>
                                            <div class="invalid-feedback">Masukkan Password.</div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main><!-- End #main -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <?= $this->session->flashdata('pesan'); ?>
    <!-- Vendor JS Files -->
    <script src="<?= base_url('vendor/admin/') ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url('vendor/admin/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('vendor/admin/') ?>assets/vendor/chart.js/chart.min.js"></script>
    <script src="<?= base_url('vendor/admin/') ?>assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?= base_url('vendor/admin/') ?>assets/vendor/quill/quill.min.js"></script>
    <script src="<?= base_url('vendor/admin/') ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?= base_url('vendor/admin/') ?>assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url('vendor/admin/') ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('vendor/admin/') ?>assets/js/main.js"></script>

</body>

</html>