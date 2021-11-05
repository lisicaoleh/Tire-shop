<?php
require_once 'DB.php';
$purchase = $_GET;
print_r($purchase);
$id = key($purchase);
$count = $purchase[$id];

$sql = 'SELECT * FROM goods WHERE id = '.$id;
$query = $pdo->query($sql);
$row = $query->fetch(PDO::FETCH_OBJ);

$fullprice = $count*$row->price;

$sqlINS = 'INSERT INTO busket(name, count, price) VALUES (?, ?, ?)';
$queryINS = $pdo->prepare($sqlINS);

$arr = [$row->name, $count, $fullprice];

$queryINS->execute($arr);

header('Location: ./goods.php');