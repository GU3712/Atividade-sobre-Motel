<?php
include '../db.php';

$numero = $_POST['numero'] ?? '';
$preco = $_POST['preco'] ?? '';
$capacidade = $_POST['capacidade'] ?? '';

$stmt = $pdo->prepare("INSERT INTO quartos (numero, preco, capacidade) VALUES (?, ?, ?)");
$stmt->execute([$numero, $preco, $capacidade]);

header("Location: index.php?sucesso=1");
