<?php 

require_once 'core/init.php';

$user = new User();

$site = new Site();




?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<title>Ericsson MRF - Home</title>
	</head>
	<body>
		<?php include 'includes/header.php'; ?>
		<div class="index container-fluid col-xs-10 col-xs-push-3">
			<div class="introBar col-xs-16">
				<h5 class="borderBottom">Welcome <?php echo $user->getName($_SESSION['login']);  ?></h5>
				<p class="col-xs-8 noPadding">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					In ac lacus condimentum, accumsan justo ac, varius libero. 
					Sed et risus vel lacus aliquam efficitur. Nullam tempor non ligula eget tincidunt. 
					Nulla ultricies eleifend nisi. Praesent aliquet mi et fermentum ullamcorper. Nulla facilisi. 
					Nulla dictum maximus lacinia.
				</p>
			</div>
			<div class="page-heading col-xs-16">
				<h3 class="headerColor">All Sites</h3>
			</div>
			<div class="filters col-xs-16">
				<ul class="col-xs-10 noPadding">	
					<li>Filter: </li>
					<li class="active"><a href="">All</a></li>
					<li><a href="">Acquisition MRF</a></li>
					<li><a href="">Build MRF</a></li>
				</ul>
				<div class="newMrf col-xs-6" style="height:24px;">
					<a href="#" id="startMrf" onclick="startSite();">Make new MRF</a>
					<form id="startMrfFieldContainer">
						<input type="text" id="startMrfField" placeholder="Site number"><input class="go" type="submit" value=">" style="margin-left:-1px;"><!--<img src="img/arrowRight.png" alt="arrow right">-->
					</form>
				</div>
			</div>
			<div class="col-xs-16">
				<?php echo Session::flash('SiteDoesntExist'); ?>
			</div>
			<div class="panel panel-default col-xs-16">
			  <table class="table">
				<tr> 
					<td><b>#</b></td>
					<td><b>Site number</b><span onclick="showAlert();">&#9660;</span></td>
					<td><b>Place</b><span onclick="showAlert();">&#9660;</span></td>
					<td><b>Delivery date</b></td>
					<td><b>Actual status</b></td>
					<td><b>Contractor</b><span onclick="showAlert();">&#9660;</span></td>
					<td><b>SEN</b><span onclick="showAlert();">&#9660;</span></td>
				</tr>
				<?php $site->getSiteList(); ?>
			  </table>
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

