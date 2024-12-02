<?php

session_start();

@include 'config.php';
if(isset($_POST['submit'])){
	$email= $_POST['email'];
	$password= ($_POST['pwd']);
	
	$select = "SELECT * FROM registereduser WHERE  U_email = '$email' &&  U_password = '$password'";
	
	$result = mysqli_query($conn, $select);
	
	if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
			$Ufname = $row["U_fname"];
			}
			
			$_SESSION['Username'] = $Ufname;
			header('location:Home02.php');
			
		
	}
	else{
		$error[] = 'incorrect email or password!';
	}

	};

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
		<li><a class="list" href="#">Login</a></li>
		<input type="text" placeholder="Search..">
	</div>
	</ul>	


<ul class="breadcrumb">
  <li><a href="Home01.php">Home</a></li>
  <li><a href="#">Login</a></li>
</ul> 

<form action="#" method="post">

<center><h1>LOGIN</h1></center>

<?php
	if(isset($error)){
		foreach($error as $error){
			echo'<span class="error-msg">'.$error.'</span>';
		};
	};
	
?>

<h5>E-mail Address:</h5>
<input class="box" type="text" name="email" placeholder="Enter Email" required><br><br>

<h5>Password:</h5>
<input class="box" type="password" name="pwd" placeholder="Enter Password" name="pwd" required><br><br>

<label style="color:white;">
<input type="checkbox" checked="checked" name="remember">Remember me</label>

<a href="#" style="color:dodgerblue; float:right;">Forgot password</a></p>

<center>
<button type="submit" name="submit" class="submitBtn">Login</button>
</center>

<br>
<a class="link1" href="signup.php" >Create user account</a></p>

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