<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$schoenen = NULL;
		if (isset($_GET['id'])):
			$db = new mysqli('localhost','root','','shoeswebsite');
			$id = $db->escape_string($_GET["id"]);
			$query = "select * from schoenen where id=$id";
			$result = $db->query($query);

			$schoenen = $result->fetch_assoc();
					endif;
		if ($schoenen == NULL):
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','shoeswebsite');
	
		$id = $db->escape_string($_POST["id"]);
		$merk = $db->escape_string($_POST["merk"]);
		$maat = $db->escape_string($_POST["maat"]);
		$voorraad = $db->escape_string($_POST["voorraad"]);

		$query = "update schoenen set merk='$merk', maat='$maat', voorraad='$voorraad' where id=$id";
		$result = $db->query($query);

    header("Location: ./");
    exit();
	endif;

?>