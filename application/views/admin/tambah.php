<div class="container">
    <div class="row">
        <div class="col-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    Tambah Data
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) :
                    ?><div class="alert alert-danger" role="alert"><?= validation_errors(); ?>
                        </div>
                    <?php endif ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama"></div>
                        <div class="form-group">
                            <label for="kontak">Kontak</label>
                            <input type="text" class="form-control" name="kontak"></div>
                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <input type="text" class="form-control" name="tempat"></div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori">
                                <option></option>
                                <?php
                                foreach ($kategori as $su) :
                                ?>
                                    <option value="<?= $su['id_kategori'] ?>">
                                        <?= $su['nama_kategori'] ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>