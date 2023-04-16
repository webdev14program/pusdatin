<div class="row">
    <div class="col-md">
        <div class="alert alert-success" role="alert">
            <h4 class="text-uppercase font-weight-bold text-center">Umum <br> PUSDATIN SALEMBA</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-primary btn-sm text-uppercase font-weight-bold" data-toggle="modal" data-target="#exampleModal">
                    Tambah Profile
                </button>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md mt-2">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Personil</th>
                            <th scope="col">Jobdesk</th>
                            <th scope="col">Nomor Telpon</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $no = 1;
                            foreach ($personil as $row) {
                            ?>
                                <td class="text-center text-uppercase"><?php echo $no++; ?></td>
                                <td class="text-center text-uppercase"><?= $row['id_personil']; ?></td>
                                <td class=" text-uppercase"><?= $row['nama']; ?></td>
                                <td class=" text-uppercase"><?= $row['nama_level']; ?></td>
                                <td class=" text-uppercase">(+62) <?= $row['tlpn']; ?></td>
                                <td>
                                    <h5 class="text-center">
                                        <a class="btn btn-sm btn-primary text-uppercase font-weight-bold" href="<?= base_url() ?>Dashboard/detail_umum/<?= $row['id_personil']; ?>">Detail</a>
                                    </h5>
                                </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white text-uppercase font-weight-bold" id="exampleModalLabel">IT SUPORT PUSDATIN SALEMBA</h5>
            </div>
            <div class="modal-body">
                <?= form_open_multipart('Dashboard/simpan_umum'); ?>
                <div class="form-group">
                    <label>Fullname</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="number" name="tlpn" class="form-control">
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="alamat" class="form-control">
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="gambar" class="form-control-file">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <?= form_close(); ?>
            </div>

        </div>
    </div>
</div>