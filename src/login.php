<?php 

require_once 'core/init.php';

echo Session::flash('loggedOutSucces');


if(isset($_POST['submit'])) {
	
	//Validate function
	
	$email 		= $_POST['email'];
	$password 	= $_POST['password'];

	$user = new User();
	$user->login($email, $password);
}



?>



<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<title>Ericsson MRF - Login</title>
	</head>
	<body>
		<header class="col-xs-16 noPadding">
			<nav>
				<div class="nav col-xs-10 col-xs-push-3 noPadding">
					<a href="index.php"><img class="logo" src="img/fullLogo.png" alt="ericsson logo" style="max-height:65px; margin-top:8px;"></a>
					<h1 style="display:inline; position:relative; top:25px; margin:25px;">Material Request Form - Portal</h1>
				</div>
				<div class="line col-xs-16 noPadding"></div>
			</nav>
		</header>
		<div class="login container-fluid">		
			<div class="loginFormContainer col-xs-4 col-xs-push-6">
				<img class="headerImg" src="img/front.jpg">
				<h3>Login In</h3>
				<p>
					Enter now by supplying your user ID and password, and access a whole range of information, services and products.
				</p>
				<div class="loginForm">
					<form action="" method="POST">
						<div class="form-group">
							<label for="email">Email: </label>
							<input type="text" class="input" name="email" tabindex="1">
						</div>	
						<div class="form-group">
							<label for="password">Password: </label>
							<input type="password" class="input" name="password" tabindex="2">
						</div>	
						<div style="font-size:11px; text-align:right; line-height:10px;">
							<a href="" data-toggle="modal" data-target="#forgotPassword">I forgot my password</a><br>
							<input class="button" type="submit" name="submit" value="Login in" tabindex="3">
						</div>
					</form>
				</div>
				<div class="requestAccount">
					<img src="img/arrowRight.png"><a href="" data-toggle="modal" data-target="#requestAccount">I want to request an account</a>
				</div>
				<div class="loginFooter col-xs-16">
					Log-in is only allowed for authorized users. If you are not an authorized user, please exit immediately. In accordance with requirements of data protection laws, we hereby inform you that personally identifiable information will be handled in log files for legal, security and costs reasons.
				</div>
			</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<!-- Modal Request account -->
			<div class="container modal fade" id="requestAccount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content col-xs-16">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Request account</h4>
						</div>
						<div class="modal-body">
							<p>
							Pellentesque quis pellentesque sapien, id congue lorem. Donec lectus mi, semper eget arcu nec, ornare commodo nunc. 
							Pellentesque in dolor id massa dignissim iaculis in ac erat. Aliquam lorem justo, blandit ac laoreet et, ultricies ut felis. 
							Vivamus et fringilla sapien. Aliquam lorem justo, blandit ac laoreet et, ultricies ut felis. 
							Vivamus et fringilla sapien.
							</p>
							<div class="col-xs-16 noPadding">
								<form action="" method="POST">
									<div class="form-group">
										<label for="emailSEN">First name</label>
										<input type="text" class="input" id="emailSEN">
									</div>
									<div class="form-group">
										<label for="emailSEN">Last name</label>
										<input type="text" class="input" id="emailSEN">
									</div>
									<div class="form-group">
										<label for="emailSEN">Email adress</label>
										<input type="text" class="input" id="emailSEN">
									</div>
									<div class="form-group">
										<label for="emailSEN">Company</label>
										<input type="text" class="input" id="emailSEN">
									</div>
									<input type="submit" class="button" name="fpButton">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<!-- Modal Forgot password -->
			<div class="container modal fade" id="forgotPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content col-xs-16">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Forgot password</h4>
						</div>
						<div class="modal-body" style="border:none;">
							<p>
								Pellentesque quis pellentesque sapien, id congue lorem. Donec lectus mi, semper eget arcu nec, ornare commodo nunc. 
								Pellentesque in dolor id massa dignissim iaculis in ac erat. 
								Aliquam lorem justo, blandit ac laoreet et, ultricies ut felis. 
								Vivamus et fringilla sapien. Aliquam lorem justo, blandit ac laoreet et, ultricies ut felis. 
								Vivamus et fringilla sapien.
							</p>
							<div class="col-xs-16 noPadding">
								<form action="" method="POST">
									<div class="form-group">
										<label for="fpEmail">Email</label>
										<input type="text" class="input" id="fpEmail">
									</div>
									<input type="submit" class="button" name="fpButton">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
		
		<!-- Add fancyBox main JS and CSS files -->
		<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
		
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>