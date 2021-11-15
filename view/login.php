<?php

session_start();

if (isset($_SESSION["login"])) {
	header('location: /jwb_webdinamis/view/index.php?status=success');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../assets/assets3/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/assets3/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/assets3/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/assets3/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/assets3/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/assets3/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/assets3/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/assets3/css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../assets/assets3/images/img-01.png" alt="IMG">
				</div>

				<form action="../controller/reg_login.php" class="login100-form validate-form" method="POST">
					<span class="login100-form-title">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
							Login
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="register.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="../assets/assets3/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="../assets/assets3/vendor/bootstrap/js/popper.js"></script>
	<script src="../assets/assets3/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="../assets/assets3/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="../assets/assets3/vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="../assets/assets3/js/main.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<?php

	if (isset($_GET["status"])) {
		if ($_GET["status"] === "success") {
			echo "<script>
  swal({
	position: 'top-end',
	icon: 'success',
	title: 'Your work has been saved',
	showConfirmButton: false,
	timer: 3000
  });
</script>";
		} elseif ($_GET["status"] === "error") {
			echo "
  <script>
  swal('Error', 'Maaf input salah', 'error');
</script>
  ";
		}
	}


	?>

</body>

</html>