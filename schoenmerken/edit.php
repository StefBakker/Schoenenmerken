<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>
<div class="header">
	<h1>Wijzig</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$schoenen['id']?>">
			<label for="name">Merk:</label>
			<input type="text" id="merk" name="merk" value="<?=$schoenen['merk']?>">
		</div>
		<div>
			<input type="hidden" name="id" value="<?=$schoenen['id']?>">
			<label for="name">Maat:</label>
			<input type="text" id="maat" name="maat" value="<?=$schoenen['maat']?>">
		</div>
		<div>
			<input type="hidden" name="id" value="<?=$schoenen['id']?>">
			<label for="name">Voorraad:</label>
			<input type="text" id="voorraad" name="voorraad" value="<?=$schoenen['voorraad']?>">
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>
</div>