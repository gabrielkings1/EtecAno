<?php
session_start();
require_once "config.php";

$erro = "";
$sucesso = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST['email'] ?? "");
    $senha = trim($_POST['senha'] ?? "");

    if ($email === "" || $senha === "") {
        $erro = "Preencha todos os campos!";
    } else {

        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
        $sql->execute([$email]);
        $usuario = $sql->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {

            if (password_verify($senha, $usuario['senha'])) {

                // CORRIGIDO — SESSION COMPATÍVEL COM sugestoes.php
                $_SESSION['usuario'] = [
                    'id' => $usuario['id'],
                    'nome' => $usuario['nome'],
                    'email' => $usuario['email']
                ];

                header("Location: sugestoes.php");
                exit;

            } else {
                $erro = "Senha incorreta.";
            }

        } else {
            $erro = "E-mail não encontrado.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Manual do Programador Etecano</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

<div class="form-container">

    <h2>Login</h2>

    <?php if ($sucesso): ?>
        <div class="sucesso"><?= $sucesso ?></div>
    <?php endif; ?>

    <?php if ($erro): ?>
        <div class="erro"><?= $erro ?></div>
    <?php endif; ?>

    <form id="loginForm" action="" method="POST">

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail">
        </div>

        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
        </div>

        <button type="submit">Entrar</button>

        <div class="links">
            Não possui cadastro? <a href="cadastro.php">Criar conta</a>
        </div>
    </form>

</div>

<script src="login.js"></script>

</body>
</html>
