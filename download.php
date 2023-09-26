<?php include 'includes/session.php'; ?>
<?php
 
	if(ISSET($_REQUEST['bookid'])){
		$bookid = $_REQUEST['bookid'];
		
		$query = mysqli_query($conn, "SELECT * FROM `books` WHERE `id` = '$bookid'") or die(mysqli_error());
		$fetch  = mysqli_fetch_array($query);
		$filename = $fetch['file'];
	 
		header("Content-Disposition: attachment; filename=".$filename);
		header("Content-Type: application/octet-stream;");
		readfile("../files/".$filename);
	}
	header('location: reports.php');
?>
