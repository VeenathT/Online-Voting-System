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
		<li><a class="list" href="#">Feedbacks</a></li>
		<input type="text" placeholder="Search..">
	</div>
	</ul>	
<div style="background-image: url('images/feedbackPic.jpg'); height: 100%; width: 100%;background-size:cover;">
<ul class="breadcrumb">
  <li><a href="Home02.html">Home</a></li>
  <li><a href="#">Feedback</a></li>
</ul> 

<p style="font-size:45px;font-family:Tahoma;color:#B79825;text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black;"><b>"SHARE FEEDBACKS,<br>IMPROVE OUR SYSTEM"</b></p>
<button type="submit" class="submitBtn" id="addFeedback">ADD YOUR FEEDBACKS</button>
	<script>
		document.getElementById("addFeedback").addEventListener("click", function(){
			window.location.href = "Feedback.php";
		});
	</script>
<button type="submit" class="submitBtn" id="viewFeedback">VIEW YOUR PREVIOUS FEEDBACKS</button>
	<script>
		document.getElementById("viewFeedback").addEventListener("click", function(){
			window.location.href = "viewPreviousFeedbacks.php";
		});
	</script>
<br><br>
</div>
<br><br>

<?php

include_once 'config.php' ;

$sql1 = "SELECT * FROM registereduser";
$result1 = mysqli_query($conn,$sql1);
	

$sql = "SELECT * FROM feedback";
$result = mysqli_query($conn,$sql);

if ($result-> num_rows > 0){
	while ($row = mysqli_fetch_assoc($result)){
		$feedback = $row["f_description"];
		
		echo "<div style='background-color: #414141;font-family:Tahoma;color:white;font-size: 20px;padding-bottom:15px; padding-top:15px;'><b> &nbsp &nbsp".$feedback."</b></div><br>";
	}
}
else{
	echo "<div style='background-color: #414141;font-family:Tahoma;color:white;font-size: 20px;padding-bottom:15px; padding-top:15px;'><b> &nbsp &nbsp No feedbacks found</b></div><br>";
}

$conn->close();

?>
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