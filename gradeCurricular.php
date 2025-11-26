<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/gradeCurricular.css">
  <title>Manual do Programador Etecano</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<header class="header">
  <a href="index.php" class="logo">Etec<span>Ano</span></a>

  <nav class="navbar">
    <a href="index.php">Inicio</a>
    <a href="#centroPaulaSouza">Centro Paula Souza</a>
    <a href="#fatec">Fatec</a>
    <a href="login.php">Formulário</a>
  </nav>

  <div class="icons">
    <div id="menu-btn" class="fas fa-bars"></div>
    <div id="info-btn" class="fas fa-info-circle"></div>
    <div id="pesquisar-btn" class="fas fa-search"></div>
  </div>
  
  <form action="" class="search-form">
    <input type="search" name="" id="search-box" placeholder="Pesquisar...">
    <label for="pesquisar-box" class="fas fa-search"></label>
  </form>

 <!--login-->
 <form action="" class="login-form">
   <h3>Login</h3>
   <input type="email" placeholder="Insira seu email" class="box">
   <input type="password" placeholder="Insira sua senha" class="box">
   <div class="flex">
   <input type="checkbox" name="checkbox" id="checkbox">
   <label for="lembrar-me">Lembrar-me</label>
   <a href="#">Esqueceu sua senha?</a>
   </div>

   <input type="submit" value="login" class="btn" id="login">
   <p>Não possui uma conta<a href="#"> Crie uma!</a></p>

 </form>
 <!--login fim-->
</header>

<div class="contact-info">

<div id="close-contact-info" class="fas fa-times"></div>
  
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
  <a href="https://www.facebook.com/etecourinhos/?locale=pt_BR" class="Fab fa-facebook-f"></a>
  <a href="https://www.youtube.com/channel/UCnLlxUyzUV11TGCLFFiMrSA" class="Fab fa-youtube"></a>
  <a href="https://www.instagram.com/etecourinhos/?hl=en" class="Fab fa-instagram"></a>
</div>

</div>

