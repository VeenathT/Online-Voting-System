<?php

if($_SERVER["REQUEST_METHOD"] === "GET"){
	$query = $_GET["query"];
	
	$specificWords = array("voting", "Voting","vote","Vote","vote?", "Vote?");
	
	$matchingWords = array_intersect($specificWords, explode(" ", $query));
	if(!empty($matchingWords)){
		header("Location: votingDetails.html");
		exit();
	}
	else{
		echo '<script type = "text/javascript">alert("No results found"); window.location.href = "FAQ.php";</script>';
		exit;
	}
}
	
?>