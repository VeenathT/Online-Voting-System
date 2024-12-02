<?php

	session_start();
	
	include_once 'config.php' ;
	$feedback = $_SESSION['Feedback'];
	
	
	if(isset($_POST['deleteFeedback'])){
		
		$query = "DELETE FROM feedback WHERE f_description = '$feedback'";
	    mysqli_query($conn,$query);
		$sql1 = "SELECT * FROM feedback";
		$result1 = mysqli_query($conn,$sql1);
	
		if(mysqli_num_rows($result1) > 0){
			while($row = mysqli_fetch_assoc($result1)){
				$Feedback = $row["f_description"];
				if ($Feedback == $feedback){
					echo '<script type = "text/javascript">alert("Deletion unsuccessful!"); window.location.href = "viewPreviousFeedbacks.php";</script>';
					exit;
				}
				else{
					continue;
				}
			
			}	
			echo '<script type = "text/javascript">alert("Your feedback is successfully deleted!"); window.location.href = "viewPreviousFeedbacks.php";</script>';
		}
		else{
			echo "No rows found";
		}
	}
	
	$conn->close();

?>