<?php

	session_start();

?>

<!DOCTYPE html>
<html>

<head>
  <title>Cinematic Excellence Awards - Voting</title>
  <link rel="stylesheet" href="style/stylesheet.css">
  <link rel="stylesheet" href="style/cart.css">
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
	  
    <ul class="breadcrumb">
  <li><a href="Home02.php">Home</a></li>
  <li><a href="Shop2.php">Shop</a></li>
  <li><a href="#">Cart</a></li>
	</ul>

    <div class="cart-container">
      <h2>Shopping Cart</h2>
      <div class="cart-items">
       <?php
			include_once 'config.php' ;
			
			
		if (isset($_SESSION['Pname1'])){
		$sql = "SELECT * FROM item";
		$result = mysqli_query($conn,$sql);
	
		if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			$itemName = $row["Item_name"];
			$price = $row["price"];
			if ($itemName == $_SESSION['Pname1']){
				echo "<div style='background-color: #414141;font-family:Tahoma;color:white;font-size: 20px;padding-bottom:15px; padding-top:15px;'><b> &nbsp &nbsp".$itemName."     ".$itemPrice."</b></div><br>";
				break;
			}
			else{
				continue;
			}
			
			}
		
		}
		}
		
		if (isset($_SESSION['Pname2'])){
		$sql = "SELECT * FROM item";
		$result = mysqli_query($conn,$sql);
	
		if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			$itemName = $row["Item_name"];
			$price = $row["price"];
			if ($itemName == $_SESSION['Pname2']){
				echo "<div style='background-color: #414141;font-family:Tahoma;color:white;font-size: 20px;padding-bottom:15px; padding-top:15px;'><b> &nbsp &nbsp".$itemName." &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp $".$price.".00</b></div><br>";
				break;
			}
			else{
				continue;
			}
			
			}
		
		}
	
		}
	     
	   ?>
      </div>
      <div class="cart-total">
        <h3>Total: <span id="total-price">$0.00</span></h3>
        <a href="checkout.php" class="checkout-btn">Checkout</a>
      </div>
    </div>

    <div class="footer">
      <br>
      <center>
        <a href="#" class="fa fa-facebook"></a>  
        <a href="#" class="fa fa-twitter"></a>  
        <a href="#" class="fa fa-instagram"></a>  
        <a href="#" class="fa fa-google"></a>

        <h4 style="font-style:italic;">
          <ul class="links">
            <li><a class="link" href="" style="color: inherit;" target="_blank">Contact Us</a></li>
            <li><a class="link" href="" style="color: inherit;" target="_blank">Terms and Conditions</a></li>
            <li><a class="link" href="" style="color: inherit;" target="_blank">Privacy and Policy</a></li>
          </ul>	
        </h4>
      </center>
    </div>
  </div>

  <script src="shop.js"></script>
</body>
</html>
