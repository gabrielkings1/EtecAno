<?php
session_start();
require "php/db.php";

$msg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"]);
    $email = strtolower(trim($_POST["email"]));
    $pass = $_POST["pass"];

    if(!$name || !$email || !$pass){
        $msg = "<p class='error'>Preencha todos os campos.</p>";
    } else {
        // verifica se email já existe
        $check = $conn->query("SELECT * FROM users WHERE email='$email'");
        if($check->num_rows > 0){
            $msg = "<p class='error'>Email já cadastrado.</p>";
        } else {
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $conn->query("INSERT INTO users(name, email, password) VALUES('$name', '$email', '$hash')");
            $msg = "<p class='success'>Conta criada! Faça login.</p>";
        }
    }
}
?>

<link rel="stylesheet" href="css/index.css">

<div class="auth-box">
  <h2>Criar Conta</h2>
  <?= $msg ?>

  <form method="POST">
      <input type="text" name="name" class="input" placeholder="Nome completo">
      <input type="email" name="email" class="input" placeholder="Email">
      <input type="password" name="pass" class="input" placeholder="Senha">
      <button class="btn">Cadastrar</button>
  </form>

  <div class="link">
    Já tem uma conta? <a href="login.php">Faça login</a>
  </div>
</div>
