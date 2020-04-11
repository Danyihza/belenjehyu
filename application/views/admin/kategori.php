<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row mt-3 ">
        <div class="col-md-6">
        <?php echo $this->session->flashdata('flash');?> 
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <button type="button" data-toggle="modal" data-target="#tambah" class="btn btn-primary">Tambah Kategori</button>
        </div>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 mt-3">Data Kategori</h1>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-auto"></div>
        <thead>
            <table class="table table-bordered">
                <tr>
                    <th scope="col">Action</th>
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Gambar</th>
                </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($kategori as $su) {
        ?>

            <tbody>
                <tr>
                    <td>
                        <a href=" <?= base_url() ?>admin/hapuskat/<?= $su['id_kategori'] ?>" class="badge badge-danger" onclick="return confirm('Yakin anda ingin menghapus?');">Hapus
                        </a>
                    </td>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $su['nama_kategori']; ?></td>
                    <td align="center"><img width=64 src="<?= base_url('assets/images/'.$su['gambar_kategori']); ?>"></td>        
                </tr>
            </tbody> <?php } ?> </table>
    </div>
</div>
</div> <!-- End of Main Content -->

<!-- MODAL DETAIL -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-scrollable" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="exampleModalCenterTitle">Tambah Kategori</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                            <?= form_open_multipart('admin/tambahkat'); ?>    
                                <div class="form-group">
                                    <label for="kat">Kategori</label>
                                    <input type="text" class="form-control" name="nama_kategori" required>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Gambar Kategori</label>
                                    <input type="file" class="form-control" name="gambar_kategori" required>
                                </div>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</button>
                            </form>
                        </div>
					</div>
				</div>
			</div>