<?php
	include 'includes/session.php';

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];


		$sql = "SELECT * FROM students WHERE email = '$email'";
		$query = $conn->query($sql);
		if($query->num_rows > 0){
			$row = $query->fetch_assoc();
			$_SESSION['student'] = $row['id'];
			header('location: reports.php');
		}
		else{
			$_SESSION['error'] = 'Email not found';
			header('location: index.php');
		}

	}
	else{
		$_SESSION['error'] = 'Enter Email add first';
		header('location: index.php');
	}

 
?>