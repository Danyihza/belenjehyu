<div class="container">
    <div class="row">
        <div class="col-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    Tambah Data
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama">
                            <small class="form-text text-danger ">
                                <?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kontak">Kontak</label>
                            <input type="text" class="form-control" name="kontak">
                            <small class="form-text text-danger">
                                <?= form_error('kontak'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <input type="text" class="form-control" name="tempat">
                            <small class="form-text text-danger ">
                                <?= form_error('tempat'); ?></small></div>
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