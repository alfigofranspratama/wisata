<?php $setting = $this->db->get('tb_settings')->row_array() ?>
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Setting Website</h5>

                    <!-- General Form Elements -->
                    <form method="POST" enctype="multipart/form-data" action="<?= base_url('admins/settings/edit/') . $setting['id'] ?>">
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Judul Halaman</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul_halaman" value="<?= $setting['judul_halaman'] ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Sambutan</label>
                            <div class="col-sm-9">
                                <input type="text" name="text_sambutan" value="<?= $setting['text_sambutan'] ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Deskripsi Sambutan</label>
                            <div class="col-sm-9">
                                <input type="text" name="desc_sambutan" value="<?= $setting['desc_sambutan'] ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Deskripsi Footer Web</label>
                            <div class="col-sm-9">
                                <input type="text" name="desc_web" value="<?= $setting['desc_web'] ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?= $setting['alamat'] ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Phone</label>
                            <div class="col-sm-9">
                                <input type="text" name="phone" value="<?= $setting['phone'] ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" value="<?= $setting['email'] ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-3 col-form-label">Sampul <sup>Min Height 1100px</sup></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="sampul" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Link Profil Twitter</label>
                            <div class="col-sm-9">
                                <input type="text" name="twitter" value="<?= $setting['twitter'] ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Link Profil Instagram</label>
                            <div class="col-sm-9">
                                <input type="text" name="instagram" value="<?= $setting['instagram'] ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Link Profil Facebook</label>
                            <div class="col-sm-9">
                                <input type="text" name="facebook" value="<?= $setting['facebook'] ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>
</section>