<!DOCTYPE html>
<html>

<head>
	<title>Login Admin</title>
	<link rel="icon" href="<?= base_url('assets/'); ?>images/avatar.svg" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/auth.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<img class="wave" src="<?= base_url('assets/'); ?>images/wave.png">
	<div class="container">
		<div class="img">
			<img src="<?= base_url('assets/'); ?>images/bg.svg">
		</div>
		<div class="login-content">
			<form action="" method="post">
				<img src="<?= base_url('assets/'); ?>images/avatar.svg">
				<h2 class="title">Welcome Admin</h2>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Username</h5>
						<input type="text" name="uname" class="input">
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Password</h5>
						<input type="password" name="pwd" class="input">
					</div>
				</div>
				<!-- <a href="#">Forgot Password?</a> -->
				<input type="submit" class="btn" value="Login">
			</form>
		</div>
	</div>
	<script type="text/javascript" src="<?= base_url('assets/'); ?>js/auth.js"></script>
</body>

</html>