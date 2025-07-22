<?php include '../db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Quartos</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Cadastro de Quartos</h2>

    <?php if (isset($_GET['sucesso'])): ?>
        <p class="success-message">Quarto cadastrado com sucesso!</p>
    <?php endif; ?>

    <form action="adicionar.php" method="post">
        <label>Número do Quarto</label>
        <input type="text" name="numero" placeholder="Ex: 101" required>

        <label>Preço</label>
        <input type="text" name="preco" placeholder="Ex: 120.00" required>

        <label>Capacidade</label>
        <input type="number" name="capacidade" placeholder="Ex: 2" required>

        <button type="submit">Cadastrar Quarto</button>
    </form>

    <h3>Lista de Quartos</h3>
    <ul>
        <?php
        $stmt = $pdo->query("SELECT * FROM quartos");
        while ($row = $stmt->fetch()) {
            echo "<li><span>Quarto " .
                 htmlspecialchars($row['numero']) . " - R$ " .
                 htmlspecialchars($row['preco']) . " - Capacidade: " .
                 htmlspecialchars($row['capacidade']) .
                 "</span>
                <form action='deletar.php' method='get' style='display:inline;'>
                    <input type='hidden' name='id' value='{$row['id']}'>
                    <button class='btn-delete' type='submit'>Excluir</button>
                </form>
            </li>";
        }
        ?>
    </ul>
    <a class="back-link" href="../index.php">← Voltar ao menu</a>
</body>
</html>
