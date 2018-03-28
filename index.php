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
	<link href="assets/css/navbar-top-fixed.css" rel="stylesheet">
	<!-- <link href="assets/css/custom.css" rel="stylesheet"> -->
	
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
       <li><a href="signup.php">Sign Up</a></li> |
       <li><a href="signin.php">Sign In</a></a></li>
   </ul>
    
    </div>

	</div>

</nav>

<div class="search">	
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
		<br>

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
</div>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates pariatur molestiae aperiam laudantium id minus beatae aspernatur reiciendis sint laboriosam. Commodi corporis labore facilis minus consequuntur consectetur provident esse aliquam, voluptate illo aperiam, odit consequatur, doloremque est adipisci pariatur excepturi dolores voluptatem incidunt. Impedit ut accusantium facere architecto, magnam illo veniam odit alias fugit adipisci asperiores, numquam perferendis pariatur ratione a ex, excepturi quos voluptas? Nostrum, delectus saepe. Nulla, facilis. Beatae laboriosam atque cumque fugiat eaque molestiae assumenda consequatur obcaecati fuga nesciunt id sit dolores quae repellat quod accusantium, tenetur adipisci quos itaque ipsam veniam? Totam placeat possimus, explicabo, dignissimos tempora eveniet ab, nobis unde doloribus corporis obcaecati assumenda inventore atque! Distinctio error perferendis, a, nesciunt dignissimos reprehenderit non accusamus eaque vero dolor, eligendi voluptatum nostrum atque vitae quaerat cumque illum mollitia! Beatae, quidem consequuntur recusandae excepturi eius, tenetur temporibus odio, perferendis nisi reiciendis ratione obcaecati tempora quis fugit fugiat qui nihil cum enim ea voluptatem exercitationem! Quam amet exercitationem dolorum, magnam recusandae sed enim ut numquam qui nulla itaque dolor maxime iste perferendis voluptatibus provident, fuga illum adipisci deleniti quo cumque eaque hic eius dicta! Repellendus quidem ea voluptate vero iure asperiores, exercitationem, commodi esse ipsum facere nulla dicta rerum corrupti similique illum quaerat expedita saepe sint doloremque alias laudantium! Nemo ratione repellat repellendus voluptates culpa debitis sunt saepe sed, quia molestias expedita a quasi? Itaque quos, quod dolore commodi incidunt magni nobis sint neque illum quas repellat aut debitis! Iste animi dolores, iure eaque, quia possimus nobis libero architecto corrupti repellendus itaque accusantium officia laborum, sint similique suscipit a quae. Accusantium, praesentium odit facilis dolores ex culpa distinctio cumque id, corrupti beatae labore ad nostrum ipsam voluptate reprehenderit autem illum dignissimos magni laborum adipisci minima maiores. Quis nesciunt nemo, autem minima aliquid esse nulla repellat provident, id molestiae numquam. Inventore dicta nisi hic quasi nostrum autem, blanditiis, facilis odio adipisci ipsa laborum eveniet ullam accusantium veniam mollitia quisquam sint corrupti. Quisquam asperiores voluptas, perspiciatis incidunt quos animi obcaecati dolores voluptatibus accusantium excepturi consequuntur qui in. Inventore tenetur eveniet repellat. Placeat minus atque laborum a itaque aut incidunt, quae eaque nisi dignissimos, totam sint nemo maiores cum obcaecati, aperiam qui ea. Eaque doloribus perspiciatis iusto, atque repellat animi. Quo repudiandae sed error vel est minus optio odio mollitia aliquid iure, illo accusamus repellendus excepturi dolorum ea iste facere aspernatur eos. Aut soluta dolor id illum nobis provident explicabo voluptas.</p>

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