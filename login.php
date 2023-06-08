<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/specord/resource/php/class/core/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Special Order Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="resource/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="resource/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="resource/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="resource/css/util.css">
<link rel="stylesheet" type="text/css" href="resource/css/main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<?php logd(); ?>
		<div class="container-login100" style="background-image: url('resource/images/bg2.jpg');" >
			
			<div class="wrap-login100 scale-in-center">
				<form class="login100-form validate-form " action="" method="post">
					<span class="login100-form-logo slide-in-elliptic-right-bck">
						<img src="resource/img/ceulogo.png" class="img-fluid slide-in-elliptic-right-bck" alt="">
					</span>

					<span class="login100-form-title p-b-34 p-t-27 tracking-in-expand">
						Vault-Log in
					</span>

					<div class="wrap-input100 validate-input slide-in-right" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input slide-in-right" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password" required>
						
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<input type =hidden name="token" value="<?php echo Token::generate(); ?>">

					<div class="container-login100-form-btn slide-in-right">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="col-12 text-light pt-5 text-center tracking-in-expand" style="font-size:70%;">Created by R.Bolasoc || J. Anatalio </div>
					
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->

</body>
</html>