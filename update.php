<?php
	session_start(); // Start the session to access session variables
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	// Assuming you have a session variable 'user_id' storing the ID of the logged-in user
	$id = $_SESSION['id'];
	// Escape user inputs to prevent SQL injection
	$name = mysqli_real_escape_string($connection, $_POST['name']);
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$mobile = mysqli_real_escape_string($connection, $_POST['mobile']);
	$address = mysqli_real_escape_string($connection, $_POST['address']);
	// Update query with WHERE clause to only update the record of the logged-in user
	$query = "UPDATE users SET name = '$name', email = '$email', mobile = '$mobile', address = '$address' WHERE id = '$id'";
	$query_run = mysqli_query($connection, $query);
	if($query_run){
		echo '<script type="text/javascript">';
		echo 'alert("Updated successfully...");';
		echo 'window.location.href = "user_dashboard.php";';
		echo '</script>';
	} else {
		echo '<script type="text/javascript">';
		echo 'alert("Update failed...");';
		echo 'window.location.href = "user_dashboard.php";'; // Redirect to dashboard even if update fails
		echo '</script>';
	}
?>
