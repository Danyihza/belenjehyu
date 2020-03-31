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

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand absolute" href="<?= base_url('main'); ?>">Belenjehyu</a>


			</div>
			</div>
		</nav>
	</header>
	<!-- END header -->

	<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(http://localhost/belenjehyu/assets/images/big_image_2.jpg);">
		<div class="container">
			<div class="row align-items-center justify-content-center site-hero-inner">
				<div class="col-md-10">

					<div class="mb-5 element-animate">
						<div class="block-17">
							<h2 class="heading text-center mb-4">Find Oneline Courses That Suits You</h2>
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

	<?php
	foreach ($user as $u) :
	?>
		<div class="card">
			<div class="warna">
				<img class="daging" src="<?= base_url('assets/'); ?>images/daging.png" width="46px"></div>
			<div class="tengah">
				<h3><?= $u['nama_pedagang']; ?></h3>
				<a href="tel:<?= $u['kontak_pedagang']?>"><p><?= $u['kontak_pedagang']; ?></p></a>
			</div>
			<div class="kanan">
				<a href="https://wa.me/62<?= $u['kontak_pedagang']?>?text=Halo+<?=$u['nama_pedagang']?>+%0D%0ASaya+ingin+membeli+sesuatu+di+toko+anda"><img class="whatsapp" src="<?= base_url('assets/'); ?>images/whatsapp.png" width="46px"></a>
			</div>
		</div>
	<?php endforeach; ?>



	<!-- END section -->


	<footer class="site-footer">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
					<h3>University</h3>
					<p>Perferendis eum illum voluptatibus dolore tempora consequatur minus asperiores temporibus.</p>
				</div>
				<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
					<h3 class="heading">Quick Link</h3>
					<div class="row">
						<div class="col-md-6">
							<ul class="list-unstyled">
								<li><a href="#">Home</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Courses</a></li>
								<li><a href="#">Pages</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="list-unstyled">
								<li><a href="#">News</a></li>
								<li><a href="#">Support</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">Privacy</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
					<h3 class="heading">Blog</h3>
					<div class="block-21 d-flex mb-4">
						<div class="text">
							<h3 class="heading mb-0"><a href="#">Consectetur Adipisicing Elit</a></h3>
							<div class="meta">
								<div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
								<div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
								<div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
							</div>
						</div>
					</div>
					<div class="block-21 d-flex mb-4">
						<div class="text">
							<h3 class="heading mb-0"><a href="#">Dolore Tempora Consequatur</a></h3>
							<div class="meta">
								<div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
								<div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
								<div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
							</div>
						</div>
					</div>
					<div class="block-21 d-flex mb-4">
						<div class="text">
							<h3 class="heading mb-0"><a href="#">Perferendis eum illum</a></h3>
							<div class="meta">
								<div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
								<div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
								<div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
					<h3 class="heading">Contact Information</h3>
					<div class="block-23">
						<ul>
							<li><span class="icon ion-android-pin"></span><span class="text">203 Fake St. Mountain View, San
									Francisco, California, USA</span></li>
							<li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">+2 392 3929 210</span></a>
							</li>
							<li><a href="#"><span class="icon ion-android-mail"></span><span class="text">info@yourdomain.com</span></a></li>
							<li><span class="icon ion-android-time"></span><span class="text">Monday &mdash; Friday 8:00am -
									5:00pm</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row pt-5">
				<div class="col-md-12 text-center copyright">

					<p class="float-md-left">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by
						<a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
					<p class="float-md-right">
						<a href="#" class="fa fa-facebook p-2"></a>
						<a href="#" class="fa fa-twitter p-2"></a>
						<a href="#" class="fa fa-linkedin p-2"></a>
						<a href="#" class="fa fa-instagram p-2"></a>

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