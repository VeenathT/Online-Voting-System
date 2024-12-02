<!DOCTYPE html>
<html>
<head>
<title>IWT</title>
<link rel="stylesheet" href="style/stylesheet.css">
<link rel="stylesheet" href="style/shop.css">
<script src="shop.js"></script>
 
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
	

	<ul class="nav">
	<div class="topnav">
		<li><a class="list" href="Home01.php">Home</a></li>
		<li><a class="list" href="Nominees.html">Nominees</a></li>
		<li><a class="list" href="Results_f.php">Results</a></li>
		<li><a class="list" href="PastWinners.html">Past Winners</a></li>
		<li><a class="list" href="#">Shop</a></li>
		<li><a class="list" href="Login.php">Login</a></li>
		<input type="text" placeholder="Search..">
	</div>
	</ul>	
</center>

<ul class="breadcrumb">
  <li><a href="Home01.php">Home</a></li>
  <li><a href="#">Shop</a></li>
</ul> 

<div class="product-container">
  <div class="product">
    <div class="product-images">
      <img src="images/shopimages/Avatar2.png" alt="Product 1 - Image 1">
    </div>
    <h3>Avatar Original Motion Picture Soundtrack</h3>
    <p>$40.00</p>
    <a href="#" class="buy-now-btn" data-product-id="1" onclick="authentication()">Buy Now</a>
	<div class="product-details">
      <p>This is the additional information about Product 1.</p>
    </div>
  </div>

  <div class="product">
    <div class="product-images">
      <img src="images/shopimages/Top gun.png" alt="Product 2 - Image 1">
    </div>
    <h3>Top Gun:Maverick Original Motion Picture Soundtrack</h3>
    <p>$50.00</p>
    <a href="#" class="buy-now-btn" data-product-id="2" onclick="authentication()">Buy Now</a>
	<div class="product-details">
      <p>This is the additional information about Product 2.</p>
    </div>
  </div>
  
  <div class="product">
    <div class="product-images">
      <img src="images/shopimages/minamata.jpg" alt="Product 3 - Image 1">
    </div>
    <h3>Minamata Movie Poster</h3>
    <p>$25.00</p>
    <a href="#" class="buy-now-btn" data-product-id="3" onclick="authentication()">Buy Now</a>
	<div class="product-details">
      <p>This is the additional information about Product 3.</p>
    </div>
  </div>
  
  <div class="product">
    <div class="product-images">
      <img src="images/shopimages/favmovies.png" alt="Product 4 - Image 1">
    </div>
    <h3>100 All-Time Favorite Movies Of The 20th Century</h3>
    <p>$25.00</p>
    <a href="#" class="buy-now-btn" data-product-id="4" onclick="authentication()">Buy Now</a>
	<div class="product-details">
      <p>This is the additional information about Product 4.</p>
    </div>
  </div>
  
  <div class="product">
    <div class="product-images">
      <img src="images/shopimages/print.png" alt="Product 5 - Image 1">
    </div>
    <h3>Everything Everywhere All At Once Print</h3>
    <p>$45.00</p>
    <a href="#" class="buy-now-btn" data-product-id="5" onclick="authentication()">Buy Now</a>
	<div class="product-details">
      <p>This is the additional information about Product 5.</p>
    </div>
  </div>
  
  <div class="product">
    <div class="product-images">
      <img src="images/shopimages/babylon.png" alt="Product 6 - Image 1">
    </div>
    <h3>(2022)Babylone OST LP</h3>
    <p>$50.00</p>
    <a href="#" class="buy-now-btn" data-product-id="6" onclick="authentication()">Buy Now</a>
	<div class="product-details">
      <p>This is the additional information about Product 6.</p>
    </div>
  </div>
</div>

<button type="submit" class="btn1" onclick="authentication()"><a href="#" class="cart-icon"><i class="fa fa-shopping-cart"></i></a></button>
<script>
function authentication(){
alert("Please sign up to continue");
window.location.href = "signup.php";
}
</script>

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