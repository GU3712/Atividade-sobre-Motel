<?php
$host = 'localhost';
$db = 'motel_db';
$user = 'root';  
$pass = 'senai.123';      

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>
