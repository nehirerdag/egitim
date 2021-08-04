<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'nehir', 'zxcv1234', 'egitim');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

	// write query for all dersler
	$sql = 'SELECT adi, resim FROM dersler';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$dersler = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);


?>