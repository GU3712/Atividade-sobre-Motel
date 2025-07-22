<?php include '../db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Clientes</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Clientes</h2>

    <form action="adicionar.php" method="post">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="text" name="cpf" placeholder="CPF" required>
        <input type="text" name="telefone" placeholder="Telefone" required>
        <button type="submit">Adicionar</button>
    </form>

    <h3>Lista de Clientes</h3>
    <ul>
        <?php
        $stmt = $pdo->query("SELECT * FROM clientes");
        while ($row = $stmt->fetch()) {
            echo "<li>{$row['nome']} - {$row['cpf']} - {$row['telefone']}
            <a href='deletar.php?id={$row['id']}'>Excluir</a></li>";
        }
        ?>
    </ul>
    <a href="../index.php">Voltar</a>
</body>
</html>
