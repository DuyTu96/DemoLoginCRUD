<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="/admin/css/bootstrap.min.css" rel="stylesheet">
	
	<link href="/admin/css/styles.css" rel="stylesheet">
</head>

<body>
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
	<div class="row">
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
		</div><!-- /.col-->
	</div><!-- /.row -->
</body>

</html>