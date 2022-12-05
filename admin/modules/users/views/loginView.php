<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>LOGIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Baxster Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="public/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link rel="icon" href="favicon.ico" type="images/x-icon" >
<!-- font-awesome icons -->
<link href="public/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!-- js -->
<script src="public/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
</head> 
<body class="login-bg">

	<div class="login-body">
			<div class="login-heading">
				<h1>Login</h1>
			</div>
			<div class="login-info">
				<form action="?modules=users&controllers=index&action=login" method="post">
					<input type="text" class="user" name="username" placeholder="Username">
					<input type="password" name="password" class="lock" placeholder="Password">
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								<li>
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span>Remember me</label>
								</li>
							</ul>
						</div>
						<div class="forgot">
							<a href="#"></a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="SignIn" value="Login">
					<hr>
					<div class="login-icons">
						<ul>
							<li><a href="https://www.facebook.com/anhtruongnd210198/" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
				</form>
			</div>
		</div>
		<div class="go-back login-go-back">
				<a href="?modules=users&controller=index&action=login">Go To Home</a>
			</div>
		<div class="copyright login-copyright">
           <p>© 2020 TRUONG TRAN <a href="http://w3layouts.com/">HAILUA.ND</a></p>    
		</div>
</body>
</html>