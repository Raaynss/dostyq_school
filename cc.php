<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "proekt";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$sql = "SELECT * FROM services";

	$result = $conn->query($sql);

	while ($row = $result-> fetch_assoc()) {
		echo $row['name']."".$row['text'];
		echo '<img width="75px" src="photo/'.$row['img'].'">'."<br>";
	}
	?>