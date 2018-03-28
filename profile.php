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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Rose Miriti">
	<link rel="icon" href="">
<style>
    .panel{
        width:60%;
        margin:0 auto;
    }
</style>
	<title>Tenant</title>
	<!-- Bootstrap core CSS -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/navbar-top-fixed.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- <link href="assets/css/custom.css" rel="stylesheet" /> -->
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
       <!-- <li><a href="profile.php">Profile</a></li> -->
       <li><a href="logout.php">Log out</a></li>
   </ul>
    
    </div>

	</div>

</nav>


<div class="panel panel-default" id="loginBox">
        <div class="panel-heading"> <strong> Update Personal details Details</strong> </div>
        <div class="panel-body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group <?php echo (!empty($fname_err)) ? 'has-error' : ''; ?>"><span class="-addon"><i class="fa fa-tag"  ></i></span>
                <label>First Name</label>
                <input type="text" name="fname"class="form-control" value="<?php echo $fname; ?>">
                <span class="help-block"><?php echo $fname_err; ?></span>
            </div> 
            <div class="form-group  <?php echo (!empty($lname_err)) ? 'has-error' : ''; ?>"><span class="-addon"><i class="fa fa-tag"  ></i></span>
                <label>Last Name</label>
                <input type="text" name="lname"class="form-control" value="<?php echo $lname; ?>">
                <span class="help-block"><?php echo $lname_err; ?></span>
            </div> 

            <div class="form-group  <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>"><span class="-addon"><i class="fa fa-tag"  ></i></span>
                <label>Username</label>
                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group   <?php echo (!empty($umail_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="text" name="umail"class="form-control" value="<?php echo $umail; ?>"> <span class="-addon"><i class="fa fa-tag"  ></i></span>
                <span class="help-block"><?php echo $umail_err; ?></span>
            </div>
            <div class="form-group  <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                <label>Address</label>
                <input type="text" name="address"class="form-control" value="<?php echo $address; ?>">
                <span class="help-block"><?php echo $address_err; ?></span>
            </div> 
            <div class="form-group  <?php echo (!empty($krapin_err)) ? 'has-error' : ''; ?>">
                <label>KRA PIN</label>
                <input type="text" name="krapin"class="form-control" value="<?php echo $krapin; ?>">
                <span class="help-block"><?php echo $krapin_err; ?></span>
            </div> 
            <div class="form-group  <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>"><span class="-addon"><i class="fa fa-lock"  ></i></span>
                <label>Old Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group  <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>"> <span class="-addon"><i class="fa fa-lock"  ></i></span>
                <label>New Password</label>
                <input type="npassword" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group  <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>"> <span class="-addon"><i class="fa fa-lock"  ></i></span>
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update">
            </div>
           
        </form>
        </div>
</div>

</body>
</html>