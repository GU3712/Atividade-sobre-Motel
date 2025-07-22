<?php
include '../db.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $stmt = $pdo->prepare("DELETE FROM quartos WHERE id = ?");
    $stmt->execute([$id]);
}

header("Location: index.php");
