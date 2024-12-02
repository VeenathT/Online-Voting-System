<?php

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>Cinematic Excellence Awards</title>
<link rel="stylesheet" href="style/stylesheet.css">
<link rel="stylesheet" href="style/Feedback.css">
<script src="js/home.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div id="grad1">
<center>
<div class="header">
<p>ONLINE AWARD HUB : EMPOWERING YOUR VOICE</p>
</div>
</center>
<br>
<?php
		if (isset($_SESSION['Username'])){
		$userName = $_SESSION['Username'];
		echo "<style>
				h3{
					float: right;
					color: white;
					font-family: Tahoma;
					margin-top: 70px;
					margin-right: 30px;
				}
			   </style>
			   
			   <h3>Hello, $userName!</h3>";
	}

?>
<img src="images/logo.png" class="logo2" width=190 height=130 >

<ul class="nav">
	<div class="topnav">
		<li><a class="list" href="Home02.php">Home</a></li>
		<li><a class="list" href="Nominees.php">Nominees</a></li>
		<li><a class="list" href="Results_User.php">Results</a></li>
		<li><a class="list" href="PastWinners.php">Past Winners</a></li>
		<li><a class="list" href="Shop2.php">Shop</a></li>
		<li><a class="list" href="FAQ.php">FAQs</a></li>
		<li><a class="list" href="viewFeedbacks.php">Feedbacks</a></li>
		<input type="text" placeholder="Search..">
	</div>
	</ul>	

<ul class="breadcrumb">
  <li><a href="Home02.php">Home</a></li>
  <li><a href="viewFeedbacks.php">Feedbacks</a></li>
  <li><a href="#">Add Feedbacks</a></li>
</ul> 

<form  action="feedbackSubmission.php" method="POST" >

<center><h1>SEND US YOUR FEEDBACKS !</h1></center>

<h5>Name:</h5>
<input class="box" id="Name" type="text" name="name" placeholder="Enter your name"><br><br>

<h5>E-mail:</h5>
<input class="box" id="Email" type="text" name="email" placeholder="Enter Email" required><br><br>

<h5>Subject:</h5>
<input class="box" id="Subject" type="text" placeholder="Enter subject" name="subject"><br><br>

<h5>Message:</h5>
<textarea class="box" id="Feedback" rows="10" cols="35"  placeholder="Enter your feedback" name="feedback" required></textarea><br><br>

<center>
<button type="submit" value="submit" class="submitBtn" name="submit">Submit</button>
</center>

</form>

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