<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <title>Manual do Programador Etecano</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<header class="header">
  <a href="#" class="logo">Etec<span>Ano</span></a>

  <!-- navbar dentro do header para alinhar com flex -->
  <nav class="navbar">
    <a href="gradeCurricular.php">Grade Curricular</a>
    <a href="#centroPaulaSouza">Centro Paula Souza</a>
    <a href="#fatec">Fatec</a>
    <a href="login.php">Formulário</a>
  </nav>

  <!-- icons dentro do header; cada ícone é um elemento independente -->
  <div class="icons">
    <div id="menu-btn" class="fas fa-bars"></div>
    <a id="info-btn" class="fas fa-info-circle" href="<?php echo $_SERVER['PHP_SELF']; ?>?contact=1" role="button"></a>
    <div id="pesquisar-btn" class="fas fa-search"></div>
    <div id="login-btn" class="fas fa-user"></div>
  </div>

  <form action="" class="search-form">
    <input type="search" name="" id="search-box" placeholder="Pesquisar...">
    <label for="pesquisar-box" class="fas fa-search"></label>
  </form>

 <!--login -->
 <?php include __DIR__ . '/includes/login_form.php'; ?>
 <!--login fim -->

</header>

<?php
  // Server-side rendering of contact-info on this page (no include)
  $show_contact = isset($_GET['contact']) && ($_GET['contact'] === '1' || $_GET['contact'] === 'true');
  $baseUrl = strtok($_SERVER['REQUEST_URI'], '?');
?>
<div class="contact-info <?php echo $show_contact ? 'active' : ''; ?>">

  <a id="close-contact-info" class="fas fa-times" href="<?php echo htmlspecialchars($baseUrl); ?>" aria-label="Fechar"></a>

  <div class="info">
    <i class="fas fa-phone"></i>
    <h3>número de telefone</h3>
    <p>+14 3322-4908</p>
  </div>

  <div class="info">
    <i class="fas fa-envelope"></i>
    <h3>endereço de email</h3>
    <p>E066acad@cps.sp.gov.br</p>
  </div>

  <div class="info">
    <i class="fas fa-map-marker-alt"></i>
    <h3>Localização da Sede</h3>
    <p>Ourinhos SP, Brasil</p>
  </div>

  <div class="share">
    <a href="https://www.facebook.com/etecourinhos/?locale=pt_BR" class="Fab fa-facebook-f" aria-label="Facebook"></a>
    <a href="https://www.youtube.com/channel/UCnLlxUyzUV11TGCLFFiMrSA" class="Fab fa-youtube" aria-label="YouTube"></a>
    <a href="https://www.instagram.com/etecourinhos/?hl=en" class="Fab fa-instagram" aria-label="Instagram"></a>
  </div>

</div>

<h1>Bem-vindo ao ADS-AMS: sua porta de entrada para o mundo da tecnologia</h1>


<p id="textoEtec">O programa ADS-AMS é uma das formações mais completas oferecidas pela Etec: um percurso integrado que combina Ensino Médio, Curso Técnico em Desenvolvimento de Sistemas e Curso Superior em Análise e Desenvolvimento de Sistemas (ADS) da Fatec.
Aqui, você aprende programação desde cedo, desenvolve projetos reais, participa de atividades práticas e constrói uma base sólida para entrar no mercado de trabalho ou seguir para carreiras mais avançadas na área de TI.</p><br><br><br>

<h2 id="por-que-curso">Por que este curso é diferente?</h2>

  <p id="textoEtec2">-Você começa a aprender tecnologia já no ensino médio</p>

  <p id="textoEtec2">-Conclui técnico e superior de forma contínua</p>
  
  <p id="textoEtec2">-Desenvolve projetos práticos e ganha experiência real</p>
  
  <p id="textoEtec2">-Abre portas para uma das áreas que mais cresce no Brasil</p>
  
  <p id="textoEtec2">-Constrói seu portfólio desde o primeiro ano!</p><br><br><br>

