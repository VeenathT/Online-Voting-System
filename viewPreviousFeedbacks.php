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
		<li><a class="list" href="Nominees.p">Nominees</a></li>
		<li><a class="list" href="Results_User.php">Results</a></li>
		<li><a class="list" href="PastWinners.php">Past Winners</a></li>
		<li><a class="list" href="Shop2.php">Shop</a></li>
		<li><a class="list" href="FAQ.php">FAQs</a></li>
		<li><a class="list" href="viewFeedbacks.php">Feedbacks</a></li>
		<input type="text" placeholder="Search..">
	</div>
	</ul>	
<div style="background-image: url('images/feedbackPic.jpg'); height: 100%; width: 100%;background-size:cover;">
<ul class="breadcrumb">
  <li><a href="Home02.php">Home</a></li>
  <li><a href="viewFeedbacks.php">Feedbacks</a></li>
  <li><a href="#">Previous Feedbacks</a></li>
</ul> 

<?php
include_once 'config.php' ;

	if (isset($_SESSION['Username'])){
		$sql = "SELECT * FROM registereduser";
		$result = mysqli_query($conn,$sql);
	
		if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			$Ufname = $row["U_fname"];
			$uid = $row["UID"];
			if ($Ufname == $_SESSION['Username']){
				$uID = $uid;
				break;
			}
			else{
				continue;
			}
			
			}
		
		}
	}
	else{
		echo '<script type = "text/javascript">alert("Please sign up to continue"); window.location.href = "signup.php";</script>';
		exit;
	}
		
		
	$sql1 = "SELECT * FROM feedback";
    $result1 = mysqli_query($conn,$sql1);

    if ($result1-> num_rows > 0){
		while ($row = mysqli_fetch_assoc($result1)){

			$feedback = $row["f_description"];
			$Uid = $row["UID"];
			
			if($Uid == $uID){
				$_SESSION['Feedback'] = $feedback;
				
				echo "<div style='background-color: #414141;font-family:Tahoma;color:white;font-size: 20px;padding-bottom:15px; padding-top:15px;'><b> &nbsp &nbsp".$feedback."</b>
				<form method='POST' action='delete.php'><button type='submit' name='deleteFeedback' style='width:15%; height: 30px; background-color: #04AA6D;color: white;border: none;cursor: pointer;border-radius:16px;float: right; margin-right: -45%; margin-top: -50px;'>
				Remove</button></form></div><br>";

			}
			else{
				continue;
			}
		}
	}
	else{
		echo "No rows found";
	}
		
$conn->close();

?>

<br>
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