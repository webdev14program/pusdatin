<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 text-center text-uppercase font-weigt-bold">personil pusdatin salemba</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php foreach ($personil as $row) : ?>
            <div class="col-md mt-2">
                <div class="card p-2" style="width: 18rem;">
                    <img src="<?= base_url() ?>assets/upload/<?= $row['gambar'] ?>" class="card-img-top" alt="personel" style="weight:150px;height:250px">
                    <div class="card-body">
                        <h5 class="card-text text-center text-uppercase"><?= $row['nama'] ?> <br> <?= $row['nama_level'] ?></h5>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>