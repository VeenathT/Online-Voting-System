<?php
include_once 'config.php' ;

if(isset($_POST["submit"])){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$feedback = $_POST["feedback"];
	$uID = 0;  
	
	$sql = "SELECT * FROM registereduser";
	$result = mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			$Email = $row["U_email"];
			$uid = $row["UID"];
			if ($Email == $email){
				$uID = $uid;
				break;
			}
			else{
				continue;
			}
			
		}
		
		if ($uID == 0){
			echo '<script type = "text/javascript">alert("Please sign up to continue"); window.location.href = "signup.php";</script>';
	        exit;
		}
		
	}
	else{
		echo "No rows found";
	}
			
	$query = "INSERT INTO feedback(UID, f_description) VALUES ($uID, '$feedback')";
	mysqli_query($conn,$query);
	echo '<script type = "text/javascript">alert("Thank you for your feedback!"); window.location.href = "Feedback.php";</script>';
	exit;
}
else{
	echo '<script type = "text/javascript">alert("Submission unsuccessful!");</script>';
}

$conn->close();
?>