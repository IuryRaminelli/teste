<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/leitor.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/EstiloIury.css">
    <title>Document</title>
</head>
<body>
    <?php
        include_once 'vlibras.php';
    ?>


    <section class="section-inicio">
        <header class="header-inicio">
            <nav class="navbar bg-body-tertiary fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="index.php"><img src="img/logoo-ads.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top"></a>


                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                   
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <a class="navbar-brand" href="index.php"><img src="img/logoo-ads.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top"></a>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Interface Gráfica</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Normas e Padrões</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Computador</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </section>


    <div class="container">


        <br><br><br><br>
       
        <div class="row mb-4">
            <div class="col-md-12 p-4 border rounded bg-light shadow-sm d-flex align-items-center justify-content-between flex-column">
                <div class="d-flex justify-content-between w-100">
                    <div>
                        <h2 id="titulo1">Inclusão digital pela interface gráfica</h2>
                        <p id="noticia1">
                            A inclusão digital pela interface gráfica envolve tornar a tecnologia
                            acessível e utilizável para pessoas com diferentes níveis de habilidade, especialmente
                            aquelas com pouca experiência digital. Interfaces gráficas intuitivas e visualmente amigáveis
                            facilitam o uso de dispositivos e sistemas, promovendo o acesso à informação e a serviços essenciais,
                            como educação, saúde e mercado de trabalho. Para aumentar a inclusão digital, essas interfaces devem
                            priorizar a simplicidade, o uso de ícones compreensíveis, textos claros e funções que auxiliem usuários
                            com limitações visuais, motoras ou cognitivas. Isso democratiza o acesso e reduz a exclusão digital,
                            promovendo uma sociedade mais conectada e inclusiva.</p>
                    </div>
                    <button type="submit" class="btn-audio btn-fixo" name="acao" onclick="lerNoticia('titulo1', 'noticia1')">
                        <img src="img/som.png" width="28" height="28" alt="">
                    </button>
                </div>
                <a href="teste.php" class="align-self-start mt-3">
                    <button type="submit" class="btn btn-primary" name="mais" href="paginainclusao.php">
                        Ver mais
                    </button>
                </a>
            </div>
        </div>
       
        <br>


        <div class="row mb-4">
            <div class="col-md-12 p-4 border rounded bg-light shadow-sm d-flex align-items-center justify-content-between flex-column">
                <div class="d-flex justify-content-between w-100">
                    <div>
                        <h2 id="titulo2">Normas e Padrões Internacionais sobre Acessibilidade</h2>
                        <p id="noticia2">
                            As normas e padrões internacionais sobre acessibilidade têm o objetivo de garantir
                            que produtos, serviços e conteúdos digitais sejam acessíveis a todas as pessoas,
                            independentemente de suas limitações físicas, sensoriais ou cognitivas. Entre os principais
                            padrões estão as Web Content Accessibility Guidelines (WCAG), desenvolvidas pelo World Wide Web
                            Consortium (W3C), que oferecem orientações sobre como tornar o conteúdo web acessível para pessoas
                            com deficiência visual, auditiva e motora.</p>
                        <p id="noticia2">
                            Outras normas importantes incluem a Section 508 dos EUA, que exige que todas as tecnologias digitais
                            usadas pelo governo federal sejam acessíveis, e a norma ISO 9241, que define requisitos de ergonomia na
                            interação homem-computador, incluindo acessibilidade. Esses padrões ajudam a guiar o desenvolvimento de interfaces
                            e sistemas, promovendo a inclusão digital e garantindo que todos possam acessar e interagir com a tecnologia de forma
                            igualitária e independente.</p>
                    </div>
                <br>
                <button type="submit" class="btn-audio btn-fixo" name="acao" onclick="lerNoticia('titulo2', 'noticia2')">
                    <img src="img/som.png" width="28" height="28" alt="">
                </button>
                </div>
                <a href="teste.php" class="align-self-start mt-3">
                    <button type="submit" class="btn btn-primary" name="mais">
                        Ver mais
                    </button>
                </a>
            </div>
        </div>


        <br>


        <div class="row mb-4">
            <div class="col-md-12 p-4 border rounded bg-light shadow-sm d-flex align-items-center justify-content-between flex-column">
                <div class="d-flex justify-content-between w-100">
                    <div>
                        <h2 id="titulo3">Informações sobre computador</h2>
                        <p id="noticia3">
                            Computadores são máquinas eletrônicas programáveis que processam dados para realizar uma ampla variedade de tarefas.
                            Eles são compostos por hardware e software. O hardware inclui componentes físicos, como a CPU (unidade central de processamento),
                            que é o "cérebro" do computador responsável pelo processamento das instruções, a memória RAM, que armazena dados temporariamente,
                            e dispositivos de armazenamento como HDs e SSDs, que guardam dados de forma permanente. Outros componentes de hardware incluem o monitor,
                            teclado, mouse e placas de vídeo e som.</p>
                        <p id="noticia3">
                            O software é o conjunto de programas e sistemas operacionais que permitem ao computador executar funções específicas,
                            como sistemas operacionais (Windows, macOS, Linux) e aplicativos (navegadores, editores de texto, jogos). Computadores são
                            classificados em várias categorias, desde desktops e laptops até servidores e supercomputadores, cada um com capacidades e
                            finalidades diferentes. A conexão à internet e o uso de redes permitem que computadores compartilhem dados e recursos,
                            ampliando ainda mais suas aplicações no cotidiano, nas empresas, na ciência e na educação.</p>
                    </div>
                <br>
                    <button type="submit" class="btn-audio btn-fixo" name="acao" onclick="lerNoticia('titulo3', 'noticia3')">
                        <img src="img/som.png" width="28" height="28" alt="">
                    </button>
                </div>
                <a href="infopc.php" class="align-self-start mt-3">
                    <button type="submit" class="btn btn-primary" name="mais">
                        Ver mais
                    </button>
                </a>
            </div>
        </div>


        <br>


        <footer class="pt-5 my-5 text-body-secondary border-top">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="nav col-md-3 justify-content-start">
                    Todos os direitos reservados. &copy; 2024
                </div>


                <div class="col-md-3 text-center mx-auto footer-logo">
                    <a href="https://sig.iffarroupilha.edu.br/sigaa/public/curso/portal.jsf?id=76320&lc=pt_BR">
                        <img src="img/logoo-ads.png" alt="Logo ADS" width="120" height="120">
                    </a>
                    <a href="https://www.iffarroupilha.edu.br/sao-vicente-do-sul">
                        <img src="img/logo-iffar-svs.png" alt="Logo IFFar" width="100" height="120">
                    </a>
                </div>


                <div class="nav col-md-3 justify-content-end">
                    Feito por Iury Raminelli.
                </div>
            </div>
        </footer>
    </div>
</body>
</html>