<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row mt-3 ">
        <div class="col-md-6">
            <?php if ($this->session->flashdata('flash')) {
            ?> <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Pedagang<strong> Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php }  ?>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url('admin/tambah'); ?>" class="btn btn-primary">Tambah Pedagang</a>
        </div>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 mt-3">Data Pedagang</h1>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-auto"></div>
        <thead>
            <table class="table table-bordered">
                <tr>
                    <th scope="col">Action</th>
                    <th scope="col">Validasi</th>
                    <th scope="col">No</th>
                    <th scope="col">Foto Kios</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kontak</th>
                    <th scope="col">Tempat</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Status WhatsApp</th>
                    <th scope="col">Detail</th>
                </tr>
        </thead>
        <?php
        $no = 1;
        foreach ($pedagang as $su) {
        ?>

            <tbody>
                <tr>
                    <td>
                        <a href="<?= base_url() ?>admin/detail/<?= $su['id_pedagang'] ?>" class="badge badge-primary">Detail
                        </a>
                        <a href=" <?= base_url() ?>admin/dataedit/<?= $su['id_pedagang'] ?>" class="badge badge-warning">Edit
                        </a>
                        <a href=" <?= base_url() ?>admin/hapus/<?= $su['id_pedagang'] ?>" class="badge badge-danger" onclick="return confirm('Yakin anda ingin menghapus?');">Hapus
                        </a>
                    </td>
                    <td>
                    <?php if($su['keterangan']==0){?>
                        <a href="<?= base_url() ?>admin/valid/<?= $su['id_pedagang'] ?>" class="badge badge-danger">Tidak Valid
                    <?php }else{ ?>
                        <a href="<?= base_url() ?>admin/nvalid/<?= $su['id_pedagang'] ?>" class="badge badge-success">Valid
                    <?php } ?>     
                    </td>
                    <th scope="row"><?= $no++ ?></th>
                    <td align="center"><img width=64 src="<?= base_url('assets/images/kios/'.$su['foto_kios']); ?>"></td>
                    <td><?= $su['nama_pedagang']; ?></td>
                    <td><?= $su['kontak_pedagang']; ?></td>
                    <td><?= $su['tempat_pasar']; ?></td>
                    <td><?= $su['nama_kategori']; ?></td>
                    <td><?php if($su['status_akun']==1){
                        echo "Ada";
                    }else{
                        echo "Tidak Ada";
                    } ?></td>
                    <td><?= $su['detail_pedagang']; ?></td>
                    
                </tr>
            </tbody> <?php } ?> </table>
    </div>
</div>
</div> <!-- End of Main Content -->