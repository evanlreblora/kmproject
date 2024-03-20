<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, books.id AS bookid FROM books LEFT JOIN thematicconcern ON thematicconcern.id=books.thematicconcern_id WHERE books.id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>