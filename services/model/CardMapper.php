<?php
require_once('Card.php');
require_once('functions.php');

class CardMapper {
// pro_catはviewのため、検索系の操作のみサポート
	function findById(Card $c) {
		try {
			$pdo = getPDO();
			$stmt = $pdo->prepare("select * from cards where cid = :cid");
			$stmt->execute([
			':cid' => $c->cid
			]);
			$row = $stmt->fetchAll(PDO::FETCH_CLASS, 'Card');
			return $row;
		} catch (PDOException $e) {
			echo "exception occured!";
			echo $e->getMessage();
			return null;
		}
	}
	function getAll() {
		try {
			$pdo = getPDO();
			$stmt = $pdo->query("select * from cards");
			$rows = $stmt->fetchAll(PDO::FETCH_CLASS, 'Card');
			return $rows;
		} catch (PDOException $e) {
			echo "exception occured!";
			echo $e->getMessage();
			return null;
		}
	}
	function getAllByCost(Card $sc) {
		try {
			$pdo = getPDO();
			$stmt = $pdo->prepare("select * from cards where ccost = :ccost");
			$stmt->execute([
			':ccost' => $sc->ccost
			]);
			$rows = $stmt->fetchAll(PDO::FETCH_CLASS, 'Card');
			return $rows;
		} catch (PDOException $e) {
			echo "exception occured!";
			echo $e->getMessage();
			return null;
		}
	}
	function getAllByAttack(Card $sc) {
		try {
			$pdo = getPDO();
			$stmt = $pdo->prepare("select * from cards where catk = :catk");
			$stmt->execute([
			':catk' => $sc->catk
			]);
			$rows = $stmt->fetchAll(PDO::FETCH_CLASS, 'Card');
			return $rows;
		} catch (PDOException $e) {
			echo "exception occured!";
			echo $e->getMessage();
			return null;
		}
	}
	function getAllByHealth(Card $sc) {
		try {
			$pdo = getPDO();
			$stmt = $pdo->prepare("select * from cards where chel = :chel");
			$stmt->execute([
			':chel' => $sc->chel
			]);
			$rows = $stmt->fetchAll(PDO::FETCH_CLASS, 'Card');
			return $rows;
		} catch (PDOException $e) {
			echo "exception occured!";
			echo $e->getMessage();
			return null;
		}
	}
}