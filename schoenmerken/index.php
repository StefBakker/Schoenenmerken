<?php
	require_once "index.logic.php";
	include "../common/header.php";
?>
<div class="header">
<script type="text/javascript" src="../js/search.js"></script>
	<br>
	<img src="../img/logo.jpg">
	<h1>Schoenen</h1>
	<button id='change' onclick='search()'>Search</button>
	<p class="options"><a href="create.php">Nieuwe schoen toevoegen</a></p>
	<table>
		<thead>
			<tr>
				<th>Merken:</th>
				<th>Maat:</th>
				<th>Voorraad:</th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($schoenen as $schoenen):
?>
			<tr>
				<td><?=$schoenen['merk']?></td>
				<td><?=$schoenen['maat']?></td>
				<td><?=$schoenen['voorraad']?></td>
				<td class="center"><a href="edit.php?id=<?=$schoenen['id']?>">Wijzigen</a></td>
				<td class="center"><a href="delete.php?id=<?=$schoenen['id']?>">Verwijderen</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>
	
<?php
	include "../common/footer.php";
?>
</div>