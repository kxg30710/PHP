<?php
require_once "pdo.php";
session_start();
header('Content-Type: application/json; charset=utf-8');
$stmt = $pdo->prepare("SELECT * FROM account where email = :xyz");
$stmt->execute(array(":xyz" => $_GET['email']."@gmail.com"));
$rows = array();
while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
  $rows[] = $row;
}
echo json_encode($rows, JSON_PRETTY_PRINT);








