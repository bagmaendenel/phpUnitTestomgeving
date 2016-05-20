<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<title>Ericsson MRF - FAQ</title>
	</head>
	<body>
		<?php include 'includes/header.php'; ?>
		
		<!--side menu-->
		<div class="profile container-fluid col-xs-10 col-xs-push-3 noPadding">
			<h2 class="headerColor borderBottom">My profile</h2>
			<div class="col-xs-4">
				
				<div class="categoriesContainer col-xs-16">
					<h5>My details</h5>
					<ul class="categories">
						<li><a href=""><img src="img/arrowRight.png" alt="arrow right">My details</a></li>
						<li><a href=""><img src="img/arrowRight.png" alt="arrow right">Change password</a></li>
						<li><a href=""><img src="img/arrowRight.png" alt="arrow right">Log out</a></li>
					</ul>
				</div>
			</div>
			
			<!--Change settings-->
			<div class="profileBody col-xs-12">	
				<div class="col-xs-16">
					<h5 class="borderBottom">My details</h5>
					<div class="col-xs-8 noPadding">
						<form role="form">
							<div class="form-group">
								<label for="">First name</label>
								<input type="text" class="input" id="eSEN" tabindex="8">
							</div>
							<div class="form-group">
								<label for="">Last name</label>
								<input type="text" class="input" id="eSEN" tabindex="8">
							</div>
							<div class="form-group">
								<label for="eSEN">Email</label>
								<input type="text" class="input" id="eSEN" tabindex="8">
							</div>
							<div class="form-group">
								<label for="eSEN">Status</label>
								<span>Administrator</span>
							</div>
							<div class="form-group">
								<label for="eSEN">Company</label>
								<span>E/// ENN</span>
							</div>
							<input type="submit" class="button" value="Submit" style="float:right; margin-top:15px;">
						</form>
					</div>	
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
		
		<!-- Add fancyBox main JS and CSS files -->
		<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>		
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>