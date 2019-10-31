<?php
require_once('./model/Card.php');
require_once('./model/CardMapper.php');

session_start();

$cm = new CardMapper();
$c = new Card();
$c->cid = $_GET['cid'];
$_SESSION['cards'] = $cm->findById($c);
header('location: ../ui/ui_cardfocus.php'); // 商品詳細画面へ

exit();