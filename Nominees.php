<?php

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
<title>Cinematic Excellence Awards</title>
<link rel="stylesheet" href="style/stylesheet.css">
<link rel="stylesheet" href="style/Nominees.css">
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
		<li><a class="list" href="Nominees.html">Nominees</a></li>
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
  <li><a href="#">Nominees</a></li>
</ul> 

</br>
<div class="rectangle">
Intrested in voting?<a href="vote.php"><button type="submit" class="btn1">Vote now!</button></a>
</div>	

</br>

  <button type="submit" class="btn2"><a class="link2" href="#" >Popular Category</a></button>
  <button type="submit" class="btn2"><a class="link2" href="#" >Best Category</a></button>

</br></br>
</br></br>

<div>
  <select>
    <option value="0">Select genres...</option>
    <option value="1">Sci-fi</option>
    <option value="2">Action</option>
    <option value="3">Drama</option>
    <option value="4">Horror</option>
    <option value="5">Comedy</option>
	<option value="5">Adventure</option>
  </select>
</div>

<div class="description">
      <h2>Avatar: The Way of Water</h2>
	<p>A 2023
		American epic science fiction film directed and produced by James Cameron. It is the sequel to Avatar
		(2009) It follows a blue-skinned humanoid named Jake Sully as he and his family, under renewed human
		threat, seek refuge with the aquatic Metkayina clan of Pandora, a habitable exomoon on which they
		live. </p>

  <button type="submit" class="btn3"><a class="link2" href="ratings.php" >Ratings</a></button>
  <button type="submit" class="btn3"><a class="link2" href="#" >Feedbacks</a></button>

</div>
<img src="images/nom1.jpg" class="nom1_img">

</br></br>

<div class="description">
      <h2>Top Gun: Maverick</h2>
	<p>An American action
drama film which is a sequel to the 1986 film Top Gun. In the film, Maverick confronts his past while
training a group of younger Top Gun graduates, including the son of his deceased best friend, for a
dangerous mission</p>

  <button type="submit" class="btn3"><a class="link2" href="ratings.php" >Ratings</a></button>
  <button type="submit" class="btn3"><a class="link2" href="#" >Feedbacks</a></button>

</div>
<img src="images/nom2.jpg" class="nom1_img">

</br></br>

<div class="description">
      <h2>Minamata</h2>
	<p>A biographical drama film directed by
Andrew Levitas, based on the book of the same name. Johnny Depp stars as W. Eugene Smith, an American
photographer who documented the effects of mercury poisoning on the citizens of Minamata, Kumamoto,
Japan.</p>

  <button type="submit" class="btn3"><a class="link2" href="ratings.php" >Ratings</a></button>
  <button type="submit" class="btn3"><a class="link2" href="#" >Feedbacks</a></button>

</div>
<img src="images/nom3.jpg" class="nom1_img">

</br></br>

<div class="description">
      <h2>Scream VI</h2>
	<p>A 2023 American slasher film directed
by Matt Bettinelli-Olpin and Tyler Gillett.It is the sixth installment in the Scream film series. The
film follows a new Ghostface killer, who begins targeting the survivors of the "Woodsboro legacy
murders" in New York City.</p>

  <button type="submit" class="btn3"><a class="link2" href="ratings.php" >Ratings</a></button>
  <button type="submit" class="btn3"><a class="link2" href="#" >Feedbacks</a></button>

</div>
<img src="images/nom4.jpg" class="nom1_img">

</br></br>

<div class="description">
      <h2>The Banshees of Inisherin</h2>
	<p>A 2023 period
tragicomedy film directed, written, and co-produced by Martin McDonagh. Two lifelong friends who find
themselves at an impasse when one abruptly ends their relationship, with alarming consequences for both
of them</p>

  <button type="submit" class="btn3"><a class="link2" href="ratings.php" >Ratings</a></button>
  <button type="submit" class="btn3"><a class="link2" href="#" >Feedbacks</a></button>

</div>
<img src="images/nom5.jpg" class="nom1_img">

</br></br>


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