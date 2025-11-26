<?php
session_start();

// Verifica login usando o MESMO nome de sessão do login.php
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php?erro=nao_logado");
    exit;
}

$mensagem = "";
$tipo = "";

// Se enviou o formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = trim($_POST['nome_materia'] ?? '');
    $descricao = trim($_POST['descricao'] ?? '');
    $ano = trim($_POST['ano'] ?? '');

    if ($nome === "" || $descricao === "" || $ano === "") {
        $mensagem = "Por favor, preencha todos os campos!";
        $tipo = "erro";
    } else {
        // aqui você salvaria no banco se quiser (agora somente redireciona)
        header("Location: index.php?sucesso=Sugestão enviada!");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sugestão de Matéria - Manual do Programador Etecano</title>
    <link rel="stylesheet" href="css/sugestoes.css">
</head>
<body>

<div class="container">

    <h2 class="titulo">Sugestão de Disciplina</h2>

    <?php if (!empty($mensagem)): ?>
        <div class="mensagem <?= $tipo ?>">
            <?= htmlspecialchars($mensagem) ?>
        </div>
    <?php endif; ?>

    <form action="" method="POST" id="sugestaoForm">

        <div class="form-group">
            <label for="nome_materia">Nome da Matéria</label>
            <input type="text" id="nome_materia" name="nome_materia">
        </div>

        <div class="form-group">
            <label for="descricao">Descrição da Matéria</label>
            <textarea id="descricao" name="descricao"></textarea>
        </div>

        <div class="form-group">
            <label for="ano">Ano</label>
            <select name="ano" id="ano">
                <option value="">Selecione</option>
                <option value="1º Ano">1º Ano</option>
                <option value="2º Ano">2º Ano</option>
                <option value="3º Ano">3º Ano</option>
                <option value="4º Ano">4º Ano</option>
                <option value="5º Ano">5º Ano</option>
            </select>
        </div>

        <button type="submit">Enviar Sugestão</button>

    </form>

</div>

<script>
// Validação simples
document.getElementById('sugestaoForm').addEventListener('submit', function(e) {
    const nome = document.getElementById('nome_materia').value.trim();
    const descricao = document.getElementById('descricao').value.trim();
    const ano = document.getElementById('ano').value;

    if (nome === "" || descricao === "" || ano === "") {
        alert("Por favor, preencha todos os campos!");
        e.preventDefault();
    }
});
</script>

</body>
</html>
