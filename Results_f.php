<?php
	require 'config.php';

?>


<!DOCTYPE html>
<html>
<head>
<title>IWT</title>
<link rel="stylesheet" href="style/stylesheet.css">
<link rel="stylesheet" href="style/Results.css">
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
		<li><a class="list" href="#">Results</a></li>
		<li><a class="list" href="PastWinners.html">Past Winners</a></li>
		<li><a class="list" href="Shop.php">Shop</a></li>
		<li><a class="list" href="Login.php">Login</a></li>
		<input type="text" placeholder="Search..">
	</div>
	</ul>	
	
<ul class="breadcrumb">
  <li><a href="Home01.php">Home</a></li>
  <li><a href="#">Results</a></li>
</ul>	

<br>

<div class= "bg">

 
<center>
<p class = "desc">We convinced ourselves to provide accurate and update voting results...<p>
</center>
<br>
<p class ="heading" ><b>VOTING RESULTS</b></p>
<center>

<?php
	$sql = "SELECT N_Name , NoOfVotes     FROM popularnominee";
	$result = mysqli_query($conn,$sql);
	$resultCheck = mysqli_num_rows($result);
	
	if($resultCheck > 0){
		
		echo"<table border ='3'>";
		echo "<tr>";
		echo "<th>Film Name</th>";
		echo "<th>No Of Votes</th>";
		echo "</tr>";
		
		while ($row = mysqli_fetch_assoc($result)){
			echo"<tr>";
			echo"<td>".$row['N_Name']."</td>";
			echo"<td>".$row['NoOfVotes']."</td>";
	       
			echo"</tr>";
	
		}
		echo "</table>";

	}
	


?>

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

