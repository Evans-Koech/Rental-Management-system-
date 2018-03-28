<?php
// Include config file
require_once 'includes/dbconfig.php';
 
// Define variables and initialize with empty values
$fname=$lname=$address=$krapin=$umail= $username = $password = $confirm_password = "";
$fname_err=$lname_err=$address_err=$krapin_err=$umail_err= $username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 //validate first Name
    if(empty(trim($_POST["fname"]))){
        $fname_err = "Please enter a First Name.";
    } else{
            $fname = trim($_POST["fname"]);        
        }       
//validate last Name
if(empty(trim($_POST["lname"]))){
    $username_err = "Please enter a Last Name.";
} else{
        $lname = trim($_POST["lname"]);         
    }      

    //validate address
    if(empty(trim($_POST["address"]))){
        $address_err = "Please enter address.";
    } else{
            $address = trim($_POST["address"]);       
        }       
    
        //validate KRA PIN
   if(empty(trim($_POST["krapin"]))){
        $krapin_err = "Please enter KRA PIN.";
    } else{
            $krapin= trim($_POST["fname"]);       
        }       
    
    // Validate Email
    if(empty(trim($_POST["umail"]))){
        $umail_err = "Please enter Email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM tenant WHERE Email = ?";
        
        if($stmt = mysqli_prepare(dbconn(), $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_umail);
            
            // Set parameters
            $param_umail = trim($_POST["umail"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $umail_err = "This Email is already taken.";
                } else{
                    $umail = trim($_POST["umail"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        // Close statement
        mysqli_stmt_close($stmt);
    }



 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM tenant WHERE UserName = ?";
        
        if($stmt = mysqli_prepare(dbconn(), $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Please confirm password.';     
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'Password did not match.';
        }
    }
    
    

    // Check input errors before inserting in database
    if(empty($fname_err) && empty($lname_err) && empty($username_err) && empty($address_err) &&empty($krapin_err) && empty($password_err) && empty($confirm_password_err)){
        
        // echo ($param_fname.$param_lname. $param_username.$param_umail. $param_address .$param_krapin. $param_password);

        // Prepare an insert statement
        $sql = "INSERT INTO landlord (First_Name, Last_Name,UserName,Email,Address,KRA_PIN, Password)  VALUES (?,?,?,?,?,?,?)";
         
       

        if($stmt = mysqli_prepare(dbconn(), $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssss",$param_fname,$param_lname, $param_username,$param_umail,$param_address,$param_krapin, $param_password);
            
           
            // Set parameters
            $param_fname= $fname;
            $param_lname=$lname;
            $param_username = $username;
            $param_address=$address;
            $param_umail=$umail;
            $param_krapin=$krapin;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: signin.php");
            } else{
                echo "Something went wrong. Please try again later.". mysqli_error(dbconn());
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close(dbconn());
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; background-image: url('images/door-1756961__340.png'); color: #161716;}
        .wrapper{ width: 350px; padding: 20px; margin: 02.7% auto; background-color: #264a30; border-radius: 21px;}
        
    </style>
</head>
<body>
    <div class="wrapper ">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group <?php echo (!empty($fname_err)) ? 'has-error' : ''; ?>">
                <!-- <label>First Name</label><br> -->
                <input type="text" name="fname"class="form-control" value="<?php echo $fname; ?>" placeholder="First Name">
                <span class="help-block"><?php echo $fname_err; ?></span>
            </div> 
            <div class="form-group <?php echo (!empty($lname_err)) ? 'has-error' : ''; ?>">
                <!-- <label>Last Name</label><br> -->
                <input type="text" name="lname"class="form-control" value="<?php echo $lname; ?>" placeholder="Last Name">
                <span class="help-block"><?php echo $lname_err; ?></span>
            </div> 
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <!-- <label>Username</label><br> -->
                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>" placeholder="UserName">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div> 
            <div class="form-group <?php echo (!empty($umail_err)) ? 'has-error' : ''; ?>">
                <!-- <label>Email</label><br> -->
                <input type="text" name="umail"class="form-control" value="<?php echo $umail; ?>" placeholder="Email">
                <span class="help-block"><?php echo $umail_err; ?></span>
            </div> 
            <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                <!-- <label>Address</label><br> -->
                <input type="text" name="address"class="form-control" value="<?php echo $address; ?>" placeholder="Address">
                <span class="help-block"><?php echo $address_err; ?></span>
            </div> 

            <div class="form-group <?php echo (!empty($krapin_err)) ? 'has-error' : ''; ?>">
                <!-- <label>KRA PIN</label><br> -->
                <input type="text" name="krapin"class="form-control" value="<?php echo $krapin; ?>" placeholder="KRA PIN">
                <span class="help-block"><?php echo $krapin_err; ?></span>
            </div> 
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <!-- <label>Password</label><br> -->
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>" placeholder="Password">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <!-- <label>Confirm Password</label><br> -->
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>" placeholder="Confirm Password">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
            <p>Already have an account? <a href="signin.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>