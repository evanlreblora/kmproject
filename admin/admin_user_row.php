<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT *, admin.id AS studid FROM admin LEFT JOIN course ON course.id=admin.organisation_id WHERE admin.id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>