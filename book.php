<?php
// // Initialize the session
// session_start();
 
// // If session variable is not set it will redirect to login page
// if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
//   header("location: signin.php");
//   exit;
// }



$sql = "INSERT INTO BOOKING (ID, house, tenant, receipt_id, date_booked, status)";


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		.panel{
	background-image: url('assets/images/v6.jpg');
	height:360px;
}
.form-control{
	margin:7px;
	padding:10px;
}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Rose Miriti">
	<link rel="icon" href="">

	<title>Tenant</title>
	<!-- Bootstrap core CSS -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="assets/css/navbar-top-fixed.css" rel="stylesheet">
	<!-- <link href="css/styles.css" rel="stylesheet"> -->
	<link href="assets/css/material-design-iconic-font.min.css" rel="stylesheet">
	<!-- <link href="css/animate.css" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>
<nav class="navbar navbar-expand-md navbar-inverse fixed-top bg-inverse" style="padding-top: 2px; padding-bottom: 2px;">
	<a class="navbar-brand" href="#"> Rental Portal</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
			aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav mr-auto">
			<li data-toggle="collapse" data-target="#navbarCollapse.show" class="nav-item">
				<a class="nav-link active" href="">Home</a>
			</li>
			<li data-toggle="collapse" data-target="#navbarCollapse.show" class="nav-item">
				<a class="nav-link " href=""  >About Us</a>
			</li>
			<li data-toggle="collapse" data-target="#navbarCollapse.show" class="nav-item">
				<a class="nav-link " href="" >Contact Us</a>
			</li>
			<li data-toggle="collapse" data-target="#navbarCollapse.show" class="nav-item">
				<a class="nav-link " href="">Terms and Conditions</a>
			</li>
	</ul>
	<div class="float-right">
   <ul>
       <li><a href="profile.php">Profile</a></li>
       <li><a href="logout.php">Log out</a></li>
   </ul>
    
    </div>
	</div>
</nav>







<footer class="bg-faded">

<div class="col-md-6 col-12">
	<h5 class="text-success">Rentals Portal</h5>
	<blockquote class="blockquote">
		<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste tempore, velit.</p>
	</blockquote>
</div>
<div class="col-md-6 col-12" style="border-left: 1px solid #dddddd;">
	<h5 class="text-success">Links</h5>
	<ul class="list-unstyled">
		<li><a class="text-primary">About</a></li>
		<li><a class="text-primary">Terms and Conditions</a></li>
		<li><a class="text-primary">Policy</a></li>
	</ul>
</div>
</div>
<div class="w-100 text-center" style="background-color: #eeeeee; padding: 3px;">&copy; Rose Miriti</div>
</footer>
<div id="toast" style="display: none;width: 100%; z-index: 100; height: auto; bottom: 30%; left: 0px; position: fixed;">
<table style="height: 100%; margin: auto;border-radius: 10px; background-color:	rgba(0,0,0,0.7);">
<tr>
	<td valign="middle"
		style="padding: 10px; text-align: center;color: white; text-align: center; min-width: 50%;"
		id="message">

	</td>
</tr>
</table>
</div>

<div class=" text-gray-dark loading_dock bg-faded " id="loader" style="visibility: hidden;">
<span class="material material-album animated infinite zoomIn text-success font-weight-bold" style="margin: 0; padding: 0;"></span>
</div>

</body>
</html>