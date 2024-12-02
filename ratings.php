<?php

session_start();
include_once 'config.php';
function saveRating($rating)
{
    
    
    
    $conn = new mysqli('localhost', 'username', 'password', 'database_name');
    
    
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }
    
    $stmt = $conn->prepare("INSERT INTO ratings (rating_value) VALUES (?)");
    $stmt->bind_param("i", $rating);
    $stmt->execute();
    
    
    $stmt->close();
    $conn->close();
}


if (isset($_POST['rating'])) {
    $rating = $_POST['rating'];
 
    saveRating($rating);
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Cinematic Excellence Awards - Voting</title>
  <link rel="stylesheet" href="style/stylesheet.css">
  <link rel="stylesheet" href="style/ratings.css">
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
		<li><a class="list" href="Results..php">Results</a></li>
		<li><a class="list" href="PastWinners.php">Past Winners</a></li>
		<li><a class="list" href="Shop.php">Shop</a></li>
		<li><a class="list" href="FAQ.php">FAQs</a></li>
		<li><a class="list" href="viewFeedbacks.php">Feedbacks</a></li>
		<input type="text" placeholder="Search..">
	</div>
	</ul>
	  </center>
	  
    <ul class="breadcrumb">
  <li><a href="Home02.php">Home</a></li>
  <li><a href="Nominees.php">Nominees</a></li>
  <li><a href="#">Ratings</a></li>
	</ul>

<section>
    <div class="ratings-heading">
       Ratings
      <div class="search-box">
        <input type="text" placeholder="Search for nominees...">
      </div>
    </div>

    <div class="ratings-content">
      <div class="nominee-container">
        <div class="nominee">
          <img src="images/avatar.jpeg">
          <div class="nominee-info">
            <div class="nominee-title">
                <a href="film1.html">Avatar: The Way of Water</a>
              </div>              
            <div class="nominee-description">How would you rate</div>
            <div class="rating-stars">
              <input type="radio" name="rating1" id="rating1-5">
              <label for="rating1-5"></label>
              <input type="radio" name="rating1" id="rating1-4">
              <label for="rating1-4"></label>
              <input type="radio" name="rating1" id="rating1-3">
              <label for="rating1-3"></label>
              <input type="radio" name="rating1" id="rating1-2">
              <label for="rating1-2"></label>
              <input type="radio" name="rating1" id="rating1-1">
              <label for="rating1-1"></label>
            </div>
            <button class="submit-btn" onclick="submitRating(this)">Submit</button>
            <button class="submit-btn">Write a review</button>
          </div>
        </div>

        <div class="nominee">
          <img src="images/topgun.jpeg">
          <div class="nominee-info">
            <div class="nominee-title">
                <a href="film2.html">Top Gun: Maverick</a>
              </div>              
            <div class="nominee-description">How would you rate</div>
            <div class="rating-stars">
              <input type="radio" name="rating2" id="rating2-5">
              <label for="rating2-5"></label>
              <input type="radio" name="rating2" id="rating2-4">
              <label for="rating2-4"></label>
              <input type="radio" name="rating2" id="rating2-3">
              <label for="rating2-3"></label>
              <input type="radio" name="rating2" id="rating2-2">
              <label for="rating2-2"></label>
              <input type="radio" name="rating2" id="rating2-1">
              <label for="rating2-1"></label>
            </div>
            <button class="submit-btn" onclick="submitRating(this)">Submit</button>
            <button class="submit-btn">Write a review</button>
          </div>
        </div>

        <div class="nominee">
            <img src="images/minamata.jpeg">
            <div class="nominee-info">
                <div class="nominee-title">
                    <a href="film3.html">Minamata</a>
                  </div>                  
              <div class="nominee-description">How would you rate</div>
              <div class="rating-stars">
                <input type="radio" name="rating3" id="rating3-5">
                <label for="rating3-5"></label>
                <input type="radio" name="rating3" id="rating3-4">
                <label for="rating3-4"></label>
                <input type="radio" name="rating3" id="rating3-3">
                <label for="rating3-3"></label>
                <input type="radio" name="rating3" id="rating3-2">
                <label for="rating3-2"></label>
                <input type="radio" name="rating3" id="rating3-1">
                <label for="rating3-1"></label>
              </div>
              <button class="submit-btn" onclick="submitRating(this)">Submit</button>
              <button class="submit-btn">Write a review</button>
            </div>
          </div>

          <div class="nominee">
            <img src="images/scream.jpeg">
            <div class="nominee-info">
                <div class="nominee-title">
                    <a href="film4.html">Scream VI</a>
                  </div>                  
              <div class="nominee-description">How would you rate</div>
              <div class="rating-stars">
                <input type="radio" name="rating4" id="rating4-5">
                <label for="rating4-5"></label>
                <input type="radio" name="rating4" id="rating4-4">
                <label for="rating4-4"></label>
                <input type="radio" name="rating4" id="rating4-3">
                <label for="rating4-3"></label>
                <input type="radio" name="rating4" id="rating4-2">
                <label for="rating4-2"></label>
                <input type="radio" name="rating4" id="rating4-1">
                <label for="rating4-1"></label>
              </div>
              <button class="submit-btn" onclick="submitRating(this)">Submit</button>
              <button class="submit-btn">Write a review</button>
            </div>
          </div>

          <div class="nominee">
            <img src="images/banshees.jpeg">
            <div class="nominee-info">
                <div class="nominee-title">
                    <a href="film5.html">The Banshees of Inisherin</a>
                </div>                  
              <div class="nominee-description">How would you rate</div>
              <div class="rating-stars">
                <input type="radio" name="rating5" id="rating5-5">
                <label for="rating5-5"></label>
                <input type="radio" name="rating5" id="rating5-4">
                <label for="rating5-4"></label>
                <input type="radio" name="rating5" id="rating5-3">
                <label for="rating5-3"></label>
                <input type="radio" name="rating5" id="rating5-2">
                <label for="rating5-2"></label>
                <input type="radio" name="rating5" id="rating5-1">
                <label for="rating5-1"></label>
              </div>
              <button class="submit-btn" onclick="submitRating(this)">Submit</button>
              <button class="submit-btn">Write a review</button>
            </div>
          </div>

          <div class="nominee">
            <img src="images/film5.jpg">
            <div class="nominee-info">
                <div class="nominee-title">.....................</div>
              <div class="nominee-description">How would you rate</div>
              <div class="rating-stars">
                <input type="radio" name="rating5" id="rating5-5">
                <label for="rating5-5"></label>
                <input type="radio" name="rating5" id="rating5-4">
                <label for="rating5-4"></label>
                <input type="radio" name="rating5" id="rating5-3">
                <label for="rating5-3"></label>
                <input type="radio" name="rating5" id="rating5-2">
                <label for="rating5-2"></label>
                <input type="radio" name="rating5" id="rating5-1">
                <label for="rating5-1"></label>
              </div>
              <button class="submit-btn" onclick="submitRating(this)">Submit</button>
              <button class="submit-btn">Write a review</button>
            </div>
          </div>

          <div class="nominee">
            <img src="images/film6.jpg">
            <div class="nominee-info">
              <div class="nominee-title">.....................</div>
              <div class="nominee-description">How would you rate</div>
              <div class="rating-stars">
                <input type="radio" name="rating6" id="rating6-5">
                <label for="rating6-5"></label>
                <input type="radio" name="rating6" id="rating6-4">
                <label for="rating6-4"></label>
                <input type="radio" name="rating6" id="rating6-3">
                <label for="rating6-3"></label>
                <input type="radio" name="rating6" id="rating6-2">
                <label for="rating6-2"></label>
                <input type="radio" name="rating6" id="rating6-1">
                <label for="rating6-1"></label>
              </div>
              <button class="submit-btn" onclick="submitRating(this)">Submit</button>
              <button class="submit-btn">Write a review</button>
            </div>
          </div>

          <div class="nominee">
            <img src="images/film6.jpg">
            <div class="nominee-info">
              <div class="nominee-title">.....................</div>
              <div class="nominee-description">How would you rate</div>
              <div class="rating-stars">
                <input type="radio" name="rating6" id="rating6-5">
                <label for="rating6-5"></label>
                <input type="radio" name="rating6" id="rating6-4">
                <label for="rating6-4"></label>
                <input type="radio" name="rating6" id="rating6-3">
                <label for="rating6-3"></label>
                <input type="radio" name="rating6" id="rating6-2">
                <label for="rating6-2"></label>
                <input type="radio" name="rating6" id="rating6-1">
                <label for="rating6-1"></label>
              </div>
              <button class="submit-btn" onclick="submitRating(this)">Submit</button>
              <button class="submit-btn">Write a review</button>
            </div>
          </div>

          <div class="nominee">
            <img src="images/film6.jpg">
            <div class="nominee-info">
              <div class="nominee-title">.....................</div>
              <div class="nominee-description">How would you rate</div>
              <div class="rating-stars">
                <input type="radio" name="rating6" id="rating6-5">
                <label for="rating6-5"></label>
                <input type="radio" name="rating6" id="rating6-4">
                <label for="rating6-4"></label>
                <input type="radio" name="rating6" id="rating6-3">
                <label for="rating6-3"></label>
                <input type="radio" name="rating6" id="rating6-2">
                <label for="rating6-2"></label>
                <input type="radio" name="rating6" id="rating6-1">
                <label for="rating6-1"></label>
              </div>
              <button class="submit-btn" onclick="submitRating(this)">Submit</button>
              <button class="submit-btn">Write a review</button>
            </div>
          </div>

          <div class="nominee">
            <img src="images/film6.jpg">
            <div class="nominee-info">
              <div class="nominee-title">.....................</div>
              <div class="nominee-description">How would you rate</div>
              <div class="rating-stars">
                <input type="radio" name="rating6" id="rating6-5">
                <label for="rating6-5"></label>
                <input type="radio" name="rating6" id="rating6-4">
                <label for="rating6-4"></label>
                <input type="radio" name="rating6" id="rating6-3">
                <label for="rating6-3"></label>
                <input type="radio" name="rating6" id="rating6-2">
                <label for="rating6-2"></label>
                <input type="radio" name="rating6" id="rating6-1">
                <label for="rating6-1"></label>
              </div>
              <button class="submit-btn" onclick="submitRating(this)">Submit</button>
              <button class="submit-btn">Write a review</button>
            </div>
          </div>
      </div>


      <div class="chart">
        <div class="chart-title">Rating Scale:</div>
        <div class="bar-container">
          <div class="bar">
            <div class="bar-fill" style="width: 20%"></div>
            <span class="bar-text">1 Star - Bad</span>
          </div>
          <div class="bar">
            <div class="bar-fill" style="width: 40%"></div>
            <span class="bar-text">2 Stars - Poor</span>
          </div>
          <div class="bar">
            <div class="bar-fill" style="width: 60%"></div>
            <span class="bar-text">3 Stars - Average</span>
          </div>
          <div class="bar">
            <div class="bar-fill" style="width: 80%"></div>
            <span class="bar-text">4 Stars - Good</span>
          </div>
          <div class="bar">
            <div class="bar-fill" style="width: 100%"></div>
            <span class="bar-text">5 Stars - Excellent</span>
          </div>
        </div>
      </div>
    </div>
	  </div>
</section>
    <div class="footer">
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
    
    <form method="POST" action="">
    <label for="rating">Rate stars:</label>
    <input type="number" name="rating" min="1" max="5" required>
    <button type="submit">Submit</button>
     </form>


  <script>
    function submitRating(button) {
      var ratingStars = button.previousElementSibling.getElementsByClassName('rating-stars')[0];
      var stars = ratingStars.getElementsByTagName('input');
      var selectedRating = 0;
      for (var i = 0; i < stars.length; i++) {
        if (stars[i].checked) {
          selectedRating = stars[i].value;
          break;
        }
      }
      console.log("Rating submitted: " + selectedRating);
    }
  </script>
</body>
</html>