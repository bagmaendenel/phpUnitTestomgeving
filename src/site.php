<?php

require_once 'core/init.php';

$site = new Site();
$siteNumber = $_GET['nr'];

//Check if sitenumber exists
if(!$site->checkExistance($siteNumber)) {
	//throw error
	Session::set('SiteDoesntExist', '
	<div class="alert alert-danger" role="alert">
	  The site you\'ve tried to find does not exist. Please try again
	</div>');
	Redirect::to('index.php');
} else {
	//get site information
	$resultSet = $site->getSiteInfo($siteNumber);
}


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
		
		<!--State menu -->
		<div class="site stateContainer container-fluid col-xs-10 col-xs-push-3 noPadding">
			<div class="page-heading">
				<h2 class="headerColor borderBottom">Site 12345-B Lattrop</h2>
			</div>
			<div class="progress col-xs-16 noPadding">
				<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 27%;">
					<span class="sr-only"></span>
				</div>
			</div>
			<div class="col-xs-16 noPadding" id="wrap">
				<div id="state1" class="state beginBlock active">
					<b>Step 1 <img src="img/approved.png" alt=""></b><br>
					<span>MRF started by asp</span>
				</div>
				<div id="state2" class="state centerBlock active">
					<b>Step 2 <img src="img/approved.png" alt=""></b><br>
					<span>A&E approved by SEN & SCC</span>
				</div>
				<div id="state3" class="state centerBlock">
					<b>Step 3</b><br>
					<span>Move to build by asp</span>
				</div>
				<div id="state4" class="state centerBlock">
					<b>Step 4</b><br>
					<span>Build approved by SEN</span>
				</div>
				<div id="state5" class="state lastBlock">
					<b>Step 7</b><br>
					<span>Delivered on site</span>
				</div>
			</div>
			<div class="stateMessageBoxContainer col-xs-16">
				<div class="stateContent col-xs-16">
					<a style="position:absolute; right:25px;" onclick="closeStateMessage();">
						<button type="button" class="close" data-dismiss="modal" style="margin-top:-2px;">
							<span aria-hidden="true">&times;</span>
						</button>
					</a>
					<h4>MRF started by ASP</h4>
					<p class="col-xs-12">
						Curabitur iaculis sed risus quis gravida. Pellentesque a vehicula mauris. 
						Nullam eleifend, ex eget tempor dapibus, orci ante venenatis lacus, vel dignissim risus neque sit amet libero. 
						Donec suscipit mauris nec sagittis ultricies. Maecenas id lobortis nunc. 
						Nunc ut urna venenatis purus pellentesque accumsan. 
						Duis non nunc suscipit, ornare enim sit amet, condimentum neque. Nam luctus vitae enim eu facilisis. 
						Nam non sem metus. Sed massa nibh, rhoncus a nulla in, tincidunt fermentum diam. Duis at lacinia elit.
					</p>
					<ul class="stateHandlers col-xs-3">
						<li><a href="#"><img src="img/disapproved.png" alt="disapproved icon">Disapprove</a></li>
						<li><a href="#"><img src="img/warning.png" alt="warning icon">Stop</a></li>
						<li><a href="#"><img src="img/approved.png" alt="approved icon">Approve</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!--side menu-->
		<div class="container-fluid col-xs-10 col-xs-push-3 noPadding" style="margin-top:25px;">
			<div class="col-xs-4">
				<div class="siteLeftMenu col-xs-16">
					<h4>Site 12345-B</h4>
					<ul class="col-xs-10" style="font-size:1.1rem; font-weight:700;">
						<li>Site version</li>
						<li>Selected items</li>
						<li>Configurations</li>
						<li>Delivery date</li>
					</ul>
					<ul class="col-xs-5" style="font-size:1.2rem;">
						<li>1</li>
						<li>12</li>
						<li>0</li>
						<li>n/a</li>
					</ul>
					<div class="downloadPrint col-xs-16">
						<ul>
							<li><a href=""><img class="topMargin" src="img/download.jpg" alt="download mrf"><span>Download acquisition MRF</span></a><span class="sub">2mb (.xls)</span></li>
							<li><a href=""><img class="topMargin" src="img/download.jpg" alt="download mrf"><span>Download build MRF</span></a><span class="sub">2mb (.xls)</span></li>
						</ul>
					</div>
				</div>
			</div>
			
			<!--Site content within tabs-->
			<div class="siteContentContainer col-xs-12">				
				<ul id="tabs">
					<li><a href="#" name="tab1">Site setup</a></li>
					<li><a href="#" name="tab2">Configurations</a></li>
					<li><a href="#" name="tab3">Items</a></li>
				</ul>	
				<div id="content" class="siteContent col-xs-16">
					<!--Tab 1 Site setup-->
					<div id="tab1" class="col-xs-16 noPadding">
						<div class="notes">
							<ul class="notesOptions">
								<li><a href="#" data-toggle="modal" data-target="#notesModal">Add note</a></li>
								<li><span>|</span></li>
								<li><a href="#" data-toggle="modal" data-target="#notesModal">See all (3)</a></li>
							</ul>
							<h5 class="borderBottom">Notes</h5>
							<div class="notesTitle">
								<b>Floyd Malone</b> <span style="float:right;">02-05-2016</span>
							</div>
							<p>
								Curabitur iaculis sed risus quis gravida. Pellentesque a vehicula mauris. 
								Nullam eleifend, ex eget tempor dapibus, orci ante venenatis lacus, vel dignissim risus neque 
								sit amet libero. Donec suscipit mauris nec sagittis ultricies. Maecenas id lobortis nunc. 
								Nunc ut urna venenatis purus pellentesque accumsan. Duis non nunc suscipit, ornare enim sit amet, 
								condimentum neque. Nam luctus vitae enim eu facilisis. Nam non sem metus. Sed massa nibh, 
								rhoncus a nulla in, tincidunt fermentum diam. Duis at lacinia elit.
							</p>
						</div>
						<div class="col-xs-8">
							<div class="siteField border" style="height:330x;">
								<h5>Customer Reference</h5>
								<form role="form">
									<div class="form-group">
										<label for="coperator">Operator</label>
										<select class="input" id="coperator" tabindex="1" >
											<option>Vodafone</option>
										</select>
									</div>
									<div class="form-group">
										<label for="cbrn">Build request number</label>
										<input type="text" class="input" id="cbrn" tabindex="2" value="<?php echo escape($resultSet->_results[0]->build_request_nr); ?>">
									</div>
									<div class="form-group">
										<label for="clocationType">Location type</label>
										<select class="input" id="clocationType" tabindex="3">
											<option></option>
											<option>Mast or tower</option>
											<option>Building</option>
											<option>Advertising pole</option>
											<option>Chimney</option>
											<option>Church or monument</option>
											<option>Sport field</option>
											<option>Silo</option>
											<option>Factory</option>
											<option>Store</option>
											<option>Field</option>
											<option>Farmhouse</option>
											<option>Lighthouse</option>
											<option>Other</option>
										</select>
									</div>
									<div class="form-group">
										<label for="csiteNumber">Site number</label>
										<input type="text" class="input" id="csiteNumber" tabindex="4" value="<?php echo escape($resultSet->_results[0]->site_number); ?>">
									</div>
									<div class="form-group">
										<label for="cstreetAndNumber">Street and number</label>
										<input type="text" class="input" id="cstreetAndNumber" tabindex="5" value="<?php echo escape($resultSet->_results[0]->street) . ' ' . escape($resultSet->_results[0]->street_number); ?>">
									</div>
									<div class="form-group">
										<label for="cpostalcode">Postal code</label>
										<input type="text" class="input" id="cpostalcode" tabindex="6" value="<?php echo escape($resultSet->_results[0]->postal_code); ?>">
									</div>
									<div class="form-group">
										<label for="cplace">Place</label>
										<input type="text" class="input" id="cplace" tabindex="7" value="<?php echo escape($resultSet->_results[0]->place); ?>">
									</div>
								</form>
							</div>
						</div>
						<div class="col-xs-8">
							<div class="siteField border" style="height:330px;">
								<h5>ENN Information</h5>
								<form role="form">
									<div class="form-group">
										<label for="eSEN">Site engineer</label>
										<input type="text" class="input" id="eSEN" tabindex="8" value="<?php echo escape($resultSet->_results[0]->site_engineer); ?>">
									</div>
									<div class="form-group">
										<label for="ePhoneSEN">Phone number</label>
										<input type="text" class="input" id="ephoneSEN" tabindex="9" value="<?php echo escape($resultSet->_results[0]->site_engineer_phone); ?>">
									</div>	
									<div class="form-group">
										<label for="emailSEN">Email adress</label>
										<input type="text" class="input" id="emailSEN" tabindex="10" value="<?php echo escape($resultSet->_results[0]->site_engineer_email); ?>">
									</div>
								</form>
							</div>
						</div>
						<div class="col-xs-8">
							<div class="siteField border" style="height:255px;">
								<h5>ASP information</h5>
								<form role="form">
									<div class="form-group">
										<label for="alocationType">Name of contractor</label>
										<select class="input" id="alocationType" tabindex="13">
											<option></option>
											<option>Bouwbedrijf Hendriks</option>
											<option>Dael Telecom</option>
											<option>Heijmans Techniek & Mobiliteit</option>
											<option>LCC Network Services</option>
											<option>Liandon</option>
											<option>Marconi Oranje Constructies</option>
											<option>Mobilis Telecom</option>
											<option>Network Management Services</option>
											<option>Spie</option>
											<option>C4Telecom</option>
											<option>TWS Technologies</option>
											<option>VWNB</option>
											<option>WL Winet</option>
											<option>Imtech</option>
											<option>Other</option>
										</select>
									</div>
									<div class="form-group">
										<label for="anameOfContactPerson">Name contactperson</label>
										<input type="text" class="input" id="anameOfContactPerson" tabindex="14" value="<?php echo escape($resultSet->_results[0]->contractor_contactperson); ?>">
									</div>
									<div class="form-group">
										<label for="aphoneNumber">Phone number</label>
										<input type="text" class="input" id="aphoneNumber" tabindex="15" value="<?php echo escape($resultSet->_results[0]->contractor_phone); ?>">
									</div>
									<div class="form-group">
										<label for="aemail">Email adress</label>
										<input type="text" class="input" id="aemail" tabindex="16" value="<?php echo escape($resultSet->_results[0]->contractor_email); ?>">
									</div>
								</form>
							</div>
						</div>
						<div class="col-xs-8">
							<div class="siteField border" style="height:255px;">
								<h5>Delivery information</h5>
								<form role="form">
									<div class="form-group">
										<label for="ddateOfDelivery">Delivery date</label>
										<input type="text" class="input datepicker" id="ddateOfDelivery" tabindex="19" value="<?php echo escape($resultSet->_results[0]->delivery_date); ?>">
									</div>
									<div class="form-group">
										<label for="dtimeOfDelivery">Time of delivery</label>
										<input type="text" class="input" id="dtimeOfDelivery" tabindex="20" value="<?php echo escape($resultSet->_results[0]->delivery_time); ?>">
									</div>
									<div class="form-group">
										<label for="dstreetAndNumber">Street and number</label>
										<input type="text" class="input" id="dstreetAndNumber" tabindex="21" value="<?php echo escape($resultSet->_results[0]->delivery_street) . ' ' . escape($resultSet->_results[0]->delivery_street_number); ?>">
									</div>
									<div class="form-group">
										<label for="dpostalcode">Postal code</label>
										<input type="text" class="input" id="dpostalcode" tabindex="22" value="<?php echo escape($resultSet->_results[0]->delivery_postal_code); ?>">
									</div>
									<div class="form-group">
										<label for="dplace">Place</label>
										<input type="text" class="input" id="dplace" tabindex="21" value="<?php echo escape($resultSet->_results[0]->delivery_place); ?>">
									</div>
								</form>
							</div>
						</div>
						<div class="col-xs-16">
							<div class="siteField border col-xs-16">
								<h5>Way of transport</h5>
								<form action="" method="">
									<label for="" style="width:140px;">Way of transport</label>
									<div class="col-xs-6" style="line-height:25px; font-size:1.2rem;">
										<input type="radio" name="transport" value="Truck" tabindex="22"><span class="value">Truck</span><br/>
										<input type="radio" name="transport" value="Truck with crane" tabindex="23">
										<span class="value">Truck with crane</span>
										<a class="toolTip" data-toggle="tooltip" title="Max. crane weight 2,2 ton / range 6 meters / 180 degrees rotation possibe"><img src="img/question.png" alt="question icon"></a>
											<br/>
										<input type="radio" name="transport" value="Picked up by contractor" tabindex="24">
										<span class="value">Picked up by contractor</span><br/>
									</div>
									<div class="col-xs-6" style="font-size:12px;">
										<input type="checkbox" name="" value=""><span class="value">Rush</span>
										<a class="toolTip" data-toggle="tooltip" title="Less than 10 working days">
											<img src="img/question.png" alt="question icon">
										</a>
									</div>	
								</form>
							</div>
						</div>
					</div>
						
					<div id="tab2" class="col-xs-16">
						<!--Tab 2 Configurations-->
						<h4>Configuration setup</h4>
						<div class="col-xs-16">
							<form role="form" class="siteField">
								<div class="form-group col-xs-16 noPadding">
									<label for="coperator">Main remote equipment for cabinet MMC1 or addition</label>
									<select class="input" id="coperator">
										<option></option>
										<option>RBS6201hybrid DUS800+DUG900+DUW2100Remote indoor+SIU</option>
									</select>
								</div>
								<div class="form-group col-xs-16 noPadding">
									<label for="coperator">Main remote equipment for cabinet MMC2 or addition</label>
									<select class="input" id="coperator">
										<option></option>
										<option>RBS6201hybrid DUS800+DUG900+DUW2100Remote indoor+SIU</option>
									</select>
								</div><br>
								<div class="form-group col-xs-16 noPadding">
									<label for="coperator">Macro 1 <a class="toolTip" data-toggle="tooltip" title="max. 3 systems and incl. SIU when LTE incl"><img src="img/question.png"></a></label>
									<select class="input" id="coperator">
										<option></option>
										<option>Optie 1</option>
									</select>
								</div><br>
								<div class="form-group col-xs-16 noPadding">
									<label for="coperator">Macro 2 <a class="toolTip" data-toggle="tooltip" title="max. 2 systems and incl. SIU when LTE incl."><img src="img/question.png" alt="question icon"></a></label>
									<select class="input" id="coperator">
										<option></option>
										<option>Optie 1</option>
									</select>
								</div><br>
								<div class="form-group col-xs-16 noPadding">
									<label for="coperator">Expansion Macro G900</label>
									<select class="input" id="coperator">
										<option></option>
										<option>Optie 1</option>
									</select>
								</div><br>
								<div class="form-group col-xs-16 noPadding">
									<label for="coperator">Expansion Macro/Hybrid U2100</label>
									<select class="input" id="coperator">
										<option></option>
										<option>Optie 1</option>
									</select>
								</div><br>
								<div class="form-group col-xs-16 noPadding">
									<label for="coperator">Expansion Macro L800 or L1800</label>
									<select class="input" id="coperator">
										<option></option>
										<option>Optie 1</option>
									</select>
								</div><br>
								<div class="form-group col-xs-16 noPadding">
									<label for="coperator">Expansion G1800</label>
									<select class="input" id="coperator">
										<option></option>
										<option>Optie 1</option>
									</select>
								</div><br>
								<div class="form-group col-xs-16 noPadding">
									<label for="coperator">Expansion add LTE1800</label>
									<select class="input" id="coperator">
										<option></option>
										<option>Optie 1</option>
									</select>
								</div><br>
								<div class="form-group col-xs-16 noPadding">
									<label for="coperator">UMTS 3rd carier <a class="toolTip" data-toggle="tooltip" title="incl. DU adapter"><img src="img/question.png" alt="question icon"></a></label>
									<select class="input" id="coperator">
										<option></option>
										<option>Optie 1</option>
									</select>
								</div><br>
								<div class="form-group col-xs-16 noPadding">
									<label for="coperator">DU Adapter</label>
									<select class="input" id="coperator">
										<option></option>
										<option>Optie 1</option>
									</select>
								</div><br>
								<div class="form-group col-xs-16 noPadding">
									<label for="coperator">Dummy RUS'sen <a class="toolTip" data-toggle="tooltip" title="plastic"><img src="img/question.png" alt="question icon"></a></label>
									<select class="input" id="coperator">
										<option></option>
										<option>Optie 1</option>
									</select>
								</div><br>
								<div class="form-group col-xs-16 noPadding">
									<label for="coperator">PSU set</label>
									<select class="input" id="coperator">
										<option></option>
										<option>Optie 1</option>
									</select>
								</div><br>
								<div class="form-group col-xs-16 noPadding">
									<label for="coperator">Battery sets for Macro, PSU or MMC<a class="toolTip" data-toggle="tooltip" title="without rectifiers"><img src="img/question.png" alt="question icon"></a></label>
									<select class="input" id="coperator">
										<option></option>
										<option>Optie 1</option>
									</select>
								</div>
						
							</form>
						</div>
						<div class="mountInfo col-xs-16">
							<h5>Configuration</h5>
							<form action="" method="">
								<div class="">
									<b class="col-xs-16">Frame 1</b>
									<div class="form-group">
										<label for="dtimeOfDelivery">Mounted on left side of frame</label>
										<select class="input large" id="coperator">
											<option></option>
											<option>Optie 1</option>
										</select>
									</div>
									<div class="form-group">
										<label for="dtimeOfDelivery">Pre-assembled equipment</label>
										<select class="input large" id="coperator">
											<option></option>
											<option>Optie 1</option>
										</select>
									</div>
									<div class="form-group">
										<label for="dtimeOfDelivery">Mounted on right side of frame</label>
										<select class="input large" id="coperator">
											<option></option>
											<option>Optie 1</option>
										</select>
									</div>
								</div>
								<div class="">
									<b class="col-xs-16">Frame 2</b>
									<div class="form-group">
										<label for="dtimeOfDelivery">Mounted on left side of frame</label>
										<select class="input large" id="coperator">
											<option></option>
											<option>Optie 1</option>
										</select>
									</div>
									<div class="form-group">
										<label for="dtimeOfDelivery">Pre-assembled equipment</label>
										<select class="input large" id="coperator">
											<option></option>
											<option>Optie 1</option>
										</select>
									</div>
									<div class="form-group">
										<label for="dtimeOfDelivery">Mounted on right side of frame</label>
										<select class="input large" id="coperator">
											<option></option>
											<option>Optie 1</option>
										</select>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!--Tab 3 Item list-->
					<div id="tab3" class="col-xs-16">
						<h4>Items</h4>
						<div class="siteField col-xs-16 noPadding">
							<div class="categoryContainer">
								<ul class="categories">
									<li><a href="">Antennes</a></li>
									<li><a href="">Feeders & powercables</a></li>
									<li><a href="">RRu's</a></li>
									<li><a href="">Staal</a></li>
									<li><a href="">Transmissiekasten</a></li>
								</ul>
							</div>
							<div class="categoryContainer">
								<ul class="categories">
									<li><a href="">Antennes</a></li>
									<li><a href="">Feeders & powercables</a></li>
									<li><a href="">RRu's</a></li>
									<li><a href="">Staal</a></li>
									<li><a href="">Staal</a></li>
								</ul>
							</div>
							<div class="categoryContainer">
								<ul class="categories">
									<li><a href="">Antennes</a></li>
									<li><a href="">Feeders & powercables</a></li>
									<li><a href="">RRu's</a></li>
									<li><a href="">Staal</a></li>
									<li><a href="">Transmissiekasten</a></li>
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
							<div class="item col-xs-16 noPadding" style="margin-top:0px; border-top:1px solid #d6d6d6;">
								<b class="col-xs-16 noPadding">Feeder 1/2" LCF</b>
								<div class="col-xs-2">
									<a class="fancybox" href="img/items/feeder.png" data-fancybox-group="gallery"><img class="productImg" src="img/items/feeder.png" alt="" /></a>
								</div>
								<div class="col-xs-4 noPadding">
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
										Nullam eleifend, ex eget tempor dapibus. Curabitur iaculis sed risus quis gravida. 
									</p>
									<a href="" target="_blank">Regoort.nl</a>
								</div>
								<div class="calc col-xs-3">
									<form method="post" action="">
										<table>
											<tr>
												<th>Qty</th>
												<th></th>
												<th>Mtrs</th>
												<th></th>
												<th></th>
											</tr>
											<tr>
												<td><input type="text" class="input" id=""></td>
												<td>X</td>
												<td><input type="text" class="input" id=""></td>
												<td><a href=""><img src="img/garbage.png" alt="delete"></a></td>
												<td><a href=""><img src="img/add.png" alt="add"></a></td>
											</tr>
										</table>
									</form>
								</div>
							</div>
							<div class="item col-xs-16 noPadding" style="margin-top:0px;">
								<b class="col-xs-16 noPadding">Air 21 antenne</b>
								<div class="col-xs-2">
									<a class="fancybox" href="img/items/antenne.jpg" data-fancybox-group="gallery"><img class="productImg" src="img/items/antenne.jpg" alt="" /></a>
								</div>
								<div class="col-xs-4 noPadding">
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
										Nullam eleifend, ex eget tempor dapibus. Curabitur iaculis sed risus quis gravida.
									</p>
									<a href="" target="_blank">Regoort.nl</a>
								</div>
								<div class="calc col-xs-3">
									<form method="post" action="">
										<table>
											<tr>
												<th>Qty</th>
												<th></th>
											</tr>
											<tr>
												<td><input type="text" class="input" id=""></td>
												<td><a href=""><img src="img/garbage.png" alt="delete"></a></td>
											</tr>
										</table>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal -->
		<div class="container modal fade" id="notesModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content col-xs-16">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Notes</h4>
					</div>
					<div class="modal-body">
						<div class="post col-xs-16">
							<div class="col-xs-4">
								<b>Floyd Malone</b><br>
								<span>Ericsson ENN</span><br>
								<span>02-15-2015</span>	
							</div>
							<p class="col-xs-12">
								Nunc ut urna venenatis purus pellentesque accumsan. 
								Duis non nunc suscipit, ornare enim sit amet, condimentum neque. Nam luctus vitae enim eu facilisis. 
								Nam non sem metus. Sed massa nibh, rhoncus a nulla in, tincidunt fermentum diam. Duis at lacinia elit.
							</p>
							<div class="col-xs-4">
								<a href="" onclick="showAlert();">Edit</a><br> <a href="" onclick="showAlert();">Remove</a>
							</div>
						</div>
						<div class="post col-xs-16">						
							<div class="col-xs-4">
								<b>Floyd Malone</b><br>
								<span>Ericsson ENN</span><br>
								<span>02-15-2015</span>	
							</div>
							<p class="col-xs-12">
								Nunc ut urna venenatis purus pellentesque accumsan. 
								Duis non nunc suscipit, ornare enim sit amet, condimentum neque. Nam luctus vitae enim eu facilisis. 
								Nam non sem metus. Sed massa nibh, rhoncus a nulla in, tincidunt fermentum diam. Duis at lacinia elit.
							</p>
							<div class="col-xs-4">
								<a href="" onclick="showAlert();">Edit</a><br> <a href="" onclick="showAlert();">Remove</a>
							</div>
						</div>
						<div id="makePost" class="post text-field col-xs-16" style="border-bottom:none; display:none;">
							<div class="col-xs-4">
								<b>Your name</b><br>
								<span>Ericsson ENN</span>
							</div>
							<form action="" method="POST" class="col-xs-12">
								<textarea name="" rows="6" style="width:100%;"></textarea>
								<input type="submit" class="button" value="Submit" style="float:right; margin-top:15px;">
							</form>
						</div>
						<div class="leaveMessageContainer col-xs-16">
							<button class="greyBtn" id="leaveMessage" onclick="addMessageToNotes();">Add Message</button>			
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