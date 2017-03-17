<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
<div class="header">
	<h1>Nieuwe schoen:</h1>
	<form method="post">
		<div>
			<label for="merk">Merk:</label>
			<input type="text" id="merk" name="merk">
		</div>
		<div>
			<label for="maat">Maat:</label>
			<input type="text" id="maat" name="maat">
		</div>
		<div>
			<label for="voorraad">Voorraad:</label>
			<input type="text" id="voorraad" name="voorraad">
		</div>
			<br>
			<input type="submit" value="Save">
		
	</form>
<?php
	include "../common/footer.php";
?>
</div>