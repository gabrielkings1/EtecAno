<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';

    if ($nome === '' || $email === '' || $senha === '') {
        $erro = 'Preencha todos os campos corretamente.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro = 'E-mail inválido.';
    } elseif (strlen($senha) < 6) {
        $erro = 'Senha muito curta. Use pelo menos 6 caracteres.';
    } else {
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);

        if ($stmt->execute([$nome, $email, $senha_hash])) {
           header("Location: login.php?cadastro=sucesso");
            exit();
        } else {
            $erro = "Erro ao cadastrar. O e-mail pode já estar em uso.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro - ADS</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="form-container">
        <h2>Cadastro</h2>
        <?php if (isset($erro)) echo "<div class=\"erro\">$erro</div>"; ?>
        
        <form method="POST" onsubmit="return validarFormulario()">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Senha:</label>
                <input type="password" name="senha" required minlength="6">
            </div>
            <button type="submit">Cadastrar</button>
        </form>
        
        <p><a href="login.php">Já tem conta? Faça login</a></p>
    </div>

    <script src="js/cadastro.js"></script>
</body>
</html>