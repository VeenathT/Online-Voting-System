<?php

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>Cinematic Excellence Awards</title>
<link rel="stylesheet" href="style/stylesheet.css">
<link rel="stylesheet" href="style/FAQ.css">
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
		<li><a class="list" href="#">FAQs</a></li>
		<li><a class="list" href="viewFeedbacks.php">Feedbacks</a></li>
		<input type="text" placeholder="Search..">
	</div>
	</ul>	

<ul class="breadcrumb">
  <li><a href="Home02.html">Home</a></li>
  <li><a href="#">FAQs</a></li>
</ul> 
<section>
<br>
<center>
<h1>DO YOU HAVE QUESTIONS ?</h1>
<h2>We've got you covered !</h2>
<form method="GET" action="faqSearch.php">
<input type="text" class="searchBar" name="query" placeholder="Enter your question...">
<button type="submit" class="searchSubmit"><i class="fa fa-search"></i></button>
</form>
<br>
<br>
</center>
</section>
<br>
<div style="background-image: url('images/FAQ.jpg'); height: 250px; width: 100%; background-attachment:fixed;">
	<br>&nbsp &nbsp <button type="submit" class="button1">General</button>&nbsp &nbsp
	<button type="submit" class="button2" id="account">Creating an account</button>
	<script>
		document.getElementById("account").addEventListener("click", function(){
			window.location.href = "sign up.html";
		});
	</script>
	<br><br>&nbsp &nbsp <button type="submit" class="button2" id="votingProcess">Voting process</button>
	<script>
		document.getElementById("votingProcess").addEventListener("click", function(){
			window.location.href = "votingDetails.html";
		});
	</script>
	&nbsp &nbsp
	<button type="submit" class="button1">Payments</button>
	<br><br>&nbsp &nbsp<button type="submit" class="button1">My Account</button>&nbsp &nbsp
	<button type="submit" class="button2">Returns and refunds</button>
</div>
<form action="faqSubmission.php" method="POST">
<p>&nbsp Didn't find your question? Let us know ...</p>
<input class="box" id="Email" type="text" name="email" placeholder="Enter Email" required><br>

<textarea class="box" id="FAQbox" rows="7" cols="35"  placeholder="Message ..." name="FAQ"></textarea>

<button type="submit" class="button3"><i class="fa fa-comment"></i><b>Chat &nbsp &nbsp</b></button>
 <button type="submit" class="button4" name="submit">Submit</button>
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