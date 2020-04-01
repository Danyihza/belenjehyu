<div class="container"></div>
<div class="row mt-3">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h2>Pedagang</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $pedagang['nama_pedagang']; ?> </h5>
                <h6 class="card-subtitle mb-2 text-muted ">
                    <div> <img class="whatsapp" src="<?= base_url('assets/'); ?>images/whatsapp.png" width="46px">
                        <a><?= $pedagang['kontak_pedagang'] ?></a>
                    </div>
                </h6> <br>
                <p class=" card-text mt-3">
                    <?= $pedagang['tempat_pasar']; ?>
                </p>
                <a href="<?= base_url('admin') ?>" class="btn btn-primary float-right">Back</a>
            </div>
        </div>
    </div>
</div>
</div>