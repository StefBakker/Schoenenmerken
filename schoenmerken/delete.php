<?php
	require_once "delete.logic.php";
	include "../common/header.php";
?>
<div class="header">
	<h1>Verwijder schoen</h1>
	<p>Weet je zeker dat je deze schoen wilt verwijderen ?:</p>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$schoenen['id']?>">
			<label for="name">Name:</label>
			<span><?=$schoenen['merk']?></span>
		</div>
		<div>
			<label for="name">Maat:</label>
			<span><?=$schoenen['maat']?></span>
		</div>
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>
</div>