<?php $q = $this->db->get('tb_dokumentasi')->result(); ?>
<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h2>
                <a href="<?= base_url('admins/dokumentasi/tambah') ?>" class="btn btn-primary">+ Tambah</a>
            </h2>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="width: 20% !important;">Thumbnail</th>
                    <th scope="col">Nama Pengunjung</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($q as $row) :
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><img src="<?= base_url('vendor/dokumentasi/') . $row->thumbnail ?>" class="img-thumbnail" alt=""></td>
                        <td><?= $row->nama_pengunjung; ?></td>
                        <td><?= $row->tanggal; ?></td>
                        <td><?= $row->deskripsi; ?></td>
                        <td>
                            <a href="<?= base_url('admins/dokumentasi/edit/') . $row->id_dokumentasi ?>" class="btn btn-primary btn-sm"><i class="bi bi-pen"></i></a>
                            <a href="<?= base_url('admins/dokumentasi/hapus/') . $row->id_dokumentasi ?>" onclick="return confirm('Yakin hapus data ini?')" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</div>