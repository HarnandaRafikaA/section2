<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="style-1.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
		body {
			background: #303234;
		}
		#content {
			font-family: Inter;
			font-style: normal;
			color: #4f4f4f;
			width: 628px;
			margin: 15px auto;
			height: auto;
			padding: 20px;
			background-color: #F6F6F6;
			box-shadow: 0 4px 8px 0;
			border-radius: 24px;
		}
	</style>
</head>
<body>
	<div id="content">
		<form action="login.php" method="POST" autocomplete="">
			<h1 style="text-align: center; font-weight: bold;">Welcome to SIKE!
			</h1>
			<p>[slogan text]</p>
			<?php 
			if (count($errors) > 0) {
				?>
				<div class="alert">
					<?php 
					foreach ($errors as $showerror) {
						echo $showerror;
					}
					?>
				</div>
				<?php
			}
			?>
			<h3 style="font-weight: bold; text-align: left;">Login Now</h3>
			<div class="form-row pagination justify-content-center">
				<div class="form-group col-md-8">
					<div class="input-group">
						<input type="email" name="email" class="form-control border-right-0" placeholder="Email Address" required value="<?php echo $email ?>">
						<div class="input-group-append">
							<span class="input-group-text bg-transparent"><i class="fas fa-envelope"></i></span>
						</div>
					</div>
					<p></p>

					<div class="input-group">
						<input type="password" name="password" class="form-control border-right-0" placeholder="Password" required>
						<div class="input-group-append">
							<span class="input-group-text bg-transparent"><i class="fas fa-unlock"></i></span>
						</div>
					</div>
					<p></p>

					<table>
						<tr>
							<td>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" name="rememberme" class="custom-control-input" id="rememberme">
									<label class="custom-control-label pagination justify-content-left" for="rememberme">Remember Me</label>
								</div>
							</td>
							<td>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</td>
							<td>
								<a style="color: #4f4f4f; font-weight: bold; text-decoration: none;" href="forgotpass.php">Forgot password?</a>
							</td>
						</tr>
					</table>
					<p></p>

					<input style="background: #30696E; border-color: #30696E; font-weight: bold; font-size: 12pt;" class="btn btn-primary btn-lg btn-block" type="submit" name="login" value="Login">
				</div>
			</div>
			
			<p style="text-align: center;">New to SIKE? <a style="text-decoration: none; font-weight: bold; color: #4F4F4F;" href="register.php">Register now</a></p>
		</form>
	</div>
</body>
</html>