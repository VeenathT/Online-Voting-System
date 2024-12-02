<?php

	session_start();

?>

<!DOCTYPE html>
<html>

<head>
  <title>Cinematic Excellence Awards - Voting</title>
  <link rel="stylesheet" href="style/stylesheet.css">
  <link rel="stylesheet" href="style/checkout.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="script.js"></script>
  
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
	  

  <div class="container">
    <h1>Billing Information</h1>
    <form>
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>
      
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
      
      <label for="contact">Contact Number</label>
      <input type="tel" id="contact" name="contact" required>
      
      <label for="city">City</label>
      <select id="city" name="city" required>
        <option value="">Select City</option>
        <option value="city1">America</option>
		<option value="city2">Australia</option>
        <option value="city2">Canada</option>
		<option value="city2">China</option>
        <option value="city2">India</option>
		<option value="city2">Japan</option>
		<option value="city2">Srilanla</option>
		<option value="city2">Singapore</option>
      </select>
      
      <label for="address">Address</label>
      <textarea id="address" name="address" required></textarea>
	  
	  <label for="address">Note</label>
      <textarea id="address" name="address" required></textarea>
      
      <h2>Payment Method</h2>
      <label>
        <input type="radio" name="payment" value="card" required>
        Card Payment
      </label>
      <label>
        <input type="radio" name="payment" value="cash">
        Cash on Delivery
      </label>
      
      <button type="submit">Place Order</button>
    </form>
  </div>
  
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
	<script src="shop.js"></script>	
</body>
</html>
