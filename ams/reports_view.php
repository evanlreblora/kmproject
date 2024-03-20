<?php
	include 'includes/session.php';

	if(isset($_POST['view'])){
		$id = $_POST['id'];

		$sql = "SELECT *, books.id AS bookid FROM books 
		LEFT JOIN category ON category.id=books.category_id 
		LEFT JOIN thematicconcern on thematicconcern.id=books.thematicconcern_id 
		WHERE books.id = '$id' 
		ORDER BY books.date_uploaded DESC;";

		$query = $conn->query($sql);

		if (mysqli_num_rows($query)>0){
			while ($row = mysqli_fetch_array($query)) {
				
				echo '
				<h4><b>Code:</b> ' .$row['isbn']. '</h4>
				<h4><b>Filename:</b> ' .$row['filename']. '</h4>
				<h4><b>Category: </b>' .$row['name']. '</h4>
				<h4><b>Thematic Concern: </b>' .$row['thematicname']. '</h4>

				<h4><b>Description:</b> ' .$row['description']. '</h4>
				<h4><b>Publisher:</b> ' .$row['publisher']. '</h4>
				<h4><b>Link:</b> ' .$row['link']. '</h4>
				<h4><b>Date Uploaded:</b> ' .$row['date_uploaded']. '</h4>
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