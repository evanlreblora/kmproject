<?php include 'includes/session.php'; ?>
<?php
 
	if(ISSET($_REQUEST['bookid'])){
		$bookid = $_REQUEST['bookid'];
		
		$query = mysqli_query($conn, "SELECT * FROM `books` WHERE `id` = '$bookid'") or die(mysqli_error());
		$fetch  = mysqli_fetch_array($query);
		$filename = $fetch['file'];




				if($fetch->num_rows > 0){
					$brow = $query->fetch_assoc();
					$bid = $brow['id'];

					$sql = "INSERT INTO borrow (student_id, book_id, date_borrow) VALUES ('$student_id', '$bid', NOW())";
					if($conn->query($sql)){
						$added++;
						$sql = "UPDATE books SET status = 1 WHERE id = '$bid'";
						$conn->query($sql);
					}
					else{
						if(!isset($_SESSION['error'])){
							$_SESSION['error'] = array();
						}
						$_SESSION['error'][] = $conn->error;
					}

				}
				else{
					if(!isset($_SESSION['error'])){
						$_SESSION['error'] = array();
					}
					$_SESSION['error'][] = 'Report with ISBN - '.$isbn.' unavailable';
				}


	 
		header("Content-Disposition: attachment; filename=".$filename);
		header("Content-Type: application/octet-stream;");
		readfile("files/".$filename);
	}
	header('location: reports.php');
?>
