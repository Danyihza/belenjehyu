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

	<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(http://belenjehyu.highmoon.xyz/assets/images/pasar.jpg);">
		<div class="container">
			<div class="row align-items-center justify-content-center site-hero-inner">
				<div class="col-md-10">

					<div class="mb-5 element-animate">
						<div class="block-17">
							<h2 class="heading text-center mb-4">Cari Pedagang Langganan Anda Disini</h2>
							<form action="<?= base_url('main/cari'); ?>" method="get" class="d-block d-lg-flex mb-4">
								<div class="fields d-block d-lg-flex">
									<div class="textfield-search one-third"><input type="text" class="form-control" name="search" placeholder="Cari nama pedagang disini..."></div>
									<div class="select-wrap one-third">
										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
										<select name="kategori" id="" class="form-control">
											<option selected disabled>Pilih Kategori...</option>
											<?php foreach ($kategori as $k) : ?>
												<option value="<?= $k['nama_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
											<?php endforeach; ?>
										</select>
										<select name="pasar" id="" class="form-control">
											<option selected disabled>Pilih Pasar...</option>
											<?php foreach ($pasar as $p) : ?>
												<option value="<?= $p['tempat_pasar']; ?>"><?= $p['tempat_pasar']; ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<input type="submit" class="search-submit btn btn-primary" value="Cari">
								<hr>
								<input type="button" class="search-submit btn btn-primary" value="Pendaftaran Pedagang" data-toggle="modal" data-target="#daftar">
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- END section -->
	<!-- <iframe width="300" height="150" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJM4kz1EIA1y0RkqgESViu2k0&key=AIzaSyDaTxK5QF8rmPFs14OG36FomPO1IGKD2rI" allowfullscreen></iframe> -->
	<?php
	if (!$user) {
	?>
		<p class="heading text-center mb-4" style="font-size: 30px;
			color: white;
			font-weight: bold;">Data Tidak Ditemukan</p>
	<?php
	} else { ?>
		<p class="heading text-center mb-4" style="font-size: 30px;
			color: white;
			font-weight: bold;">Daftar Pedagang</p>

		<?php
		foreach ($user as $u) :
		?>

			<div class="card" data-toggle="modal" data-target="#modal<?= $u['id_pedagang'] ?>">
				<div class=" warna">
					<img class="icon" src="<?= base_url('assets/'); ?>images/<?= $u['gambar_kategori']; ?>" width="46px"></div>
				<div class="tengah">
					<h3><?= $u['nama_pedagang']; ?></h3>
					<a href="tel:<?= $u['kontak_pedagang'] ?>">
						<p><?= $u['kontak_pedagang']; ?></p>
					</a>
				</div>
				<div class="kanan">
					<a href="https://wa.me/62<?= $u['kontak_pedagang'] ?>?text=Halo+<?= $u['nama_pedagang'] ?>+%0D%0ASaya+ingin+membeli+sesuatu+di+toko+anda"><img class="whatsapp" onclick="return confirm('Apakah')" src="<?= base_url('assets/'); ?>images/whatsapp.png" width="46px"></a>
				</div>
			</div>

			<!-- MODAL DETAIL -->
			<div class="modal fade" id="modal<?= $u['id_pedagang'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-scrollable" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="exampleModalCenterTitle">Detail Pedagang</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h5><?= $u['nama_pedagang']; ?></h5>
							<p style="color: #000000;">Detail Pedagang :</p>
							<textarea class="form-control" id="message-text" disabled><?= $u['detail_pedagang'];?></textarea>
							<?php if ($u['tempat_pasar'] == 'Pasar Semampir') {
								$maps = "https://www.google.com/maps/embed/v1/place?q=place_id:ChIJM4kz1EIA1y0RkqgESViu2k0&key=AIzaSyCoI1l6XyZhqEHPrKTRbkx60HLm_Lj4w2k&maptype=satellite&zoom=17";
							} elseif ($u['tempat_pasar'] == 'Pasar Pajarakan') {
								$maps = "https://www.google.com/maps/embed/v1/place?q=place_id:ChIJfxR6TngA1y0RPGGuVj5oB9U&key=AIzaSyCoI1l6XyZhqEHPrKTRbkx60HLm_Lj4w2k&maptype=satellite&zoom=18";
							}
							?>
							<!-- Trigger the Modal -->
							<br>
							<center><img id="myImg" src="<?= base_url('assets/images/kios/'.$u['foto_kios']); ?>" alt="Snow" style="width:100%;max-width:200px"></center>
							<center>
								<p style="color: #000000; text-transform: uppercase;">KIOS <?= $u['nama_pedagang']?></p>
							</center>
							<hr>
							<center>
								<h6 style="color: #000000;">MAPS</h6>
							</center>
							<!-- <iframe src="https://hargapangan.id/" width="310" frameborder="0" scrolling="auto" allowfullscreen="true"></iframe> -->
							<iframe width="100%" frameborder="0" style="border:1" src="<?= $maps; ?>" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>


		<?php endforeach; ?>
	<?php } ?>

	<!-- Modal Daftar -->
	<div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalCenterTitle">Form Pendaftaran</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p class="modal-title text-danger" id="exampleModalCenterTitle">Form ini ditujukan untuk pengambilan data yang ditujukan untuk pembuatan pasar online berbasis WhatsApp dan Telepon</p>
							<hr>
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
								<button type="submit" name="tambah" class="btn btn-primary float-right">Daftar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
	<hr>
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