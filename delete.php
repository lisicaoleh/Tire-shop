<?php
require_once 'DB.php';

$id = $_GET['id'];
if(!isset($id)){
    $sql = 'DELETE FROM busket';
    $query = $pdo->prepare($sql);
    $query->execute();
}else{
$sql = 'DELETE FROM busket WHERE id = ?';
$query = $pdo->prepare($sql);
$query->execute([$id]);
}
header('Location: ./busket.php');
