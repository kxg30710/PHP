<?php
$msg = "";
try {
    $pdo = new pdo('mysql:host=localhost;port=3306;dbname=gmailaccount','admin','admindb');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    //$msg = "Connection Err!";
    $msg = $e;
}
