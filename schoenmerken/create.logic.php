<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','shoeswebsite');
		
		$merk = $db->escape_string($_POST["merk"]);
		$maat = $db->escape_string($_POST["maat"]);
		$voorraad = $db->escape_string($_POST["voorraad"]);
		
		$query = "insert into schoenen (merk, maat, voorraad) values ('$merk', '$maat', '$voorraad')";
		$result = $db->query($query);
	
 
    header("Location: ./");
    exit();
	endif;

?>