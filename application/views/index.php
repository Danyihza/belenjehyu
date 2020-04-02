<!doctype html>
<html lang="en">

<head>
	<title>BelenjehYu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/animate.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.min.css">

	<link rel="stylesheet" href="<?= base_url('assets/'); ?>fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/magnific-popup.css">

	<!-- Theme Style -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/mycard.css">
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
									</div>
								</div>
								<input type="submit" class="search-submit btn btn-primary" value="Cari">
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

			<div class="card">
				<div class="warna">
					<img class="icon" src="<?= base_url('assets/'); ?>images/<?= $u['gambar_kategori']; ?>" width="46px"></div>
				<div class="tengah">
					<h3><?= $u['nama_pedagang']; ?></h3>
					<a href="tel:<?= $u['kontak_pedagang'] ?>">
						<p><?= $u['kontak_pedagang']; ?></p>
					</a>
				</div>
				<div class="kanan">
					<a href="https://wa.me/62<?= $u['kontak_pedagang'] ?>?text=Halo+<?= $u['nama_pedagang'] ?>+%0D%0ASaya+ingin+membeli+sesuatu+di+toko+anda"><img class="whatsapp" src="<?= base_url('assets/'); ?>images/whatsapp.png" width="46px"></a>
				</div>
			</div>
		<?php endforeach; ?>
	<?php } ?>
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