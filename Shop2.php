<?php

	session_start();

?>

<!DOCTYPE html>
<html>

<head>
  <title>Cinematic Excellence Awards - Voting</title>
  <link rel="stylesheet" href="style/stylesheet.css">
  <link rel="stylesheet" href="style/shop.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="shop.js"></script>
  
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

      <div class="top-right">
        <span id="user-greeting"></span>
      </div>
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
	  </center>
	  
    <ul class="breadcrumb">
  <li><a href="Home02.php">Home</a></li>
  <li><a href="#">Shop</a></li>
	</ul>

<div class="product-container">
  <div class="product">
    <div class="product-images">
      <img src="images/shopimages/Avatar2.png" alt="Product 1 - Image 1">
    </div>
    <h3 style="color:black;">Avatar Original Motion Picture Soundtrack</h3>
    <p>$40.00</p>
    <form method="POST"><button type="submit" value="Avatar Original Motion Picture Soundtrack" class="buy-now-btn" data-product-id="1" name="Product1">Buy Now</button></form>
	<?php
		if(isset($_POST["Product1"])){
			$name = $_POST["Product1"];
			$_SESSION['Pname1'] = $name;
		}
	
	?>
	<div class="product-details">
      <p>This is the additional information about Product 1.</p>
    </div>
  </div>

  <div class="product">
    <div class="product-images">
      <img src="images/shopimages/Top gun.png" alt="Product 2 - Image 1">
    </div>
    <h3 style="color:black;">(2022) Top Gun: Maverick OST LP</h3>
    <p>$30.00</p>
    <form method="POST"><button type="submit" value="(2022) Top Gun: Maverick OST LP" class="buy-now-btn" data-product-id="1" name="Product2">Buy Now</button></form>
	<?php
		if(isset($_POST["Product2"])){
			$name = $_POST["Product2"];
			$_SESSION['Pname2'] = $name;
			
		}
 
	
	?>	<div class="product-details">
      <p>This is the additional information about Product 2.</p>
    </div>
  </div>
  
  <div class="product">
    <div class="product-images">
      <img src="images/shopimages/minamata.jpg" alt="Product 3 - Image 1">
    </div>
    <h3 style="color:black;">Minamata Movie Poster</h3>
    <p>$25.00</p>
    <a href="#" class="buy-now-btn" data-product-id="3" onclick="addToCart(event)">Buy Now</a>
	<div class="product-details">
      <p>This is the additional information about Product 3.</p>
    </div>
  </div>
  
  <div class="product">
    <div class="product-images">
      <img src="images/shopimages/favmovies.png" alt="Product 4 - Image 1">
    </div>
    <h3 style="color:black;">100 All-Time Favorite Movies Of The 20th Century</h3>
    <p>$25.00</p>
    <a href="#" class="buy-now-btn" data-product-id="4" onclick="addToCart(event)">Buy Now</a>
	<div class="product-details">
      <p>This is the additional information about Product 4.</p>
    </div>
  </div>
  
  <div class="product">
    <div class="product-images">
      <img src="images/shopimages/print.png" alt="Product 5 - Image 1">
    </div>
    <h3 style="color:black;">Everything Everywhere All At Once Print</h3>
    <p>$45.00</p>
    <a href="#" class="buy-now-btn" data-product-id="5" onclick="addToCart(event)">Buy Now</a>
	<div class="product-details">
      <p>This is the additional information about Product 5.</p>
    </div>
  </div>
  
  <div class="product">
    <div class="product-images">
      <img src="images/shopimages/babylon.png" alt="Product 6 - Image 1">
    </div>
    <h3 style="color:black;">(2022)Babylone OST LP</h3>
    <p>$50.00</p>
    <a href="#" class="buy-now-btn" data-product-id="6" onclick="addToCart(event)">Buy Now</a>
	<div class="product-details">
      <p>This is the additional information about Product 6.</p>
    </div>
  </div>
</div>

<button type="submit" class="btn1"><a href="cart.php" class="cart-icon"><i class="fa fa-shopping-cart"></i></a></button>


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
	<script src="script.js"></script>	
</body>
</html>