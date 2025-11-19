<?php
session_start();
require "conexao.php";

$msg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = strtolower(trim($_POST["email"]));
    $pass = $_POST["pass"];

    $sql = $conn->query("SELECT * FROM users WHERE email='$email'");

    if($sql->num_rows === 0){
        $msg = "<p class='error'>Conta não existe. Crie uma abaixo.</p>";
    } else {
        $user = $sql->fetch_assoc();
        if(password_verify($pass, $user["password"])){
            $_SESSION["user"] = $user;
            header("Location: index.php");
            exit;
        } else {
            $msg = "<p class='error'>Senha incorreta.</p>";
        }
    }
}
?>

<link rel="stylesheet" href="css/auth.css">

<div class="auth-box">
  <h2>Entrar</h2>
  <?= $msg ?>

  <form method="POST">
      <input type="email" name="email" class="input" placeholder="Email">
      <input type="password" name="pass" class="input" placeholder="Senha">
      <button class="btn">Entrar</button>
  </form>

  <div class="link">
    Não tem conta? <a href="register.php">Criar conta</a>
  </div>
</div>
