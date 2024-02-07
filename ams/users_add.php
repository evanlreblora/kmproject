<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$emai = $_POST['email'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$course = $_POST['course'];
		$filename = $_FILES['photo']['name'];
		$tempName = $_FILES['photo']['tmp_name'];
		if(!empty($filename)){
			move_uploaded_file($tempName, '../images/'.$filename);	
		}
		//creating studentid
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		$password = password_hash($password, PASSWORD_DEFAULT);
		$student_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
		$level_id = 2;
		//

		$sql = "INSERT INTO students (email,password,student_id, firstname, lastname, course_id, level_id, photo, created_on) VALUES ('$emai','$password','$student_id', '$firstname', '$lastname', '$course', '$level_id','$filename', NOW())";
		if($conn->query($sql)){
			$_SESSION['success'] = 'User added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: users.php');
?>