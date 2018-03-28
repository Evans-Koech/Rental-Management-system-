<?php
// // Initialize the session
// session_start();
 
// // If session variable is not set it will redirect to login page
// if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
//   header("location: signin.php");
//   exit;
// }
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


	
	<div class="panel panel-default" id="loginBox">
        <div class="panel-heading"> <strong> Search for a house </strong> </div>
        <div class="panel-body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-inline">
<h5>Location</h5>
		<div class="form-group">
			<!-- <label for="County">County</label> -->
			<input type="text" name="county" id="" class="form-control" placeholder="County">
		</div>
		<div class="form-group">
			<!-- <label for="Subcounty">Sub-County</label> -->
			<input type="text" name="subcounty" id="" class="form-control" placeholder="Sub-County">
		</div>
		<div class="form-group">
			<input type="text" name="" id="" class="form-control" placeholder="Ward">
		</div>
		<br>
		<div class="form-group">
			<input type="text" name="beds" id="" class="form-control" placeholder="Beds">
		</div>
		<div class="form-group">
			<input type="text" name="baths" id="" class="form-control" placeholder="Baths">
		</div>

		<div class="form-group">
			<input type="text" name="minPrice" id="" class="form-control" placeholder="Min Price">
		</div>
		<div class="form-group">
			<input type="text" name="maxPrice" id="" class="form-control" placeholder="Max Price">
		</div>
		<button type="submit" class="btn btn-success"> Search</button>
		</form>
	</div>
</div>



<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, deleniti necessitatibus? Voluptatibus commodi debitis quisquam perspiciatis! Ab et quo quibusdam tempore a eligendi quos cumque inventore reiciendis in consequuntur dolore expedita consequatur totam dicta earum ipsam numquam quam, soluta similique est? Facere adipisci eius commodi illo, laborum a distinctio ea reprehenderit excepturi id corporis praesentium similique quod quibusdam expedita unde exercitationem, nisi quo. Excepturi at fuga harum consequatur odit consectetur deleniti distinctio culpa repudiandae, quisquam quod, nemo nulla obcaecati quia quibusdam? Aperiam, rem. Sunt quo, earum dolorum soluta voluptatem molestias incidunt distinctio quae magni nihil perspiciatis! Sunt at, eum expedita in eveniet corrupti cumque, dolore itaque, odio cum delectus minima maiores non labore? Voluptates asperiores autem laborum, voluptatum cupiditate incidunt modi cumque deserunt laudantium hic ipsum iusto quibusdam nesciunt dolorum similique nihil porro expedita voluptas illum corporis delectus adipisci iure animi. Odio tempore ex eos iusto harum animi, possimus et dolores ratione quae corporis ipsa tenetur adipisci. Modi nostrum molestiae vel ducimus! Officiis rem sed in labore impedit debitis odit itaque, aspernatur maxime corporis quam error. Aliquam aliquid nulla autem labore aut! Esse quibusdam suscipit at, quis voluptates, harum, laudantium ducimus ratione laboriosam consectetur veritatis ullam rem eveniet earum! Vitae, veritatis aliquam modi aspernatur, suscipit mollitia repellat laborum corporis quibusdam ipsum, nemo laudantium. Nobis in at veritatis laboriosam tenetur ducimus, perspiciatis aspernatur dicta facilis ipsum fugiat quos! Dolore laborum temporibus obcaecati optio, laudantium maxime commodi accusamus vitae facere similique delectus voluptate unde omnis assumenda porro placeat distinctio blanditiis molestiae ex accusantium reprehenderit eum nisi totam sed? Enim doloremque doloribus sint officiis. Ducimus iure facilis officia iusto quia illum in esse quod ab repudiandae quibusdam provident recusandae tempore error, odit, molestiae tenetur consequuntur! Reprehenderit quis adipisci repudiandae blanditiis saepe aliquam consectetur autem maiores impedit, nulla laudantium, itaque corporis error. Explicabo sit numquam minima animi illum odio sequi aut nulla aliquid quam molestias, ducimus, deleniti, suscipit eos eius placeat! Quos inventore, at architecto magni magnam praesentium repellendus. Reiciendis, unde. Quos nihil vitae delectus totam, pariatur nam magnam deserunt iure architecto doloribus magni praesentium, nisi similique soluta dolorum ut. Dolor labore dolores nobis exercitationem iure praesentium, itaque, nostrum quasi quam, alias ipsam saepe? Ipsum obcaecati molestiae dolor aliquam aperiam sapiente debitis, non nihil quod minus, vero earum, a sed distinctio exercitationem eveniet? Accusamus provident ipsa nulla, dolores iusto ut ratione vitae nam maiores aperiam repellendus hic tempore fuga enim? Enim sint, nesciunt repudiandae voluptatum laudantium qui quas suscipit magnam soluta veniam deserunt consectetur! Officiis ex consectetur, dolorum distinctio minus facere suscipit voluptas possimus dolores, iusto animi earum, quo ducimus accusantium maxime commodi. Tempore facere amet illum cumque doloribus quam reprehenderit alias, est, nemo voluptate autem! Alias at non eveniet iure ut perspiciatis tenetur reprehenderit eligendi esse excepturi! Iste est cum nihil, dolorem pariatur ipsa. Laboriosam nisi dolores officiis soluta expedita vel et cupiditate maxime maiores voluptas aliquam adipisci quasi optio id quia, quidem ratione necessitatibus ipsa repellendus illo quae hic? Vero odio, voluptatum, eveniet reiciendis reprehenderit tempore similique doloribus architecto nam nisi quasi!</p>
<!-- //footer -->


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