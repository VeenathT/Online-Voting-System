<?php

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>Cinematic Excellence Awards</title>
<link rel="stylesheet" href="style/stylesheet.css">
<link rel="stylesheet" href="style/PastWinners.css">
<script src="js/home.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

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
  <li><a href="#">Past Winners</a></li>
	</ul>
	
<hr>

<br>
<br>

<div class ="dropdown">
	<span class="dropbtn"><b>Years</b></span>
			<div class="dropdown-content">
			<ul>
			  <li id="btn1" onclick="loadData('btn1')">2022</li>
			  <li id="btn2" onclick="loadData('btn2')">2021</li>
			</ul>
			</div>
</div>			
<br>
<br>

<div class= "pw_bg"> 
	<div id ="para"> 
	
		<center>
		<p class= "heading"><b>THE CINEMATIC EXCELLENCE AWARDS DATABASE</b></p>
		</center>
		<p class="des1">The Cinematic Excellence<br>Awards Database contains<br><b>the Official Record</b><br>of past film Awards winners.</p>

		<center>
		<p class="topic" id= "para"></p>
		</center>
		<br>
		<p class= "n_text"></p>

	</div>

	
		<center>
		<img id="img" src="images/pw_N.jpg"></img>
		</center>
		

</div>



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