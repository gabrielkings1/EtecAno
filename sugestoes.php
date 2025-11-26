<?php
include 'config.php';

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_materia = trim($_POST['nome_materia']);
    $descricao = trim($_POST['descricao']);
    $ano_sugerido = (int)$_POST['ano_sugerido'];
    $usuario_id = $_SESSION['usuario']['id'];

    $sql = "INSERT INTO sugestoes (usuario_id, nome_materia, descricao, ano_sugerido) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    
    if ($stmt->execute([$usuario_id, $nome_materia, $descricao, $semestre_sugerido])) {
        $sucesso = "Sugestão enviada com sucesso! Obrigado pela contribuição.";
    } else {
        $erro = "Erro ao enviar sugestão. Tente novamente.";
    }
}

$sql = "SELECT * FROM sugestoes WHERE usuario_id = ? ORDER BY data_sugestao DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['usuario']['id']]);
$minhas_sugestoes = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugerir Matéria - ADS</title>

</head>
<body>
    <div class="header">
        <h1>Sugerir Nova Matéria</h1>
    </div>
    
    <div class="nav">
        <a href="index.php">Início</a>
        <a href="">Grade Completa - 1 ano</a>
                <a href="">Grade Completa - 2 ano</a>
                        <a href="">Grade Completa - 3 ano</a>
                                <a href="">Grade Completa - 4 ano</a>
                                        <a href="">Grade Completa - 5 ano</a>
        <a href="sugestoes.php">Sugerir Matéria</a>
        <a href="logout.php">Sair</a>
    </div>

    <div class="container">
        <div class="section">
            <h2>Faça sua Sugestão</h2>
            <p>Ajude a melhorar o curso! Sugira novas matérias que gostaria de ver na grade curricular.</p>

            <?php if (isset($sucesso)): ?>
                <div class="mensagem sucesso"><?php echo $sucesso; ?></div>
            <?php endif; ?>

            <?php if (isset($erro)): ?>
                <div class="mensagem erro"><?php echo $erro; ?></div>
            <?php endif; ?>

            <form method="POST" id="sugestaoForm">
                <div class="form-group">
                    <label for="nome_materia">Nome da Matéria:</label>
                    <input type="text" id="nome_materia" name="nome_materia" required maxlength="100">
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição da Matéria:</label>
                    <textarea id="descricao" name="descricao" required placeholder="Descreva o que seria ensinado nesta matéria..."></textarea>
                </div>

                <div class="form-group">
                    <label for="ano_sugerido">Ano Sugerido:</label>
                    <select id="ano_sugerido" name="ano_sugerido" required>
                        <option value="">Selecione o ano de curso...</option>
                        <option value="1">1º ano</option>
                        <option value="2">2º ano</option>
                        <option value="3">3º ano</option>
                        <option value="4">4º ano</option>
                        <option value="5">5º ano</option>
                    </select>
                </div>

                <button type="submit">Enviar Sugestão</button>
            </form>
        </div>

    <script src="js/sugestoes.js"></script>
</body>
</html>