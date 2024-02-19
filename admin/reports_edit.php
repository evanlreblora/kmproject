<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$isbn = $_POST['isbn'];
		$filename = $_POST['filename'];
		$category = $_POST['category'];
		$description = $_POST['description'];
		$publisher = $_POST['publisher'];
		$date_uploaded = $_POST['date_uploaded'];
		$link = $_POST['link'];

		$sql = "UPDATE books SET isbn = '$isbn', category_id = '$category',  filename = '$filename', description = '$description', publisher = '$publisher', date_uploaded = '$date_uploaded', link = '$link' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Reports updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location:reports.php');

?>