<?php
include_once 'config.php' ;

if(isset($_POST["submit"])){
	$faq = $_POST["FAQ"];
	$email = $_POST["email"];
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
	
	$query = "INSERT INTO FAQ(UID,faq_description) VALUES ('$uID','$faq')";
	mysqli_query($conn,$query);
	echo '<script type = "text/javascript">alert("Your question will be answered soon!"); window.location.href = "FAQ.php";</script>';
	exit;
}
else{
	echo '<script type = "text/javascript">alert("Submission unsuccessful!");</script>';
}


$conn->close();

?>