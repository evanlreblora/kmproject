<?php
	include 'includes/session.php';


	if(isset($_POST['add']))
	{

		//creating random isbn
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		$isbn = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);

		// $isbn = $_POST['isbn'];
		$filename = $_POST['filename'];
		$category = $_POST['category'];
		$description = $_POST['description'];
		$link = $_POST['link'];
		$publisher = $_POST['publisher'];
		$fileName1 = $_FILES['fileName2']['name'];
		$file_type = $_FILES['fileName2']['type'];
		$tempName = $_FILES['fileName2']['tmp_name'];
		$date_uploaded = date("Y-m-d");
		$status = 0;

		$errors = array();

		if(!empty($fileName1)){
			move_uploaded_file($tempName, '../files/'.$fileName1);	
		}

		$u = "SELECT filename FROM books WHERE filename='$filename'";
		$uu = mysqli_query($conn,$u);

		if (empty($filename)) {
			$errors['u']  = "Filename Requires";
		}else if(mysqli_num_rows($uu) > 0){
			$errors['u']  = "Filename already exist!";

		}

	if (count($errors)==0) {
		 $sql = "INSERT INTO books (isbn, category_id, filename, description, publisher, file, file_type, link, date_uploaded,status) VALUES ('$isbn', '$category', '$filename', '$description', '$publisher','$fileName1','$file_type', '$link', '$date_uploaded', '$status')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Report added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
		

	}
	else{
		$_SESSION['error'] = 'Filename already exist!';
	}
}	
	header('location: reports.php');

?>