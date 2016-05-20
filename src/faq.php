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
		<div class="faq container-fluid col-xs-10 col-xs-push-3 noPadding">
			<h2 class="headerColor borderBottom">FAQ</h2>
			<div class="col-xs-4">
				<div class="categoriesContainer col-xs-16">
					<div class="search col-xs-16 noPadding">
						<input type="text" placeholder="Search" onclick="showAlert()"><label class="searchLabel">
							<a href="">
								<img class="searchBtn" src="img/search.png" alt="search icon">
							</a>
						</label>
					</div>
					<div style="clear:both;"></div>
					<ul class="categories">
						<li><a href=""><img src="img/arrowRight.png" alt="arrow right">Category 1</a></li>
						<li><a href=""><img src="img/arrowRight.png" alt="arrow right">Category 2</a></li>
						<li><a href=""><img src="img/arrowRight.png" alt="arrow right">Category 3</a></li>
						<li><a href=""><img src="img/arrowRight.png" alt="arrow right">Category 4</a></li>
					</ul>
					<div class="question">
						<a href="mailto:gebruiker@provider.nl?SUBJECT=FAQ Ericsson MRF"><img src="img/question.png">Mijn vraag staat er niet tussen</a>
					</div>
				</div>
			</div>
			
			<!--Accordion faq items-->
			<div class="col-xs-12">				
				<div class="panel-group col-xs-16 noPadding" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Cras ultricies mi eu turpis hendrerit fringilla? <img src="img/dropdown.png" alt=""></a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in">
							<div class="panel-body">
								Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">Cras ultricies mi eu turpis hendrerit fringilla? <img src="img/dropdown.png" alt=""></a>
							</h4>
						</div>
						<div id="collapseEight" class="panel-collapse collapse">
							<div class="panel-body">
								Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Cras ultricies mi eu turpis hendrerit fringilla?<img src="img/dropdown.png" alt=""></a>
							</h4>
						</div>
						<div id="collapseNine" class="panel-collapse collapse">
							<div class="panel-body">
								Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Cras ultricies mi eu turpis hendrerit fringilla?<img src="img/dropdown.png" alt=""></a>
							</h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse">
							<div class="panel-body">
								Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Cras ultricies mi eu turpis hendrerit fringilla?<img src="img/dropdown.png" alt=""></a>
							</h4>
						</div>
						<div id="collapseSeven" class="panel-collapse collapse">
							<div class="panel-body">
								Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.
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
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>