<main class="grades-page">
  <section class="page-header">
    <h1>Grade Curricular</h1>
  </section>

  <section id="ano1" class="grade-detail-section">
    <h2>1º Ano — Análise e Desenvolvimento de Sistemas</h2>
    <p id="grade">Disciplinas e Aulas Previstas:</p>
    <ul>
      <li>Arte - 80 Aulas</li>
      <li>Biologia - 80 Aulas</li>
      <li>Design Digital - 80 Aulas</li>
      <li>Filosofia - 80 Aulas</li>
      <li>Física - 80 Aulas</li>
      <li>Fundamentos da Informática - 80 Aulas</li>
      <li>História - 80 Aulas</li>
      <li>Língua Inglesa - 80 Aulas</li>
      <li>Língua Portuguesa - 120 Aulas</li>
      <li>Matemática - 160 Aulas</li>
      <li>Programação WEB I - 80 Aulas</li>
      <li>Química - 80 Aulas</li>
      <li>Técnicas de Programação e Algorítmos - 120 Aulas</li>
    </ul>
    <a class="btn" href="#top">Voltar ao topo</a>
  </section>

  <section id="ano2" class="grade-detail-section">
    <h2>2º Ano — Análise e Desenvolvimento de Sistemas</h2>
    <p id="grade">Disciplinas e Aulas Previstas</p>
    <ul>
      <li>Análise e Projeto de Sistemas - 80 Aulas</li>
      <li>Banco de Dados I- 80 Aulas</li>
      <li>Biologia - 80 Aulas</li>
      <li>Desenvolvimento de Sistemas - 120 Aulas</li>
      <li>Educação Física - 80 Aulas</li>
      <li>Física - 80 Aulas</li>
      <li>Geografia - 80 Aulas</li>
      <li>História - 40 Aulas</li>
      <li>Língua Inglesa - 80 Aulas</li>
      <li>Língua Portuguesa - 80 Aulas</li>
      <li>Matemática - 80 Aulas</li>
      <li>Programação de Aplicativos Mobile I - 80 Aulas</li>
      <li>Programação Web II - 80 Aulas</li>
      <li>Química - 80 Aulas</li>
      <li>Sistemas Embarcados - 80 Aulas</li>
    </ul>
    <a class="btn" href="#top">Voltar ao topo</a>
  </section>

  <section id="ano3" class="grade-detail-section">
    <h2>3º Ano — Análise e Desenvolvimento de Sistemas</h2>
    <p id="grade">Disciplinas e Aulas Previstas</p>
    <ul>
      <li>Banco de Dados II - 80 Aulas</li>
      <li>Educação Física - 80 Aulas</li>
      <li>Ética e Cidadania Organizacional - 40 Aulas</li>
      <li>Geografia - 80 Aulas</li>
      <li>História - 40 Aulas</li>
      <li>Internet Protocolos e Segurança de Sistemas da Informação - 80 Aulas</li>
      <li>Língua Inglesa - 80 Aulas</li>
      <li>Língua Portuguesa - 160 Aulas</li>
      <li>Matemática - 120 Aulas</li>
      <li>Planejamento e Desenvolvimnto do Trabalho de Conclusão de Curso em Desenvolvimento de Sistemas - 120 Aulas</li>
      <li>Programação de Aplicativos Mobile II - 80 Aulas</li>
      <li>Programação Web III - 80 Aulas</li>
      <li>Qualidade e Teste de Software - 80 Aulas</li>
      <li>Sociologia - 80 Aulas</li>
    </ul>
    <a class="btn" href="#top">Voltar ao topo</a>
  </section>

    <section id="faculdade1" class="grade-detail-section">
    <h2>4º Ano — Análise e Desenvolvimento de Sistemas</h2>
    <p id="grade">Disciplinas e Aulas Previstas</p>
    <ul>
      <li>Projeto Integrador I - 160 Aulas</li>
      <li>Técnicas Avançadas de Banco de Dados Relacional e não Relacional - 80 Aulas</li>
      <li>Técnicas Avançadas de Programação - 80 Aulas</li>
      <li>Técnicas Avançadas de Programação Web e Mobile - 80 Aulas</li>
      <li>Estrutura de Dados - 160 Aulas</li>
      <li>Engenharia de Software - 160 Aulas</li>
      <li>Interação Humano Computador - 80 Aulas</li>
      <li>Inteligência Corporativa e Modelos de Negócios na Era Digital - 80 Aulas</li>
      <li>Organização de Computadores e Sistemas Operacionais - 80 Aulas</li>
      <li>Gestão Ágil de Projetos de Software - 80 Aulas</li>
      <li>Matemática Discreta - 80 Aulas</li>
      <li>Língua Inglesa I - 80 Aulas</li>
    </ul>
    <a class="btn" href="#top">Voltar ao topo</a>
  </section>

  <section id="faculdade2" class="grade-detail-section">
    <h2>5º Ano — Análise e Desenvolvimento de Sistemas</h2>
    <p id="grade">Disciplinas e Aulas Previstas</p>
    <ul>
      <li>Projeto Integrador II - 160 Aulas</li>
      <li>Programação Multiplataforma - 160 Aulas</li>
      <li>Modelagem de Padrões de Projetos - 160 Aulas</li>
      <li>Inteligência Artificial e Aprendizagem de Máquina - 80 Aulas</li>
      <li>Computação em Nuvem - 80 Aulas</li>
      <li>Sistemas Distribuidos Aplicados à Internet das Coisas - 80 Aulas</li>
      <li>Integração e Entrega Continua - 80 Aulas</li>
      <li>Segurança e Defesa Cibernética - 80 Aulas</li>
      <li>Business Intelligence e Big Data - 80 Aulas</li>
      <li>Sistema de Informação e Tecnologias Emergentes - 80 Aulas</li>
      <li>Estatística Aplicada - 80 Aulas</li>
      <li>Língua Inglesa II - 80 Aulas</li>
    </ul>
    <a class="btn" href="#top">Voltar ao topo</a>
  </section>

</main>

<script src="js/etecano.js"></script>
</body>
</html>
