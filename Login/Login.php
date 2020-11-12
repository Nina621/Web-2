<?php
session_start();
require_once '../php/dbconnect.php';

$email = "";
$pass = "";

$emailError = "";
$passError = "";
 
$error = false;
 
if( isset($_POST['btn-login']) ) { 
  
	$email = mysqli_real_escape_string($conn,$_POST['email']);
     $pass = mysqli_real_escape_string($conn,$_POST['pass']); 

	if(empty($email)){
	$error = true;
	$emailError = "Please enter your email address.";
	} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
	$error = true;
	$emailError = "Please enter valid email address.";
	}
  
	if(empty($pass)){
	$error = true;
	$passError = "Please enter your password.";
	}
  
	// Ukoliko nema error nastavlja se logirati
	if (!$error) {
   
	$password = $pass;
  
	$res=mysqli_query($conn,"SELECT userId,userPass FROM users WHERE userEmail='$email'");
	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
	$count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if( $count == 1 && $row['userPass']==$password ) {
    $_SESSION['user'] = $row['userId'];
    header("Location: ../Meni/Meni.html");
	} else {
    $errMSG = "Incorrect Credentials, Try again...";
	}  
	} 
}
?>

<!DOCTYPE html>
<html lang="hr">

<head>

    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet"  href="css/style.css"/>

</head>

<body>

    <div class="log">
        <h2>Login</h2>
        <div>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
            <div class="inputLog">
                <input type="email" name="email" id="email" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />
                <label> Email</label>
				<span class="text-danger"><?php echo $emailError; ?></span>
            </div>
            <div class="inputLog">
                <input type="password" name="pass" id="psw" placeholder="Your Password" maxlength="15" />
                <label> Password</label>
					<span><?php echo $passError; ?></span>
            </div>

 <?php
if ( isset($errMSG) ) {
?>
				<div >
					<div >
						<span><?php echo $errMSG; ?></span> 
					</div>
				</div>
<?php
}
?>
                <input type="submit" name="btn-login" value="LOGIN"></input>
            </form>
        </div>
    </div>
</body>

</html>