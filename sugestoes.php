<?php
// PROCESSAMENTO DO FORMULÁRIO
$mensagem = "";
$tipo = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = trim($_POST['nome_materia'] ?? '');
    $descricao = trim($_POST['descricao'] ?? '');
    $ano = trim($_POST['ano_sugerido'] ?? '');

    if ($nome === "" || $descricao === "" || $ano === "") {
        $mensagem = "Por favor, preencha todos os campos!";
        $tipo = "erro";
    } else {
        // Aqui você pode inserir no BD se quiser
        // ...

        // Depois de registrar, redireciona para o index
        header("Location: index.php?sucesso=Sugestão enviada!");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Manual do Programador Etecano</title>
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
    <label for="ano">Ano:</label>
    <select name="ano" id="ano" required>
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
document.getElementById('sugestaoForm').addEventListener('submit', function(e) {
    const nome = document.getElementById('nome_materia').value.trim();
    const descricao = document.getElementById('descricao').value.trim();
    const ano = document.getElementById('ano_sugerido').value;

    if (nome === "" || descricao === "" || ano === "") {
        alert("Por favor, preencha todos os campos!");
        e.preventDefault();
    }
});
</script>

</body>
</html>
