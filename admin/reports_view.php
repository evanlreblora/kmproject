<?php
	include 'includes/session.php';

	if(isset($_POST['view'])){
		$id = $_POST['id'];

		$sql = "SELECT *, books.id AS bookid FROM books LEFT JOIN category ON category.id=books.category_id WHERE books.id = '$id'";

		$query = $conn->query($sql);

		if (mysqli_num_rows($query)>0){
			while ($row = mysqli_fetch_array($query)) {
				
				echo '
				<h4>Code: ' .$row['isbn']. '</h4>
				<h4>Filename: ' .$row['filename']. '</h4>
				<h4>Category: ' .$row['category_id']. '</h4>

				<h4>Description: ' .$row['description']. '</h4>
				<h4>Publisher: ' .$row['publisher']. '</h4>
				<h4>Link: ' .$row['link']. '</h4>
				<h4>Date Uploaded: ' .$row['date_uploaded']. '</h4>
				';
				

			}
		} else{
			echo $result = '<h4>No record Found</h4>';
			}
	// 	while($row = $query->fetch_assoc()){
	// 		echo '<h6>'.$row['id'].'</h6>';
	// 	}

	
	}

 

?>