<?php
require_once('./model/Card.php');
require_once('./model/CardMapper.php');

session_start();

$cm = new CardMapper();
$c = new Card();
switch ($_POST['stype']){
	case 'cost':
		$c->ccost = $_POST['inp'];
		$_SESSION['select'] = 'cost';
		$_SESSION['cards'] = $cm->getAllByCost($c);
		break;
	case 'attack':
		$c->catk = $_POST['inp'];
		$_SESSION['select'] = 'attack';
		$_SESSION['cards'] = $cm->getAllByAttack($c);
		break;
	case 'health':
		$c->chel = $_POST['inp'];
		$_SESSION['select'] = 'health';
		$_SESSION['cards'] = $cm->getAllByHealth($c);
		break;
	default:
		$_SESSION['cards'] = $cm->getAll($c);
}
header('location: ../ui/ui_cardlist.php'); // 商品詳細画面へ
exit();

// if(!$c->ccost){
// 	$_SESSION['cards'] = $cm->getAll($c);
// 	$_SESSION['select'] = FALSE;
// 	header('location: ../ui/ui_cardlist.php'); // 商品詳細画面へ
// 	exit();
// }else {
//  	$_SESSION['cards'] = $cm->getAllByCost($c);
//  	$_SESSION['select'] = TRUE;
// 	header('location: ../ui/ui_cardlist.php'); // 商品詳細画面へ
// 	exit();
// }
