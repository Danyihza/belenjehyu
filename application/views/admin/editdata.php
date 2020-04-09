<div class="container">
    <div class="row">
        <div class="col-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    Edit Data
                </div>
                <?php echo $this->session->flashdata('flash');?> 
                <div class="card-body">
                <?= form_open_multipart('admin/update'); ?> 
                    <input type="hidden" class="form-control" name="id" value="<?= $qpedagang['id_pedagang']; ?>" >
                       <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?= $qpedagang['nama_pedagang']; ?>">
                            <small class="form-text text-danger" <?= form_error('nama'); ?>></small>
                        </div>
                        <div class=" form-group">
                            <label for="kontak">Kontak</label>
                            <input type="text" class="form-control" name="kontak" value="<?= $qpedagang['kontak_pedagang']; ?>">
                            <small class=" form-text text-danger">
                                <?= form_error('kontak'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat</label>
                            <input type="text" class="form-control" name="tempat" value="<?= $qpedagang['tempat_pasar']; ?>" readonly>
                            <small class=" form-text text-danger ">
                                <?= form_error('tempat'); ?></small></div>
                        <div class=" form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" name="kategori" name="kategori">
                                <option value="<?= $qpedagang['id_kategori']; ?>"><?= $qpedagang['nama_kategori']; ?></option>
                                <?php
                                foreach ($kategori as $su) :
                                ?>
                                    <option value="<?= $su['id_kategori'] ?>"><?= $su['nama_kategori'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kios">Foto Kios</label>
                            <input type="file" class="form-control" name="foto_kios">
                        </div>
                        <div class="form-group">
                            <label for="status">Status WhatsApp</label>
                            <select class="form-control" id="status" name="status_akun">
                                <option value="<?= $qpedagang['status_akun'] ?>">
                                <?php
                                    if($qpedagang['status_akun']==1){
                                        echo "Ada";
                                    }else{
                                        echo "Tidak Ada";
                                    }
                                ?></option>
                                <option value="1">Ada</option>
                                <option value="0">Tidak Ada</option>
                            </select>
                            <small class="form-text text-danger ">
                                <?= form_error('status_akun'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="detail">Detail Pedagang</label>
                            <textarea type="text" class="form-control" name="detail_pedagang"><?= $qpedagang['detail_pedagang'] ?></textarea>
                            <small class="form-text text-danger ">
                                <?= form_error('detail_pedagang'); ?></small>
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>