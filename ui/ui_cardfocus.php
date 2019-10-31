<div id="container">
	<?php require './ui_header.php'; ?>
	<?php
		require '../services/model/Card.php';
		session_start();
		// $pc = new ProCat();
		$c = $_SESSION['cards'][0];
		//var_dump($c);
	?>

	<div id="header">
		<h1>カードフォーカス</h1>
	</div>
	
	<div class="cover">

		<div id="leftarea">
			<div class="box1">
				<?php echo '<img src="./imgs/', $c->cimgfilename, '" height="400">'; ?>
			</div>
		</div>
		
		<div id="rightarea">
			<div class="box2">
				<?php
					echo '<p>', $c->ctext, '</p>';
				?>
			</div>	

			<table>
				<?php
					echo '<tr>';
					echo '<td> カード名 </td>';
					echo '<td>', $c->cname, '</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<td> カード情報 </td>';
					echo '<td>', $c->ccontent, '</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<td> コスト </td>';
					echo '<td>', $c->ccost, '</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<td> 攻撃力 </td>';
					echo '<td>', $c->catk, '</td>';
					echo '</tr>';
					echo '<tr>';
					echo '<td> ヘルス </td>';
					echo '<td>', $c->chel, '</td>';
					echo '</tr>';
				?>
			</table>
			
			<form action="../services/listing.php" method="post">
				<?php
					if($_SESSION['select']) echo '<input type="hidden" name="scost" value="', $c->ccost, '">';
					switch ($_SESSION['select']) {
						case 'cost':
							echo '<input type="hidden" name="stype" value="cost">';
							echo '<input type="hidden" name="inp" value="', $c->ccost, '">';
							break;
						case 'attack':
							echo '<input type="hidden" name="stype" value="attack">';
							echo '<input type="hidden" name="inp" value="', $c->catk, '">';
							break;
						case 'health':
							echo '<input type="hidden" name="stype" value="health">';
							echo '<input type="hidden" name="inp" value="', $c->chel, '">';
							break;
					}
				?>
				<input type="submit" value="カード一覧へ">
			</form>
		</div>
		
	</div>

	<div id="footer">
		<?php require './ui_footer.php'; ?>
	</div>
</div>

