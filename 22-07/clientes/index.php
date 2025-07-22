<?php include '../db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Clientes</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Cadastro de Clientes</h2>

    <?php if (isset($_GET['sucesso'])): ?>
        <p class="success-message">Cliente cadastrado com sucesso!</p>
    <?php endif; ?>

    <form action="adicionar.php" method="post">
        <label>Nome</label>
        <input type="text" name="nome" placeholder="Nome completo" required>

        <label>CPF</label>
        <input type="text" name="cpf" placeholder="000.000.000-00" required>

        <label>Telefone</label>
        <input type="text" name="telefone" placeholder="(00) 00000-0000" required>

        <button type="submit">Cadastrar Cliente</button>
    </form>

    <h3>Lista de Clientes</h3>
    <ul>
        <?php
        $stmt = $pdo->query("SELECT * FROM clientes");
        while ($row = $stmt->fetch()) {
            echo "<li><span>" .
                 htmlspecialchars($row['nome']) . " - " .
                 htmlspecialchars($row['cpf']) . " - " .
                 htmlspecialchars($row['telefone']) .
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
