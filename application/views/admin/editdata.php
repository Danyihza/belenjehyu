<div class="container">
    <div class="row">
        <div class="col-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    Edit Data
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?= $pedagang['nama_pedagang']; ?>">

                            <small class="form-text text-danger" <?= form_error('nama'); ?>></small>
                        </div>
                        <div class=" form-group">
                            <label for="kontak">Kontak</label>
                            <input type="text" class="form-control" name="kontak" value="<?= $pedagang['kontak_pedagang']; ?>">
                            <small class=" form-text text-danger">
                                <?= form_error('kontak'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <input type="text" class="form-control" name="tempat" value="<?= $pedagang['tempat_pasar']; ?>">
                            <small class=" form-text text-danger ">
                                <?= form_error('tempat'); ?></small></div>
                        <div class=" form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" name="kategori" name="kategori">
                                <option></option>
                                <?php
                                foreach ($kategori as $su) :
                                ?>
                                    <option value="<?= $su['name_kategori'] ?>">
                                        <?= $su['nama_kategori'] ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>