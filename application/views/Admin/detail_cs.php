<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-primary btn-sm" href="<?= base_url() ?>Dashboard/cs">Kembali</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mt-2">
        <div class="card text-center">

            <div class="card-body">
                <h5>
                    <img src="<?= base_url() ?>assets/upload/<?= $personil['gambar'] ?>" alt="personel" style="weight:250px;height:300px">
                </h5>

            </div>
            <div class="card-footer text-muted">
                <h5 class="text-center"><?= $personil['nama'] ?></h5>
            </div>
        </div>
    </div>
    <div class="col-md-8 mt-2">
        <div class="card">
            <div class="card-body">
                <h2>About Profile</h2>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Full Name</td>
                            <td class="text-uppercase font-weiight-bold"><?= $personil['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td class="text-uppercase font-weiight-bold"><?= $personil['tlpn'] ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td class="text-uppercase font-weiight-bold"><?= $personil['alamat'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-body">
                <h2>working status</h2>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Status</td>
                            <td class="text-uppercase font-weiight-bold"><?= $personil['nama_level'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>