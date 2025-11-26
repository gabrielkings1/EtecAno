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
    <a href="cps.php">Centro Paula Souza</a>
    <a href="login.php">Formulário</a>
  </nav>
 
</header>


  <a id="close-contact-info" class="fas fa-times" href="<?php echo htmlspecialchars($baseUrl); ?>" aria-label="Fechar"></a>

</div>

<main class="grades-page">
  <section class="page-header">
    <h1>Grade Curricular</h1>
  </section>

  <?php
  // PHP-driven grade data to ensure descriptions are generated server-side
  $grades = [
    'ano1' => [
      ['title' => 'Arte', 'hours' => '80 Aulas', 'desc' => 'Disciplina dedicada às artes visuais e expressão criativa; os alunos exploram composição, cor, desenho, pintura e técnicas digitais. Trabalhos práticos e projetos colaborativos desenvolvem senso estético, comunicação visual e a habilidade de transformar ideias em produções artísticas aplicáveis a produtos digitais e portfólios profissionais.'],
      ['title' => 'Biologia', 'hours' => '80 Aulas', 'desc' => 'Aborda os princípios da biologia: células, genética, anatomia e ecologia, relacionando conhecimento biológico a aplicações práticas em saúde, tecnologia e sustentabilidade. A disciplina estimula investigação científica, análise crítica de experimentos e compreensão das implicações ambientais e sociais de avanços biotecnológicos.'],
      ['title' => 'Design Digital', 'hours' => '80 Aulas', 'desc' => 'Introdução ao design digital com foco em usabilidade, composição visual, tipografia e prototipagem. Os alunos aprendem a planejar interfaces, criar protótipos e aplicar critérios de acessibilidade e experiência do usuário para produzir conteúdos digitais eficazes e esteticamente consistentes.'],
      ['title' => 'Filosofia', 'hours' => '80 Aulas', 'desc' => 'Disciplina de reflexão crítica e ética que introduz lógica, teoria do conhecimento e principais correntes filosóficas. Desenvolve a capacidade de argumentação, análise de valores e posicionamento diante de dilemas morais, apoiando decisões éticas em contextos profissionais e pessoais.'],
      ['title' => 'Física', 'hours' => '80 Aulas', 'desc' => 'Fundamentos da física: mecânica, energia, ondas, eletricidade e termodinâmica com ênfase em experimentação. A disciplina reforça raciocínio quantitativo e aplicação de conceitos físicos em problemas de engenharia, eletrônica e tecnologias digitais.'],
      ['title' => 'Fundamentos da Informática', 'hours' => '80 Aulas', 'desc' => 'Apresenta os elementos básicos da computação: hardware, software, sistemas operacionais, e fundamentos de programação e lógica. É uma base para compreender como computadores funcionam e para iniciar atividades práticas em desenvolvimento, administração de sistemas e redes.'],
      ['title' => 'História', 'hours' => '80 Aulas', 'desc' => 'Análise cronológica de processos, eventos e transformações sociais que modelaram o mundo contemporâneo. A disciplina relaciona história, economia e tecnologia, desenvolvendo compreensão crítica sobre como o passado influencia as estruturas sociais, políticas e culturais atuais.'],
      ['title' => 'Língua Inglesa', 'hours' => '80 Aulas', 'desc' => 'Desenvolvimento de habilidades de compreensão oral, conversação, leitura e escrita em inglês com ênfase em vocabulário técnico e profissional. Preparação para leitura de documentação técnica, comunicação em projetos e participação em ambientes multilíngues.'],
      ['title' => 'Língua Portuguesa', 'hours' => '120 Aulas', 'desc' => 'Formação em leitura crítica, produção textual, argumentação e normas cultas da língua portuguesa. A disciplina foca redação técnica, trabalhos acadêmicos e comunicação escrita clara e objetiva — habilidade essencial para documentação e comunicação profissional.'],
      ['title' => 'Matemática', 'hours' => '160 Aulas', 'desc' => 'Conteúdos de álgebra, funções, lógica e introdução ao cálculo com aplicação em modelagem e raciocínio lógico. Importante para entendimento de algoritmos, estruturas de dados e resolução de problemas computacionais com base matemática rigorosa.'],
      ['title' => 'Programação WEB I', 'hours' => '80 Aulas', 'desc' => 'Fundamentos de desenvolvimento web (HTML, CSS e introdução a JavaScript) e prática na construção de páginas e layouts responsivos. Os alunos aprendem estruturar conteúdo, aplicar estilos e considerar acessibilidade e experiência do usuário em projetos reais.'],
      ['title' => 'Química', 'hours' => '80 Aulas', 'desc' => 'Princípios da química geral: estrutura da matéria, reações e propriedades de materiais com foco em aplicações tecnológicas e industriais. A disciplina ajuda a compreender processos, segurança e impactos ambientais na indústria e no desenvolvimento de materiais.'],
      ['title' => 'Técnicas de Programação e Algorítmos', 'hours' => '120 Aulas', 'desc' => 'Desenvolvimento de lógica de programação, estruturas de controle, algoritmos e resolução de problemas por meio de código. A disciplina enfatiza boas práticas, depuração, pensamento algorítmico e preparação para disciplinas avançadas de desenvolvimento.']
    ],
    'ano2' => [
      ['title' => 'Análise e Projeto de Sistemas', 'hours' => '80 Aulas', 'desc' => 'Metodologias para levantamento de requisitos, modelagem e projeto de sistemas. Envolve técnicas de documentação, diagramas (UML), boas práticas de análise e interação com usuários para transformar necessidades em projetos de software viáveis e escaláveis.'],
      ['title' => 'Banco de Dados I', 'hours' => '80 Aulas', 'desc' => 'Introdução à modelagem de dados, esquemas relacionais e linguagem SQL para criação e consulta de bases de dados. A disciplina aborda normalização, projeto físico e práticas para garantir integridade e desempenho de dados em sistemas reais.'],
      ['title' => 'Biologia', 'hours' => '80 Aulas', 'desc' => 'Continuação dos conceitos biológicos com foco em aplicações práticas e implicações tecnológicas. Explora genética, ecologia e saúde pública, conectando conteúdo científico com reflexões sobre sustentabilidade e inovação.'],
      ['title' => 'Desenvolvimento de Sistemas', 'hours' => '120 Aulas', 'desc' => 'Práticas de desenvolvimento de aplicações completas: arquitetura cliente‑servidor, integração front‑end/back‑end e primeiros procedimentos de deploy. Os alunos aprendem colaborar em equipe e aplicar metodologias para entregar software funcional e testado.'],
      ['title' => 'Educação Física', 'hours' => '80 Aulas', 'desc' => 'Atividades físicas e educacionais voltadas para saúde, condicionamento e qualidade de vida, incentivando hábitos que favoreçam rendimento acadêmico e bem-estar pessoal.'],
      ['title' => 'Física', 'hours' => '80 Aulas', 'desc' => 'Aprofundamento em mecanismos físicos e conceitos aplicados a eletrônica e sistemas computacionais. Inclui medições e experimentos que fortalecem habilidades de análise e resolução de problemas técnicos.'],
      ['title' => 'Geografia', 'hours' => '80 Aulas', 'desc' => 'Estudo do espaço geográfico, questões territoriais e transformações socioambientais com foco em planejamento, políticas públicas e sustentabilidade. Os alunos desenvolvem análise crítica sobre recursos naturais e impactos humanos.'],
      ['title' => 'História', 'hours' => '40 Aulas', 'desc' => 'Aprofundamento em eventos históricos, movimentos sociais e transformações econômicas que moldaram o Brasil e o mundo contemporâneo. Disciplinas que incentivam pesquisa, interpretação de fontes e compreensão de contexto social.'],
      ['title' => 'Língua Inglesa', 'hours' => '80 Aulas', 'desc' => 'Fortalecimento de habilidades comunicativas em inglês, com foco em temas técnicos e acadêmicos. Inclui leitura de textos técnicos, conversação e compreensão de recursos online usados no mercado de TI.'],
      ['title' => 'Língua Portuguesa', 'hours' => '80 Aulas', 'desc' => 'Aprimoramento da escrita formal: redação, análise crítica, preparação de relatórios e comunicação técnica. Essencial para elaborar documentação, trabalhos e relatórios de projetos com clareza e coerência.'],
      ['title' => 'Matemática', 'hours' => '80 Aulas', 'desc' => 'Conteúdos de matemática aplicada: funções, equações, progressões e lógica matemática com exercícios práticos voltados para problemas computacionais, modelagem e raciocínio algorítmico.'],
      ['title' => 'Programação de Aplicativos Mobile I', 'hours' => '80 Aulas', 'desc' => 'Introdução ao desenvolvimento de aplicativos móveis: interfaces, ciclo de vida de aplicações e arquitetura básica. Os alunos criam protótipos e aplicativos simples, aprendendo sobre usabilidade e limitações de plataformas móveis.'],
      ['title' => 'Programação Web II', 'hours' => '80 Aulas', 'desc' => 'Aprofundamento em desenvolvimento web incluindo JavaScript avançado, consumo de APIs, frameworks e práticas de modularização. Foco em aplicações dinâmicas, integração com back-end e padrões modernos de desenvolvimento.'],
      ['title' => 'Química', 'hours' => '80 Aulas', 'desc' => 'Estudo continuado da química com ênfase em materiais, reações e aplicações em produtos e processos industriais. Exames de propriedades e seguranças de materiais relevantes para tecnologia e manufatura.'],
      ['title' => 'Sistemas Embarcados', 'hours' => '80 Aulas', 'desc' => 'Introdução ao desenvolvimento de sistemas embarcados: microcontroladores, interfaces e programação de dispositivos. Os alunos aprendem integração hardware–software, sensores e aplicações práticas em automação e prototipagem eletrônica.']
    ],
    'ano3' => [
      ['title' => 'Banco de Dados II', 'hours' => '80 Aulas', 'desc' => 'Avanços na modelagem e otimização de bancos de dados: consultas complexas, tuning, índices e opções NoSQL. A disciplina prepara para projetar bases de dados robustas, garantir integridade, escalabilidade e desempenho em sistemas em produção.'],
      ['title' => 'Educação Física', 'hours' => '80 Aulas', 'desc' => 'Atividades físicas que promovem saúde, coordenação motora e bem-estar, integrando exercícios preventivos e hábitos de vida saudáveis para melhor desempenho acadêmico.'],
      ['title' => 'Ética e Cidadania Organizacional', 'hours' => '40 Aulas', 'desc' => 'Discussão de princípios éticos, responsabilidade social e postura profissional em organizações. Inclui estudo de códigos de conduta, governança e práticas que fomentam ambientes de trabalho respeitosos e comprometidos com a cidadania.'],
      ['title' => 'Geografia', 'hours' => '80 Aulas', 'desc' => 'Análise geográfica de territórios, uso do solo, impacto ambiental e planejamento urbano, com enfoque em desafios contemporâneos relacionados ao desenvolvimento sustentável.'],
      ['title' => 'História', 'hours' => '40 Aulas', 'desc' => 'Visão crítica da história em períodos específicos e suas implicações na sociedade atual. A disciplina apoia a compreensão de estruturas sociais, políticas e culturais, conectando passado e presente para tomadas de decisão informadas.'],
      ['title' => 'Internet Protocolos e Segurança de Sistemas da Informação', 'hours' => '80 Aulas', 'desc' => 'Estudo de redes de computadores, protocolos (como TCP/IP), roteamento e noções essenciais de segurança da informação. A disciplina aborda como proteger sistemas, identificar ameaças e aplicar boas práticas para manter confidencialidade, integridade e disponibilidade de dados.'],
      ['title' => 'Língua Inglesa', 'hours' => '80 Aulas', 'desc' => 'Desenvolvimento de competências em inglês técnico, leitura de documentação e comunicação profissional, preparando o aluno para ambientes de trabalho globais e estudos avançados na área de TI.'],
      ['title' => 'Língua Portuguesa', 'hours' => '160 Aulas', 'desc' => 'Aprofundamento em técnicas de redação, análise textual e argumentação, com ênfase em comunicação técnica e acadêmica, produção de relatórios, artigos e documentação técnica de projetos.'],
      ['title' => 'Matemática', 'hours' => '120 Aulas', 'desc' => 'Matemática aplicada a modelagem de problemas complexos: cálculo, estatística básica e ferramentas para análise quantitativa, úteis para algoritmos, otimização e interpretação de dados.'],
      ['title' => 'Planejamento e Desenvolvimento do TCC', 'hours' => '120 Aulas', 'desc' => 'Organização do Trabalho de Conclusão de Curso: definição de tema, planejamento, metodologia, execução e documentação do projeto final, integrando conhecimentos do curso em um produto ou pesquisa aplicável.'],
      ['title' => 'Programação de Aplicativos Mobile II', 'hours' => '80 Aulas', 'desc' => 'Profundamento em arquiteturas mobile, padrões de projeto, persistência de dados e integrações com serviços back-end. Os alunos aprendem técnicas avançadas de performance, segurança e publicação em lojas de aplicativos.'],
      ['title' => 'Programação Web III', 'hours' => '80 Aulas', 'desc' => 'Desenvolvimento web avançado com foco em arquiteturas escaláveis (REST, microserviços), integração com APIs, segurança e deploy. Os alunos aplicam práticas profissionais para construir aplicações robustas e interconectadas.'],
      ['title' => 'Qualidade e Teste de Software', 'hours' => '80 Aulas', 'desc' => 'Técnicas de qualidade de software: testes manuais e automatizados, integração contínua e métricas de qualidade. Ensina estratégias para garantir confiabilidade, rastreabilidade de defeitos e melhoria contínua em processos de desenvolvimento.'],
      ['title' => 'Sociologia', 'hours' => '80 Aulas', 'desc' => 'Introdução à sociologia aplicada: análise de relações sociais, trabalho coletivo e impacto da tecnologia nas estruturas sociais. A disciplina ajuda a compreender comportamentos organizacionais, comunicação e problemas sociais influenciados por TI.']
    ],
    'ano4' => [
      ['title' => 'Projeto Integrador I', 'hours' => '160 Aulas', 'desc' => 'Projeto integrador prático em que equipes planejam, projetam e implementam soluções de software completas, incluindo levantamento de requisitos, desenvolvimento, teste e entrega. O foco é integrar conhecimentos técnicos e habilidades de gestão para resolver problemas reais e produzir um portfólio profissional.'],
      ['title' => 'Técnicas Avançadas de Banco de Dados Relacional e não Relacional', 'hours' => '80 Aulas', 'desc' => 'Estudo aprofundado em bancos de dados relacionais e não-relacionais: modelagem avançada, tuning, replicação, alta disponibilidade e uso de NoSQL. A disciplina prepara para decisões de projeto de dados em aplicações que exigem escalabilidade e performance.'],
      ['title' => 'Técnicas Avançadas de Programação', 'hours' => '80 Aulas', 'desc' => 'Estudo de paradigmas, padrões de projeto e técnicas avançadas para desenvolver software limpo, seguro e eficiente. Inclui práticas de refatoração, design orientado a testes e conceitos de arquitetura de software para sistemas complexos.'],
      ['title' => 'Técnicas Avançadas de Programação Web e Mobile', 'hours' => '80 Aulas', 'desc' => 'Tópicos avançados em desenvolvimento web e mobile: otimização de performance, padrões de arquitetura, segurança e técnicas de usabilidade focadas em experiências reais de usuários. Os alunos desenvolvem aplicações com qualidade profissional pronta para produção.'],
      ['title' => 'Estrutura de Dados', 'hours' => '160 Aulas', 'desc' => 'Estudo aprofundado de estruturas de dados fundamentais (listas, pilhas, filas, árvores, grafos) e suas aplicações na construção de algoritmos eficientes. A disciplina enfatiza análise de complexidade e escolhas de estruturas adequadas para problemas do mundo real.'],
      ['title' => 'Engenharia de Software', 'hours' => '160 Aulas', 'desc' => 'Metodologias, processos e ferramentas para planejar, projetar, testar e manter software de forma organizada. Inclui fases de ciclo de vida, gestão de requisitos, integração contínua e práticas de DevOps para garantir entregas confiáveis e escaláveis.'],
      ['title' => 'Interação Humano Computador', 'hours' => '80 Aulas', 'desc' => 'Conceitos de design centrado no usuário, usabilidade, prototipagem e testes de interação. A disciplina mostra métodos para entender necessidades dos usuários e projetar interfaces intuitivas que melhorem a experiência e a eficiência de uso.'],
      ['title' => 'Inteligência Corporativa e Modelos de Negócios na Era Digital', 'hours' => '80 Aulas', 'desc' => 'Fundamentos de business intelligence e transformação digital: coleta de dados, análise e visualização para apoiar decisões estratégicas. Os alunos aprendem a construir relatórios, KPIs e interpretar indicadores para otimizar processos de negócio.'],
      ['title' => 'Organização de Computadores e Sistemas Operacionais', 'hours' => '80 Aulas', 'desc' => 'Estudo da arquitetura de computadores, memória, barramentos e princípios de sistemas operacionais. A disciplina fornece base para entender desempenho, gerenciamento de recursos e comunicação entre hardware e software.'],
      ['title' => 'Gestão Ágil de Projetos de Software', 'hours' => '80 Aulas', 'desc' => 'Princípios e práticas ágeis (Scrum, Kanban) para planejar entregas incrementais, gerenciar prioridades e melhorar colaboração de equipes. Inclui métricas, cerimônias e ferramentas para otimizar fluxos de trabalho e comunicação.'],
      ['title' => 'Matemática Discreta', 'hours' => '80 Aulas', 'desc' => 'Matemática discreta: teoria dos grafos, lógica, relações, combinatória e estruturas algébricas. Essencial para modelar problemas computacionais, análise de algoritmos e raciocínio abstrato em ciência da computação.'],
      ['title' => 'Língua Inglesa I', 'hours' => '80 Aulas', 'desc' => 'Inglês técnico aplicado a leitura de documentação, artigos, especificações e comunicação profissional internacional. Foca vocabulário técnico, escrita técnica e compreensão de materiais usados na área de desenvolvimento e TI.']
    ],
    'ano5' => [
      ['title' => 'Projeto Integrador II', 'hours' => '160 Aulas', 'desc' => 'Continuação do projeto integrador com foco na entrega final: refinamento, testes, documentação e apresentação profissional. As equipes consolidam competências técnicas e de gestão ao realizar projetos que simulam demandas reais do mercado e demonstram capacidade de implementação e entrega.'],
      ['title' => 'Programação Multiplataforma', 'hours' => '160 Aulas', 'desc' => 'Desenvolvimento de aplicações multiplataforma com foco em arquitetura, frameworks cross-platform e integração entre ambientes web, mobile e desktop. Ensina técnicas para criar aplicações portáveis, reutilizar código e gerenciar diferenças de interface e desempenho entre plataformas.'],
      ['title' => 'Modelagem de Padrões de Projetos', 'hours' => '160 Aulas', 'desc' => 'Estudo aprofundado de padrões de projeto (GoF e contemporâneos), estratégias de modularização e arquitetura orientada a componentes. Aplica padrões para resolver problemas recorrentes e melhorar manutenibilidade, escalabilidade e testabilidade do software.'],
      ['title' => 'Inteligência Artificial e Aprendizagem de Máquina', 'hours' => '80 Aulas', 'desc' => 'Introdução a inteligência artificial e machine learning: conceitos de modelos, aprendizado supervisionado e não-supervisionado, redes neurais básicas e aplicação a problemas reais com conjuntos de dados. Inclui noções de avaliação de modelos, pre-processamento de dados e ética em IA.'],
      ['title' => 'Computação em Nuvem', 'hours' => '80 Aulas', 'desc' => 'Fundamentos de computação em nuvem: serviços IaaS/PaaS/SaaS, provisionamento, escalabilidade e arquiteturas serverless. A disciplina trata práticas de deploy, monitoramento e segurança em ambientes de nuvem para aplicações modernas.'],
      ['title' => 'Sistemas Distribuidos Aplicados à Internet das Coisas', 'hours' => '80 Aulas', 'desc' => 'Conceitos de sistemas distribuídos, comunicação entre dispositivos e arquiteturas para Internet das Coisas (IoT). Abrange protocolos leves, segurança em borda e casos de uso práticos em sensores, atuadores e coleta de dados em larga escala.'],
      ['title' => 'Integração e Entrega Continua', 'hours' => '80 Aulas', 'desc' => 'Práticas e ferramentas de integração contínua e entrega contínua (CI/CD) para automatizar builds, testes e deploys. Ensina pipelines, automação de testes e infraestrutura como código para tornar entregas seguras e repetíveis.'],
      ['title' => 'Segurança e Defesa Cibernética', 'hours' => '80 Aulas', 'desc' => 'Técnicas e políticas para proteger sistemas contra ataques cibernéticos: análise de vulnerabilidades, criptografia, controles de acesso e mecanismos de defesa. Inclui investigação de incidentes e estratégias de mitigação e recuperação para ambientes corporativos.'],
      ['title' => 'Business Intelligence e Big Data', 'hours' => '80 Aulas', 'desc' => 'Conceitos de Big Data e Business Intelligence: coleta, armazenamento e processamento de grandes volumes de dados, além de técnicas de visualização e análise para apoiar decisões estratégicas. A disciplina aborda pipelines de dados, ferramentas e boas práticas para transformar dados em insights.'],
      ['title' => 'Sistema de Informação e Tecnologias Emergentes', 'hours' => '80 Aulas', 'desc' => 'Estudo de sistemas de informação corporativos, arquiteturas e processos que suportam operações de negócio, além de tecnologias emergentes (blockchain, IoT, edge computing). Explora impacto organizacional, integração de sistemas e inovação digital.'],
      ['title' => 'Estatística Aplicada', 'hours' => '80 Aulas', 'desc' => 'Estatística aplicada: medidas descritivas, probabilidade, testes e técnicas básicas de inferência relevantes para análise de dados e modelagem. Fornece ferramentas essenciais para interpretar resultados e avaliar modelos em projetos computacionais e de pesquisa.'],
      ['title' => 'Língua Inglesa II', 'hours' => '80 Aulas', 'desc' => 'Aprofundamento em inglês técnico e comunicação profissional, com foco em leitura e escrita de documentação, artigos, APIs e intercâmbio com equipes internacionais. Desenvolve fluência para apresentação de projetos e colaboração global.']
    ]
  ];
  ?>

  <section id="ano1" class="grade-detail-section">
    <h2>1º Ano — Análise e Desenvolvimento de Sistemas</h2>
    <p id="grade">Disciplinas e Aulas Previstas:</p>
    <ul>
      <?php foreach ($grades['ano1'] as $item): ?>
        <li data-desc="<?php echo htmlspecialchars($item['desc'], ENT_QUOTES); ?>"><?php echo htmlspecialchars($item['title'] . ' - ' . $item['hours']); ?></li>
      <?php endforeach; ?>
    </ul>
    <a class="btn" href="#top">Voltar ao topo</a>
    </section>

  <section id="ano2" class="grade-detail-section">
    <h2>2º Ano — Análise e Desenvolvimento de Sistemas</h2>
    <p id="grade">Disciplinas e Aulas Previstas</p>
    <ul>
      <?php foreach ($grades['ano2'] as $item): ?>
        <li data-desc="<?php echo htmlspecialchars($item['desc'], ENT_QUOTES); ?>"><?php echo htmlspecialchars($item['title'] . ' - ' . $item['hours']); ?></li>
      <?php endforeach; ?>
    </ul>
    <a class="btn" href="#top">Voltar ao topo</a>
  </section>

  <section id="ano3" class="grade-detail-section">
    <h2>3º Ano — Análise e Desenvolvimento de Sistemas</h2>
    <p id="grade">Disciplinas e Aulas Previstas</p>
    <ul>
      <?php foreach ($grades['ano3'] as $item): ?>
        <li data-desc="<?php echo htmlspecialchars($item['desc'], ENT_QUOTES); ?>"><?php echo htmlspecialchars($item['title'] . ' - ' . $item['hours']); ?></li>
      <?php endforeach; ?>
    </ul>
    <a class="btn" href="#top">Voltar ao topo</a>
  </section>

    <section id="faculdade1" class="grade-detail-section">
    <h2>4º Ano — Análise e Desenvolvimento de Sistemas</h2>
    <p id="grade">Disciplinas e Aulas Previstas</p>
    <ul>
      <?php foreach ($grades['ano4'] as $item): ?>
        <li data-desc="<?php echo htmlspecialchars($item['desc'], ENT_QUOTES); ?>"><?php echo htmlspecialchars($item['title'] . ' - ' . $item['hours']); ?></li>
      <?php endforeach; ?>
    </ul>
    <a class="btn" href="#top">Voltar ao topo</a>
  </section>

  <section id="faculdade2" class="grade-detail-section">
    <h2>5º Ano — Análise e Desenvolvimento de Sistemas</h2>
    <p id="grade">Disciplinas e Aulas Previstas</p>
    <ul>
      <?php foreach ($grades['ano5'] as $item): ?>
        <li data-desc="<?php echo htmlspecialchars($item['desc'], ENT_QUOTES); ?>"><?php echo htmlspecialchars($item['title'] . ' - ' . $item['hours']); ?></li>
      <?php endforeach; ?>
    </ul>
    <a class="btn" href="#top">Voltar ao topo</a>
  </section>

  </main>

  <div id="subject-modal" class="subject-modal" aria-hidden="true">
    <div class="subject-modal-content">
      <button id="subject-modal-close" class="subject-modal-close" aria-label="Fechar">×</button>
      <h3 id="subject-modal-title"></h3>
      <p id="subject-modal-body"></p>
    </div>
  </div>

  <?php
  // Try to compute a safe base path for the script relative to the current PHP file
  $base = dirname($_SERVER['PHP_SELF']);
  if ($base === '/' || $base === '\\') $base = '';
  $scriptPath = $base . '/js/gradeCurricular.js';
  ?>
  <script>console.log('gradeCurricular.php: using script path', '<?php echo $scriptPath; ?>');</script>
  <script src="<?php echo $scriptPath; ?>"></script>
</body>
</html>
