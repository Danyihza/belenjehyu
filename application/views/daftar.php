<!doctype html>
<html lang="en">

<head>
	<title>BelenjehYu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/animate.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.min.css">

	<link rel="stylesheet" href="<?= base_url('assets/'); ?>fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/magnific-popup.css">

	<!-- Theme Style -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/mycard.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/myimage.css">

</head>

<body>

	<header role="banner">

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand absolute" href="<?= base_url('main'); ?>">Belenjehyu</a>


			</div>
			</div>
		</nav>
	</header>
	<!-- END header -->
    <div class="mb-5 element-animate">
	    <div class="block-17">
            <div class="card-body">
			    <p style="font-size: 17px; text-transform: uppercase; font-weight:bold;" align="justify" class="modal-title text-white" id="exampleModalCenterTitle">Form ini ditujukan untuk pengambilan data yang ditujukan untuk pembuatan pasar online berbasis WhatsApp dan Telepon</p>
			    <hr>
                <?php echo $this->session->flashdata('flash');?> 
							<?= form_open_multipart('admin/daftar'); ?>    
								<div class="form-group">
									<input type="text" class="form-control" name="nama" placeholder="Nama Pedagang/Toko">
									<small class="form-text text-danger ">
										<?= form_error('nama'); ?></small>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="kontak" maxlength="13" placeholder="Nomor Telepon">
									<small class="form-text text-danger">
										<?= form_error('kontak'); ?></small>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="tempat" value="Pasar Semampir" readonly>
									<small class="form-text text-danger ">
										<?= form_error('tempat'); ?></small></div>
								<div class="form-group">
									<select class="form-control" id="kategori" name="kategori">
										<option selected disabled>--Kategori--</option>
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
									<select class="form-control" id="status" name="status_akun">
										<option selected disabled>--Status WhatsApp--</option>
										<option value="1">Ada</option>
										<option value="0">Tidak Ada</option>
									</select>
									<small class="form-text text-danger ">
										<?= form_error('status_akun'); ?></small>
								</div>
								<div class="form-group">
									<textarea type="text" class="form-control" name="detail_pedagang" placeholder="Detail Dagangan"></textarea>
									<small class="form-text text-danger ">
										<?= form_error('detail_pedagang'); ?></small>
								</div>
								<div class="form-group">
									<h5>Foto Kios</h5>
									<input type="file" class="form-control" name="foto_kios" placeholder="Foto Kios">
								</div>
								    <button type="submit" name="tambah" class="form-control btn btn-primary">Daftar</button>
								    <a href="<?= base_url('main'); ?>"><button  type="button" name="kembali" class="form-control btn btn-primary">Kembali</button></a>
                            </form>
						</div>
					</div>
				</div>
	
	<footer class="site-footer">
		<div class="container">

			<div class="row pt-5">
				<div class="col-md-12 text-center copyright">

					<p class="float-md-left">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by
						<strong><a href="https://colorlib.com" target="_blank" class="text-white">Colorlib</a></strong>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
					<p class="float-md-right">
						<a href="https://www.facebook.com/fahrizal.firdaus.129?sk=wall" class="fa fa-facebook p-2"></a>
						<a href="https://www.instagram.com/ikirizal_/" class="fa fa-instagram p-2"></a>
					</p>
					<!-- hitwebcounter Code START -->
					<a href="https://www.hitwebcounter.com" target="_blank">
						<img src="https://hitwebcounter.com/counter/counter.php?page=7221949&style=0007&nbdigits=5&type=page&initCount=0" title="User Stats" Alt="PHP Hits Count" border="0">
					</a>
					<!-- Start of WebFreeCounter Code -->
					<a target="_blank"><img src="https://www.webfreecounter.com/hit.php?id=gukqxco&nd=1&style=71" border="0" alt="visitor counter"></a>
					<!-- End of WebFreeCounter Code -->
				</div>
			</div>
		</div>
	</footer>
	<!-- END footer -->



	<!-- loader -->
	<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" /></svg></div>

	<script src="<?= base_url('assets/'); ?>js/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/jquery-migrate-3.0.0.js"></script>
	<script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/owl.carousel.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/jquery.waypoints.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/jquery.stellar.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/jquery.animateNumber.min.js"></script>

	<script src="<?= base_url('assets/'); ?>js/jquery.magnific-popup.min.js"></script>

	<script src="<?= base_url('assets/'); ?>js/main.js"></script>

</body>

</html>