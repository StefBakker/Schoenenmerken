<?php	
	$db = new mysqli('localhost','root','','shoeswebsite');
	$query = "SELECT * FROM schoenen order by merk, maat asc";
	$result = $db->query($query);
	$schoenen = $result->fetch_all(MYSQLI_ASSOC);
?>