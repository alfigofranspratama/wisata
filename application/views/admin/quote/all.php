<?php $q = $this->db->get('tb_quote')->result(); ?>
<div class="card">
    <div class="card-body">
        <div class="card-title">
            <h2>
                <a href="<?= base_url('admins/quote/tambah') ?>" class="btn btn-primary">+ Tambah</a>
            </h2>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="width: 20% !important;">Profile</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Apa Katanya</th>
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
                        <td><img src="<?= base_url('vendor/quote/') . $row->profile ?>" class="img-thumbnail" alt=""></td>
                        <td><?= $row->nama; ?></td>
                        <td><?= $row->pekerjaan; ?></td>
                        <td><?= $row->quote; ?></td>
                        <td>
                            <a href="<?= base_url('admins/quote/hapus/') . $row->id ?>" onclick="return confirm('Yakin hapus data ini?')" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</div>