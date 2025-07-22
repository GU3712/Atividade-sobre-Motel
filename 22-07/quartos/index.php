<?php include '../db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Quartos</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Quartos</h2>

    <form action="adicionar.php" method="post">
        <input type="text" name="numero" placeholder="Número do Quarto" required>
        <input type="text" name="preco" placeholder="Preço" required>
        <input type="number" name="capacidade" placeholder="Capacidade" required>
        <button type="submit">Adicionar</button>
    </form>

    <h3>Lista de Quartos</h3>
    <ul>
        <?php
        $stmt = $pdo->query("SELECT * FROM quartos");
        while ($row = $stmt->fetch()) {
            echo "<li>Quarto {$row['numero']} - R$ {$row['preco']} - Capacidade: {$row['capacidade']}
            <a href='deletar.php?id={$row['id']}'>Excluir</a></li>";
        }
        ?>
    </ul>
    <a href="../index.php">Voltar</a>
</body>
</html>
