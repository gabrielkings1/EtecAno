<?php 
session_start();
require_once "config.php"; 

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php?erro=nao_logado");
    exit;
}

$mensagem = "";
$tipo_msg = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = trim($_POST['nome_materia'] ?? '');
    $descricao = trim($_POST['descricao'] ?? '');
    $ano = trim($_POST['ano'] ?? '');
    $carga_horaria = trim($_POST['carga_horaria'] ?? '');
    $tipo = trim($_POST['tipo'] ?? '');

    if ($nome === "" || $descricao === "" || $ano === "" || $carga_horaria === "" || $tipo === "") {
        $mensagem = "Por favor, preencha todos os campos!";
        $tipo_msg = "erro";
    } else {

        try {
            $sql = $pdo->prepare("
                INSERT INTO materias (nome, descricao, semestre, carga_horaria, tipo)
                VALUES (?, ?, ?, ?, ?)
            ");

            $semestre = intval($ano);

            $sql->execute([
                $nome,
                $descricao,
                $semestre,
                $carga_horaria,
                $tipo
            ]);

            header("Location: index.php?sucesso=Sugestão cadastrada com sucesso!");
            exit;

        } catch (PDOException $e) {
            $mensagem = "Erro ao salvar sugestão: " . $e->getMessage();
            $tipo_msg = "erro";
        }
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
        <div class="mensagem <?= $tipo_msg ?>">
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
                <option value="1">1º Ano</option>
                <option value="2">2º Ano</option>
                <option value="3">3º Ano</option>
                <option value="4">4º Ano</option>
                <option value="5">5º Ano</option>
            </select>
        </div>

        <div class="form-group">
            <label for="carga_horaria">Carga Horária (em horas)</label>
            <input type="number" id="carga_horaria" name="carga_horaria" min="1">
        </div>

        <div class="form-group">
            <label for="tipo">Tipo da Matéria</label>
            <select name="tipo" id="tipo">
                <option value="">Selecione</option>
                <option value="técnica">Técnica</option>
                <option value="básica">Básica</option>
                <option value="eletiva">Eletiva</option>
            </select>
        </div>

        <button type="submit">Enviar Sugestão</button>

    </form>

</div>

<script>
document.getElementById('sugestaoForm').addEventListener('submit', function(e) {
    const nome = document.getElementById('nome_materia').value.trim();
    const descricao = document.getElementById('descricao').value.trim();
    const ano = document.getElementById('ano').value;
    const carga = document.getElementById('carga_horaria').value;
    const tipo = document.getElementById('tipo').value;

    if (nome === "" || descricao === "" || ano === "" || carga === "" || tipo === "") {
        alert("Por favor, preencha todos os campos!");
        e.preventDefault();
    }
});
</script>

</body>
</html>