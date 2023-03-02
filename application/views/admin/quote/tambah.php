<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <!-- General Form Elements -->
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row mb-3 mt-3">
                            <label for="inputNumber" class="col-sm-3 col-form-label">Profile</sup></label>
                            <div class="col-sm-9">
                                <input class="form-control" name="profile" type="file" id="formFile" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Pekerjaan</label>
                            <div class="col-sm-9">
                                <input type="text" name="pekerjaan" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Apa Katanya</label>
                            <div class="col-sm-9">
                                <textarea name="quote" id="" cols="30" rows="5" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <small for="" class="text-danger">Format Profile hanya jpg dan png</small>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>
</section>