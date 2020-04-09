<div class="container">
    <div class="row">
        <div class="col-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    Tambah Data
                </div>
                <?php echo $this->session->flashdata('flash');?> 
                <div class="card-body">
                <?= form_open_multipart('admin/tambah'); ?>    
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama">
                            <small class="form-text text-danger ">
                                <?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kontak">Kontak</label>
                            <input type="text" class="form-control" name="kontak" maxlength="13">
                            <small class="form-text text-danger">
                                <?= form_error('kontak'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat Pasar</label>
                            <input type="text" class="form-control" name="tempat" value="Pasar Semampir" readonly>
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
                            <small class="form-text text-danger ">
                                <?= form_error('kategori'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kios">Foto Kios</label>
                            <input type="file" class="form-control" name="foto_kios">
                        </div>
                        <div class="form-group">
                            <label for="status">Status WhatsApp</label>
                            <select class="form-control" id="status" name="status_akun">
                                <option value="1" selected>Ada</option>
                                <option value="0">Tidak Ada</option>
                            </select>
                            <small class="form-text text-danger ">
                                <?= form_error('status_akun'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="detail">Detail Pedagang</label>
                            <textarea type="text" class="form-control" name="detail_pedagang"></textarea>
                            <small class="form-text text-danger ">
                                <?= form_error('detail_pedagang'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>