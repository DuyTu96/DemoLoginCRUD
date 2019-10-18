<?php
		if (isset($_POST['submit'])) {
			$email=$_POST['email'];
			$password=$_POST['password'];

			$sql="SELECT * FROM User
				WHERE user_mail = '$email' AND user_pass = '$password' ";
			$query = mysqli_query($conn, $sql);
			$row = mysqli_num_rows($query);
			if ($row>0) {
				if (!empty($_POST['remember'])){
					setcookie('rememberemail', $_POST['email'], time() + 60*60*24*30);
				}else{
					setcookie('rememberemail',"");
				}
				$_SESSION['email']= $email;
				$_SESSION['password']=$password;
				header('location:index.php');
			}else {
				$error= "Sai thong tin dang nhap";
			}
		}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V20</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="loginform/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginform/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginform/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginform/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginform/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="loginform/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginform/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginform/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="loginform/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginform/css/util.css">
	<link rel="stylesheet" type="text/css" href="loginform/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title p-b-43">
						<img src="../images/logo.png">
					</span>
					
					<div class="wrap-input100 rs1 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="email">
						<span class="label-input100">Username</span>
					</div>
					
					<div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="label-input100">Password</span>
					</div>

					<span class="container-login100-form-btn">
						<hr>
					</span>

					<div class="container-login100-form-btn">
						<label>
						<input name="remember" type="checkbox" value="Remember Me" checked="true">       Remember Me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="btn btn-primary">Đăng nhập</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="loginform/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="loginform/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="loginform/vendor/bootstrap/js/popper.js"></script>
	<script src="loginform/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="loginform/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="loginform/vendor/daterangepicker/moment.min.js"></script>
	<script src="loginform/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="loginform/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="loginform/js/main.js"></script>

</body>
</html>

	
	<!-- <div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
					<div class="panel-body">
					<form role="form" method="POST">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<button type="submit" name="submit" class="btn btn-primary">Đăng nhập</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>-->