<?php 

?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<title>Ericsson MRF - Site</title>
	</head>
	<body>
		<?php include 'includes/header.php'; ?>
		
		<div class="revisions container-fluid col-xs-10 col-xs-push-3 noPadding">
			<div class="page-heading">
				<h2 class="headerColor borderBottom">Revisions</h2>
			</div>
			<!--Revisions and items within tabs-->
			<div class="siteContentContainer col-xs-16">				
				<ul id="tabs">
					<li><a href="#" name="tab1">Revision list</a></li>
					<li><a href="#" name="tab2">Item list</a></li>
				</ul>	
				<div id="content" class="siteContent col-xs-16 noPadding">
					<!--Tab 1 revision list-->
					<div id="tab1" class="col-xs-16">
						<div class="col-xs-16">
							<h4>All items</h4>
							<p class="col-xs-10">
							In hac habitasse platea dictumst. Praesent pellentesque libero ut sem vestibulum, eu tristique augue interdum. 
							Quisque vitae congue est. Aliquam ac est tellus. Integer maximus, ante non viverra sollicitudin.
							turpis erat aliquet nunc, et fermentum nisi arcu quis turpis.In hac habitasse platea dictumst. Praesent pellentesque libero ut sem vestibulum, eu tristique augue interdum. 
							Quisque vitae congue est. Aliquam ac est tellus. 
							</p>
						  <table class="table col-xs-16">
							<tr> 
								<td><b>#</b></td>
								<td><b>Revision</b></td>
								<td><b>Description</b></td>
								<td><b>Date</b></td>
								<td><b>Status</b><span onclick="showAlert();">&#9660</span></td>
								<td><b>Changed by</b><span onclick="showAlert();">&#9660</span></td>
								<td><b></b></td>
								<td><b></b></td>
							</tr>
							<tr>
								<td>1</td>
								<td>Van item 1 naar item 2 Van item 1 naar item 2</a></td>
								<td>Item 1 loopt uit</td>
								<td>4-05-2016</td>
								<td>Not approved</td>
								<td>Arjen Rodney</td>
								<td><a href=""><img src="img/approved.png" alt="approve icon">Approve</a></td>
								<td><a href=""><img src="img/disapproved.png" alt="disapproved icon">Disapprove</a></td>
							</tr>
							<tr>
								<td>2</td>
								<td>Van item 1 naar item 2</a></td>
								<td>Item 1 loopt uitItem 1 loopt uitItem 1 loopt uitItem </td>
								<td>4-05-2016</td>
								<td>Not approved</td>
								<td>Arjen Rodney</td>
								<td><a href=""><img src="img/approved.png" alt="approve icon">Approve</a></td>
								<td><a href=""><img src="img/disapproved.png" alt="disapproved icon">Disapprove</a></td>
							</tr>
							<tr>
								<td>3</td>
								<td>Item 3 toevoegen</a></td>
								<td></td>
								<td>4-05-2016</td>
								<td>Not approved</td>
								<td>Arjen Rodney</td>
								<td><a href=""><img src="img/approved.png" alt="approve icon">Approve</a></td>
								<td><a href=""><img src="img/disapproved.png" alt="disapproved icon">Disapprove</a></td>
							</tr>
						  </table>
						</div>
					</div>
					<!--Tab 2 Item list-->				
					<div id="tab2" class="col-xs-16">
						<div class="col-xs-16">
							<h4>All items</h4>
							<div class="categoryContainer col-xs-16">
								<ul class="categories">
									<li><a href="">Antennes</a><span class="totalItemsPerCategory">(20)</span></</li>
									<li><a href="">Feeders & powercables</a><span class="totalItemsPerCategory">(17)</span></</li>
									<li><a href="">RRu's</a><span class="totalItemsPerCategory">(20)</span></</li>
									<li><a href="">Staal</a><span class="totalItemsPerCategory">(14)</span></</li>
									<li><a href="">Transmissiekasten</a><span class="totalItemsPerCategory">(20)</span></</li>
								</ul>
							</div>
							<div class="categoryContainer">
								<ul class="categories">
									<li><a href="">Antennes</a><span class="totalItemsPerCategory">(5)</span></</li>
									<li><a href="">Feeders & powercables</a><span class="totalItemsPerCategory">(3)</span></li>
									<li><a href="">RRu's</a><span class="totalItemsPerCategory">(1)</span></</li>
									<li><a href="">Staal</a><span class="totalItemsPerCategory">(4)</span></</li>
									<li><a href="">Staal</a><span class="totalItemsPerCategory">(32)</span></</li>
								</ul>
							</div>
							<div class="categoryContainer">
								<ul class="categories">
									<li><a href="">Antennes</a><span class="totalItemsPerCategory">(21)</span></</li>
									<li><a href="">Feeders & powercables</a><span class="totalItemsPerCategory">(20)</span></</li>
									<li><a href="">RRu's</a><span class="totalItemsPerCategory">(20)</span></</li>
									<li><a href="">Staal</a><span class="totalItemsPerCategory">(26)</span></</li>
									<li><a href="">Transmissiekasten</a><span class="totalItemsPerCategory">(22)</span></</li>
								</ul>
							</div>		
							<div class="itemTop col-xs-16">
								<div class="search col-xs-5 noPadding" style="text-align:left;">
									<input type="text" placeholder="Search" onclick="showAlert();"><label class="searchLabel"><a href=""><img class="searchBtn" src="img/search.png" alt="search icon"></a></label>
								</div>
								<div class="switch col-xs-4 col-xs-push-7">
									<a href="#"><img src="img/switch.png" alt="switch icon">Show added items</a>
								</div>
							</div>
							<div class="item col-xs-16 noPadding">
								<div class="col-xs-16" style="margin:15px 0px;">
									<b style="display:inline">Air 21 Antenne</b><a style="float:right;" href="" data-toggle="modal" data-target="#editProduct">Edit</a>
								</div>
								<div class="col-xs-2">
									<a class="fancybox" href="img/items/antenne.jpg" data-fancybox-group="gallery"><img class="productImg" src="img/items/antenne.jpg" alt="" /></a>
								</div>
								<div class="col-xs-3 noPadding">
									<ul>
										<li>Manufacturer</li>
										<li>Manufacturer nr</li>
										<li>Supplier</li>
										<li>Supplier nr</li>
										<li>Sorting number</li>
									</ul>
									<ul>
										<li>Ericsson</li>
										<li>12345ABC</li>
										<li>Katrijn</li>
										<li>12345AVB</li>
										<li>123456</li>
									</ul>
								</div>
								<div class="itemDesc col-xs-6 noPaddingLeft">
									<p>
										Curabitur iaculis sed risus quis gravida. Pellentesque a vehicula mauris. 
										Nullam eleifend, ex eget tempor dapibus. Curabitur iaculis sed risus quis gravida. Pellentesque a vehicula mauris. 
										Nullam eleifend, ex eget tempor dapibus.
									</p>
									<a href="" target="_blank">Regoort.nl</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	
		
			<!-- Modal -->
			<div class="container modal fade" id="editProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content col-xs-16">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<b class="col-xs-16 noPadding">Air 21 Antenne</b>
						</div>
						
						<div class="item modal-body col-xs-16" style="border:none; margin:0px;">
							
							<div class="col-xs-3">
								<a class="fancybox" href="img/items/antenne.jpg" data-fancybox-group="gallery"><img class="productImg" src="img/items/antenne.jpg" alt="" /></a>
							</div>
							<div class="col-xs-7 noPadding">
								<ul style="list-style:none;">
									<li style="margin:8px;">Manufacturer</li>
									<li style="margin:8px;">Manufacturer nr</li>
									<li style="margin:8px;">Supplier</li>
									<li style="margin:8px;">Supplier nr</li>
									<li style="margin:8px;">Sorting number</li>
								</ul>
								<ul style="list-style:none;">
									<li><input type="text" value="Ericsson"></li>
									<li><input type="text" value="12345ABC"></li>
									<li><input type="text" value="Katrijn"></li>
									<li><input type="text" value="12345ABV"></li>
									<li><input type="text" value="123456"></li>
								</ul>
							</div>
							<div class="itemDesc col-xs-6 noPaddingLeft">
								<p>
									Curabitur iaculis sed risus quis gravida. Pellentesque a vehicula mauris. 
									Nullam eleifend, ex eget tempor dapibus. Curabitur iaculis sed risus quis gravida. Pellentesque a vehicula mauris. 
									Nullam eleifend, ex eget tempor dapibus.
								</p>
								<span style="margin-right:10px;">Name</span><input type="text" value="regoort.nl"><br/>
								<span style="margin-right:10px;">Link</span><input type="text" value="http://regoort.nl">
							</div>
							<div class="col-xs-6" style="margin-top:10px;">
								<form action="" method="">
									<input type="checkbox" name="" value=""><span style="margin-left:5px; font-size:11px;">Length needs to be specified</span>
								</form>
							</div>
							<input type="submit" class="button" value="edit product">
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<!--<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>-->
		
		<!-- Add fancyBox main JS and CSS files -->
		<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>		
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>