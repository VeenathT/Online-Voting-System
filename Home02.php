<?php

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>Cinematic Excellence Awards</title>
<link rel="stylesheet" href="style/stylesheet.css">
<link rel="stylesheet" href="style/stylesheet_N.css">
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
		<li><a class="list" href="#">Home</a></li>
		<li><a class="list" href="Nominees.php">Nominees</a></li>
		<li><a class="list" href="Results_User.php">Results</a></li>
		<li><a class="list" href="PastWinners.php">Past Winners</a></li>
		<li><a class="list" href="Shop2.php">Shop</a></li>
		<li><a class="list" href="FAQ.php">FAQs</a></li>
		<li><a class="list" href="viewFeedbacks.php">Feedbacks</a></li>
		<input type="text" placeholder="Search..">
	</div>
	</ul>	
	</br>
	</br>
	<div class = "descrptn">  

	<center>
<p>Welcome to our  Cinematic Excellence film awards ceremony, where we celebrate the artistry, talent, and creativity of the cinematic world. Our annual event brings together filmmakers, actors, industry professionals, and movie enthusiasts to honor outstanding achievements in the world of film.</p>

<p>With each passing year, our film awards ceremony has become a symbol of excellence, recognizing the remarkable contributions made by filmmakers from around the globe. We aim to highlight the best in various categories. By honoring these exceptional individuals and their remarkable works, we strive to elevate the film industry and inspire future generations of filmmakers.</p>

<p class= "description">Attending our film awards ceremony is a unique experience that combines the glamour of a red carpet event with the excitement of seeing your favorite films and actors receive well-deserved recognition. The evening is filled with anticipation and celebration as we unveil the winners, paying tribute to their exceptional talent, dedication, and creative vision. It's an opportunity for filmmakers, actors, and film enthusiasts to come together, connect, and celebrate the power of storytelling.</p>

<p class= "description">As an esteemed member of our film community, we invite you to be a part of this grand celebration. Your participation as a voter contributes to the integrity and significance of these awards. By casting your vote, you have a direct influence on which films and performances will receive the recognition they deserve.</p>

<p class= "description">Join us as we honor the best in cinema and create unforgettable memories at our film awards ceremony. We look forward to sharing this remarkable evening with you, celebrating the magic of film and the extraordinary talents that bring stories to life on the big screen.</p>
	<center>

</div>	


<div class="column">
	<img src="images/Home_img1.jpg"  width="100%" height="200">
	<div class="desc">Cinematic Excellence film awards - 1st edition Most spopular nominee winner speech</div>
</div>

<div class="column">
	<img src="images/Home_img2.jpg"  width="100%" height="200">
	<div class="desc">2nd Cinematic Excellence film awards host Jimmy Kimmel</div>
</div>

<div class="column">
	<img src="images/Home_img3.jpg"  width="100%" height="200">
	<div class="desc">Award ceremony red carpet moments</div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>	

	
</br>	
<button type="submit" class="btn">Chat with us!</button>
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