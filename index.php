<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" href="ui/css/default.css">
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>メニュー画面</h1>
		</div>

		<div style="text-align: center">
			<form action="services/listing.php" method="post">
				<input type="radio" name="stype" value="cost">コスト
				<input type="radio" name="stype" value="attack">攻撃力
				<input type="radio" name="stype" value="health">ヘルス
				<br>
				<p>数値:<input type="text" name="inp"></p>
				<p>整数を入力してください、すべてのカードをみたい場合はタイプ選択しないで直接検索してください</p>
				<p><input type="submit" value="カード一覧へ"></p>
			</form>
		</div>	
		<?php require 'ui/ui_footer.php'; ?>
	</div>
</body>
</html>
