<?php

	session_start();
  include_once 'config.php';

  if (isset($_POST['film_id'])) {
      $filmID = $_POST['film_id'];
  
    
      if (isset($_POST['confirmed']) && $_POST['confirmed'] === 'true') {
         
          $sql = "UPDATE PopularNominee SET NoOfVotes = NoOfVotes + 1 WHERE NID = '$filmID'";
  
          if ($conn->query($sql) === TRUE) {
              echo "Vote submitted successfully!";
          } else {
              echo "Error updating vote count: " . $conn->error;
          }
      } else {
          echo "Vote not confirmed.";
      }
  }
  
  $conn->close();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Cinematic Excellence Awards - Voting</title>
  <link rel="stylesheet" href="style/stylesheet.css">
  <link rel="stylesheet" href="style/vote.css">
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
  <li><a href="#">Vote</a></li>
	</ul>
	
    <h1 class="voting-heading">Vote For Your Popular Nominee !</h1>
      <div class="film-container">
        <div class="film">
          <img src="images/avatar.jpeg">
          <div class="film-info">
            <h2 class="film-title"><a href="vote_submission.html">Avatar:The Way of Water</a></h2>
            <p class="film-category">Category :Sci-fi/Adventure</p>
            <div class="film">
            <a href="#" class="button" onclick="submitVote('0001')">Vote Now</a>


          </div>
        </div>
        <div class="film">
          <img src="images/topgun.jpeg">
          <div class="film-info">
            <h2 class="film-title"><a href="vote_submission.html">Top Gun:Maverick</a></h2>
            <p class="film-category">Category :Action/Adventure</p>
            <a href="#" class="button" onclick="submitVote('0002')">Vote Now</a>


          </div>
        </div>
        <div class="film">
          <img src="images/minamata.jpeg">
          <div class="film-info">
            <h2 class="film-title"><a href="vote_submission.html">Minamata</a></h2>
            <p class="film-category">Category :Drama</p>
            <a href="#" class="button" onclick="submitVote('0003')">Vote Now</a>


          </div>
        </div>
        <div class="film">
          <img src="images/scream.jpeg">
          <div class="film-info">
            <h2 class="film-title"><a href="vote_submission.html">Scream:VI</a></h2>
            <p class="film-category">Category :Horror</p>
            <a href="#" class="button" onclick="submitVote('0004')">Vote Now</a>


          </div>
        </div>
        <div class="film">
          <img src="images/banshees.jpeg">
          <div class="film-info">
            <h2 class="film-title"><a href="vote_submission.html">The Banshees of Inisherin</a></h2>
            <p class="film-category">Category :Comedy</p>
            <a href="#" class="button" onclick="submitVote('0005')">Vote Now</a>


          </div>
        </div>
        <div class="film">
          <img src="images/">
          <div class="film-info">
            <h2 class="film-title"><a href="vote_submission.html">.....................</a></h2>
            <p class="film-category">Category : ...........</p>
            <a href="#" class="button">Vote Now</a>
          </div>
        </div>
        <div class="film">
          <img src="images/">
          <div class="film-info">
            <h2 class="film-title"><a href="vote_submission.html">.....................</a></h2>
            <p class="film-category">Category : ...........</p>
            <a href="#" class="button">Vote Now</a>
          </div>
        </div>
        <div class="film">
          <img src="images/">
          <div class="film-info">
            <h2 class="film-title"><a href="vote_submission.html">.....................</a></h2>
            <p class="film-category">Category : ...........</p>
            <a href="#" class="button">Vote Now</a>
          </div>
        </div>
        <div class="film">
          <img src="images/">
          <div class="film-info">
            <h2 class="film-title"><a href="vote_submission.html">.....................</a></h2>
            <p class="film-category">Category : ...........</p>
            <a href="#" class="button">Vote Now</a>
          </div>
        </div>
        <div class="film">
          <img src="images/">
          <div class="film-info">
            <h2 class="film-title"><a href="vote_submission.html">.....................</a></h2>
            <p class="film-category">Category : ...........</p>
            <a href="#" class="button">Vote Now</a>
          </div>
        </div>
        <div class="film">
          <img src="images/">
          <div class="film-info">
            <h2 class="film-title"><a href="vote_submission.html">.....................</a></h2>
            <p class="film-category">Category : ...........</p>
            <a href="#" class="button">Vote Now</a>
          </div>
        </div>
        <div class="film">
          <img src="images/">
          <div class="film-info">
            <h2 class="film-title"><a href="vote_submission.html">.....................</a></h2>
            <p class="film-category">Category : ...........</p>
            <a href="#" class="button">Vote Now</a>
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

    <script>
        function submitVote(filmID) {
        var confirmation = confirm("You want to submit the vote?");
        if (confirmation) {

        var form = document.createElement('form');
        form.method = 'post';
        form.action = 'vote.php';

        var input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'film_id';
        input.value = filmID;
        form.appendChild(input);

        var input2 = document.createElement('input');
        input2.type = 'hidden';
        input2.name = 'confirmed';
        input2.value = 'true';
        form.appendChild(input2);

        document.body.appendChild(form);
        form.submit();
    }
   }

</script>
</body>
</html>