<section id="curso-ads" class="curso-section">
  <h2>Sobre o Curso: Análise e Desenvolvimento de Sistemas (ADS)</h2>
  <p>O curso de Análise e Desenvolvimento de Sistemas (ADS) forma profissionais capazes de projetar, implementar, testar e manter sistemas de software. O foco é prático e orientado a projetos, com disciplinas que abrangem lógica de programação, estruturas de dados, banco de dados, engenharia de software, redes, interfaces e metodologias ágeis.</p><br><br><br>

  <h3>Como funciona o curso</h3>
  <p>O curso combina aulas teóricas, atividades práticas e projetos integradores. Os alunos trabalham em equipes para desenvolver sistemas reais, utilizam ferramentas e linguagens modernas e participam de atividades que simulam demandas do mercado. Há ainda atividades complementares como palestras, oficinas e estágios supervisionados.</p><br><br><br>

  <h3>Etapas do curso</h3>
  <ul>
    <li><strong>Fundamentos:</strong> introdução à matemática aplicada, lógica e conceitos básicos de computação.</li>
    <li><strong>Formação técnica:</strong> programação, banco de dados, estruturas de dados, testes e segurança.</li>
    <li><strong>Projetos integradores:</strong> desenvolvimento de sistemas do início ao fim em equipes multidisciplinares.</li>
    <li><strong>Estágio e inserção profissional:</strong> prática em empresas e preparação para o mercado de trabalho.</li>
  </ul><br><br><br>

  <h3>Por que escolher este curso?</h3>
  <p>Escolher ADS é optar por uma carreira com alta demanda no mercado de trabalho, excelente potencial de crescimento profissional e oportunidades em diversas áreas — desde desenvolvimento web e mobile até data science e arquitetura de software. É uma ótima escolha para quem gosta de aprender resolvendo problemas reais e construir soluções digitais úteis.</p><br><br><br>

  <h3>Motivos para escolher</h3>
  <ul>
    <li>Alta empregabilidade e demanda constante por desenvolvedores e analistas.</li>
    <li>Possibilidade de trabalhar em startups, grandes empresas ou como freelancer/empreendedor.</li>
    <li>Atualização constante: o curso prepara você para aprender novas tecnologias ao longo da carreira.</li>
    <li>Integração prática e teórica que facilita a montagem de um portfólio profissional.</li>
  </ul><br><br><br>

  <h3>Benefícios do curso</h3>
  <ul>
    <li>Formação voltada à prática com projetos reais para seu portfólio.</li>
    <li>Networking com colegas, professores e empresas parceiras.</li>
    <li>Possibilidade de estágios, contratos e oportunidades de carreira desde cedo.</li>
    <li>Base sólida para continuar os estudos (pós-graduação, especializações e carreira acadêmica).</li>
  </ul><br><br><br>

  <h3>Sobre o Vestibulinho da ETEC</h3>
  <p>O Vestibulinho é o processo seletivo da ETEC. As etapas e datas mudam a cada chamada — normalmente há inscrições on-line, prova objetiva e, em alguns cursos, análise de requisitos específicos. Para concorrer às vagas você deve acompanhar os editais publicados pelo Centro Paula Souza, se inscrever no período indicado, e apresentar a documentação solicitada no momento da matrícula (RG, CPF, comprovante de escolaridade, entre outros).

  <p>Dicas para se preparar: estude conteúdos de língua portuguesa, matemática e raciocínio lógico; faça simulados de provas anteriores; cuide dos prazos de inscrição e mantenha a documentação pronta. Mais informações e as datas de inscrição estão disponíveis no site oficial do Centro Paula Souza e nas páginas da ETEC.</p>

</section>

<section class="created-section">
  <h2>Quando foi Criado?</h2>
  <div class="created-content">
    <img src="imagens/Programação.jpg" alt="Curso - DS" onerror="this.style.display='none'">
    <div class="created-text">
      <h4>29 de Dezembro de 2008</h4>
      <p class="muted">Fundado pela Lei 11.892</p>
    </div>
  </div>
</section>

<script src="js/etecano.js"></script>
</body>
</html>