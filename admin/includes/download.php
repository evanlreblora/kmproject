<?php include 'session.php'; 

$r=session_id();
 
print_r ($_SESSION);
/* SOME PIECE OF CODE TO AUTHENTICATE THE USER, MOSTLY SQL QUERY... */

/* now registering a session for an authenticated user */



/* now displaying the session id..... */
echo "the session id id: ".$r;
 
echo " and the session has been registered for: ".$_SESSION['admin'];
 ?>
 
<?php
 session_start(); 
 print_r ($_SESSION);
 $student_id = $_SESSION['admin'];

 //echo a single entry from the array

 
	if(ISSET($_POST['id'])){
		$bookid = $_POST['id'];
 
	

		$query = mysqli_query($conn, "SELECT * FROM `books` WHERE `id` = '$bookid'") or die(mysqli_error());
		$fetch  = mysqli_fetch_array($query);
		$filename = $fetch['file'];
		// $student_id = 2;
		$status = 1;
		 
		$sql = "INSERT INTO borrow (student_id, book_id, date_borrow, status) VALUES ('$student_id', '$bookid', NOW(), '$status')";
		   if($conn->query($sql)){
			   $_SESSION['success'] = 'Successfully Downloaded Report';
		   }
		   else{
			   $_SESSION['error'] = $conn->error;
		   }
		
	 
		header("Content-Disposition: attachment; filename=".$filename);
		header("Content-Type: application/octet-stream;");
		readfile("../../files/".$filename);
	}
	header('location: ../reports.php');
?>
