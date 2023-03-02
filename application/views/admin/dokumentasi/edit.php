<?php
$q = $this->db->get_where('tb_dokumentasi', ['id_dokumentasi' => $id])->row_array();
?>
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <!-- General Form Elements -->
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row mb-3 mt-3">
                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto saat ini</label>
                            <div class="col-md-8 col-lg-9">
                                <img src="<?= base_url('vendor/dokumentasi/') ?><?= $q['thumbnail']; ?>" width="100%" alt="Profile">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-3 col-form-label">Foto</sup></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="thumbnail" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Nama Pengunjung</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_pengunjung" value="<?= $q['nama_pengunjung'] ?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Tanggal Berkunjung</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal" class="form-control" value="<?= $q['tanggal'] ?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Deskripsi Singkat (Opsional)</label>
                            <div class="col-sm-9">
                                <textarea name="deskripsi" id="" cols="30" rows="5" class="form-control"><?= $q['deskripsi'] ?></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <small for="" class="text-danger">Format Thumbnail hanya jpg dan png</small>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>
</section>