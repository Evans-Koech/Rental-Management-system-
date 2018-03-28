<?php
require ('includes/dbconfig.php');
$county =mysqli_query(dbconn(), "SELECT * FROM counties1 ORDER BY County ASC");

$subcounty=mysqli_query(dbconn(), "SELECT * FROM sub_counties ORDER BY SubCounty ASC");

$ward=mysqli_query(dbconn(), "SELECT * FROM wards ORDER BY Ward ASC ");




if($_SERVER["REQUEST_METHOD"] == "POST"){
$name =$_POST['name'];
$catego =$_POST['category'];
$price =$_POST['price'];
$ward= $_POST['ward'];
$subcounty = $_POST['subcounty'];
$county = $_POST['county'];
$description=$_POST['description'];

// 
    // Check if file was uploaded without errors

$photo = $_FILES['photo'];
$photo_err =$_FILES["photo"]["error"];
$filename = $_FILES["photo"]["name"];
$filetype = $_FILES["photo"]["type"];
$filesize = $_FILES["photo"]["size"];
$path ="uploads/" . $_FILES["photo"]["name"];

    if(isset($photo) && $photo_err == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
   
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

        // Verify file size - 5MB maximum
        $maxsize = 7 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){

            // Check whether file exists before uploading it
            $path ="uploads/" . $_FILES["photo"]["name"];   
            if(file_exists($path)){
                echo $_FILES["photo"]["name"] . " it already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "uploads/" . $_FILES["photo"]["name"]);
        
                echo "Your file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }

add_property($name,$catego,$description,$price,$path,$county, $subcounty, $ward);


}


function add_property($name,$catego,$description,$price, $path,$county, $subcounty, $ward){
    $sql ="insert into property(name, Category, description,price, image) VALUES('$name','$catego', '$description', '$price','$path')";
    $location ="INSERT INTO Location(County, Sub_county, Ward) VALUES('$county', '$subcounty', '$ward')";
    $result = mysqli_query(dbconn(),$sql);
    $locate=mysqli_query(dbconn(),$location);

    
    if(!$result && !$locate ){
        echo "Property not  posted successfully";
    }else{
        echo "Success in posting property " ; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .panel{
        width:60%;
        margin:0 auto;
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- BOOTSTRAP STYLES-->
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<!-- FONTAWESOME STYLES-->
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<!-- CUSTOM STYLES-->
<link href="assets/css/custom.css" rel="stylesheet" />
<link href="assets/css/navbar-top-fixed.css" rel="stylesheet">
<!-- GOOGLE FONTS-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
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




<div class="row">

<!-- <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1"> -->
<div class="panel panel-default" id="loginBox">
        <div class="panel-heading"> <strong> Enter Personal Details </strong> </div>
        <div class="panel-body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <input type="text" name="name" id="name" placeholder="Enter Property name" required class="form-control">
        </div>

        <div class="form-group">
        <select name="category" id="category" class="form-control">
            <option value="">Select</option>
            <option value="apartment">Apartment</option>
            <option value="Mansion">Mansion</option>
            <option value="Bed Sitter">Bed Sitter</option>
            <option value="Single Room">Single Room</option>
            <option value=" Bungalow"> Bungalow</option>
            <option value="TownHouses">TownHouses </option>
            <option value=" LuxuryVillas"> LuxuryVillas</option>
        </select>      

        </div>
        <h5>Brief Description:</h5>
        <div class="form-group">
            <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <input type="number" name="price" id="price" placeholder="Enter Property price " required class="form-control">
        </div>
        <h5>Location</h5>
        <div class="form-group">
            <label for="county">County</label>
        <select name="county" id="county" class="form-control">
           <?php
        while($row =mysqli_fetch_assoc($county)){
            echo '<option value="'.$row['County']. '">' .$row['County'] .'</option>';
        }
           ?>
        </select>      
        </div>
        <div class="form-group">
            <label for="">Sub-county</label>
        <select name="subcounty" id="subCounty" class="form-control">
        <?php
        while($row =mysqli_fetch_assoc($subcounty)){
            echo '<option value="'.$row['SubCounty']. '">' .$row['SubCounty'] .'</option>';
        }
           ?>
        </select>      
        </div>
        <div class="form-group">
            <label for="">Ward</label>
        <select name="ward" id="ward" class="form-control">
        <?php
        while($row =mysqli_fetch_assoc($ward)){
            echo '<option value="'.$row['Ward']. '">' .$row['Ward'] .'</option>';
        }
           ?>
        </select>      
        </div>
        <h5>Upload Images </h5>
        <div class="form-group">
            <input type="file" name="photo" id="photo" multiple class="form-control">
        </div>
        <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    <!-- </div> -->
    </div>




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