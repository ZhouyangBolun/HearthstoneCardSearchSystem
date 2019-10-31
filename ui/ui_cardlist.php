<?php require './ui_header.php'; ?>
<?php require '../services/model/Card.php'; ?>

<div id="container">
  <div id="header">
    <h1>カード一覧画面</h1>
  </div>
  
  <div style="margin-bottom: 20px">
    <table style="margin:0 auto">
    <tr><th>カードID</th><th>カード名</th><th>コスト</th><th>カード情報</th></tr>
    <?php
    session_start();
   // var_dump($_SESSION['cards']); // デバッグが終わったらコメントアウトしてくだ
    //var_dump($_SESSION['select']);
    $row = new Card();
    foreach ($_SESSION['cards'] as $row) {
      echo '<tr>';
      echo '<td>', $row->cid, '</td>';
      echo '<td>', $row->cname,'</td>';
      echo '<td>', $row->ccost, '</td>';
      echo '<td><a href="../services/focusing.php?cid=', $row->cid, '">詳細</a></td>';
      echo '</tr>';
    }
    ?>
    </table>
  </div>

  <form action="../index.php" method="post">
    <input type="submit" value="メニュー画面に戻る"></input> <!-- メニュー画面 -->
  </form>

  <div id="footer">
    <?php require './ui_footer.php'; ?>
  </div>
</div>

  