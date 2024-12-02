<?php

@include 'config.php';
if(isset($_POST['submit'])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$password=($_POST['pwd']);
	$cpassword= ($_POST['cnfrmpwd']);
	
	$select = "SELECT * FROM registereduser WHERE  U_email = '$email'";
	
	$result = mysqli_query($conn, $select);
	
	if(mysqli_num_rows($result) > 0){
		
		$error[] = 'user already exist!';
	
	}
	else{
		if($password != $cpassword){
			$error[] = 'password not matched!';
		}
		else{
			$insert = "INSERT INTO registereduser(U_fname, U_lname,	U_email, U_password) VALUES('$firstname', '$lastname', '$email', '$password')";
			mysqli_query($conn, $insert);
			header('location:Login.php');
			
	
		}

	};
}
?>

<!DOCTYPE html>
<html>
<head>
<title>IWT</title>
<link rel="stylesheet" href="style/stylesheet.css">
<link rel="stylesheet" href="style/login.css">
<script src="js/home.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div id="grad1">
<center>
<div class="header">
<p>ONLINE AWARD HUB : EMPOWERING YOUR VOICE</p>
</div>

<br>
<img src="images/logo.png" class="logo" width=190 height=130 >


<section class="section">
	<div class= "slider">
	<div class="slide">
		<input type="radio" name="radio-btn" id="radio1">
		<input type="radio" name="radio-btn" id="radio2">
		<input type="radio" name="radio-btn" id="radio3">
		
	<div class="st first">	
		<img src="images/img1.jpg">
	</div>	

	<div class="st">	
		<img src="images/img2.jpg">
	</div>
	
	<div class="st">	
		<img src="images/img3.jpg">
	</div>
	
	<div class="nav-auto">
		<div class="a-b1"></div>
		<div class="a-b2"></div>
		<div class="a-b3"></div>
	</div>

	</div>
	
</section>	


</center>

	<ul class="nav">
	<div class="topnav">
		<li><a class="list" href="Home01.php">Home</a></li>
		<li><a class="list" href="Nominees.html">Nominees</a></li>
		<li><a class="list" href="Results_f.php">Results</a></li>
		<li><a class="list" href="PastWinners.html">Past Winners</a></li>
		<li><a class="list" href="Shop.php">Shop</a></li>
		<li><a class="list" href="Login.php">Login</a></li>
		<input type="text" placeholder="Search..">
	</div>
	</ul>	


<ul class="breadcrumb">
  <li><a href="Home01.php">Home</a></li>
  <li><a href="Login.php">Login</a></li>
  <li><a href="#">Sign up</a></li>
</ul> 

<form action="#" method="post" >

<h1><center>SIGN UP</center></h1>

<?php
	if(isset($error)){
		foreach($error as $error){
			echo'<span class="error-msg">'.$error.'</span>';
		};
	};
	
?>

<h5>First name:</h5><br>
<input class="box" type="text" name="firstname" placeholder="Enter first name" required><br><br>

<h5>Last name:</h5><br>
<input class="box" type="text" name="lastname" placeholder="Enter last name" required><br><br>

<h5>E-mail Address:</h5><br>
<input class="box" type="text" name="email" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required><br><br>

<h5>Password:</h5><br>
<input class="box" type="password" placeholder="Enter Password" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title = "Must contain at least one number and one uppercase and one lowercase letter, and at least 8 or more characters" required><br><br>

<h5>Re-Enter password:</h5><br>
<input class="box" type="password" placeholder="Re-Enter password" name="cnfrmpwd" required><br>

<p style="opacity: 0.7; font-size:12px;">By creating an account you agree to our terms & conditions and privacy policy</p>

<center>
<button type="submit" name="submit" class="submitBtn">Sign Up</button>
</center>

<p style="text-align: left;"></h5>Already have an account?</h5> <a href="Login.php" style="color:dodgerblue">Login</a>.</p>

</form>


</br>
</br>

<div class="footer">
</br>
<center>

<a href="#" class="fa fa-facebook"></a>  
<a href="#" class="fa fa-twitter"></a>  
<a href="#" class="fa fa-instagram"></a>  
<a href="#" class="fa fa-google"></a>

<h4 style="font-style:italic;">
	<ul class="links">
		<li><a class="link" href=""style="color: inherit;"target="_blank">Contact Us</a></li>
		<li><a class="link" href=""style="color: inherit;"target="_blank">Terms and Conditions</a></li>
		<li><a class="link" href=""style="color: inherit;"target="_blank">Privacy and Policy</a></li>
	</ul>	
</h4>
</center>
</div>
</div>
		
</body>
</html>