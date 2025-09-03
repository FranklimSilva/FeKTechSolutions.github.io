<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>F&K Tech Solutions </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="src/assets/img/logo_fek.jpg" />
    <!-- Font Awesome icons (free version)-->
    <script src="../src/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="../src/assets/img/logo_fek1.png" ></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Serviços</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfólio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Equipe</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contato</a></li>
                    </ul>
                </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <!-- <div class="masthead-subheading">Bem-vindo a F & K TECH </div>
            <div class="masthead-heading text-uppercase">É um prazer lhe conhecer.</div> -->
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Veja mais sobre ▽</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Serviços</h2>
                <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
            </div>
            <div class="row text-center">
                <div class="col-md-4 fade-in-element">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">E-Commerce</h4>
                    <p class="text-muted">Um e-commerce que funciona 24 horas por dia, 7 dias por semana, permite que sua loja esteja sempre aberta, alcançando clientes em qualquer lugar do mundo.</p>
                </div>
                <div class="col-md-4 fade-in-element">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Design Responsivo</h4>
                    <p class="text-muted">É seu site com adaptação automatica de seu layout e conteúdo para se ajustando a diferentes tamanhos de tela e dispositivos.</p>
                </div>
                <div class="col-md-4 fade-in-element">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Máxima Segurança</h4>
                    <p class="text-muted">A segurança do seu site envolve práticas e tecnologias que protegem contra ameaças cibernéticas, como o uso de HTTPS para criptografar dados, a implementação de certificados SSL/TLS.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Portfólio</h2>
                <h3 class="section-subheading text-muted">Alguns de nossos trabalhos.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4 fade-in-element">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="../src/assets/img/logos/arl_logo.png" alt="arl_logo" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">ARL LIMA TRANSPORTES</div>
                            <div class="portfolio-caption-subheading text-muted">SITE INSTITUCIONAL/ WEBAPP</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 fade-in-element">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="../src/assets/img/portfolio/mbs_log.jpg" alt="..." height="50px"/>
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">MBS LOG</div>
                            <div class="portfolio-caption-subheading text-muted">SITE INSTITUCIONAL</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 fade-in-element">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="../src/assets/img/portfolio/elvis_leme.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">ELVIS LEME ADVOGADO</div>
                            <div class="portfolio-caption-subheading text-muted">SITE INSTITUCIONAL</div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0 fade-in-element"> -->
                    <!-- Portfolio item 4-->
                    <!-- <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="../src/assets/img/logos/arl_logo.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">ARL LIMA TRANSPORTES</div>
                            <div class="portfolio-caption-subheading text-muted">WebApp</div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                     <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/5.jpg" alt="..." />
                        </a>
                         <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Southwest</div>
                            <div class="portfolio-caption-subheading text-muted">Website Design</div>
                        </div>
                    </div>  -->
                </div>
                <!-- <div class="col-lg-4 col-sm-6"> -->
                    <!-- Portfolio item 6-->
                    <!-- <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/6.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Window</div>
                            <div class="portfolio-caption-subheading text-muted">Photography</div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Sobre</h2>
                <h3 class="section-subheading text-muted">A F&K Tech Solutions nasceu com o próposito de deixar sua empresa com visibilidade online.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="../src/assets/img/about/start.png"
                            alt="..." /></div>
                    <div class="timeline-panel fade-in-element">
                        <div class="timeline-heading">
                            <h4>2024-2025</h4>
                            <h4 class="subheading">Nosso começo</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Somos uma empresa nova no mercado, mas com grandes valores!
                                                Sempre pensando em como melhorar para nosso cliente. </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="../src/assets/img/about/web_dev.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel fade-in-element">
                        <div class="timeline-heading">
                            <h4>Dezembro 2024</h4>
                            <h4 class="subheading">Nasce a ideia</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Para criar essa empresa o primeiro passo foi a confiança, o segundo a determinação e o terceiro a esperaça!</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="../src/assets/img/about/verificado.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel fade-in-element">
                        <div class="timeline-heading">
                            <h4>Fevereiro 2025</h4>
                            <h4 class="subheading">Primeira entrega</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Primeira entrega nunca nos esquecemos, passamos alguns dias estudando e criando o primeiro site institucional de nossa empresa, e foi feito para a ARL LIMA TRANSPORTES!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image "><img class="rounded-circle img-fluid" src="../src/assets/img/about/foco.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel fade-in-element">
                        <div class="timeline-heading">
                            <h4>Ainda em 2025</h4>
                            <h4 class="subheading">Pensamento...</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Ir em busca de novos parceiros para retirarmos seu sonho do papel e colocar em pratica, dar visibilidade e confiança para nossos clientes.!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Faça parte
                            <br />
                            da nossa
                            <br />
                            História!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Nossa equipe incrível</h2>
                <h3 class="section-subheading text-muted">Contamos com pessoas de alto padrão para nos ajudar a alavancar nossa empresa.</h3>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="team-member fade-in-element">
                        <img class="mx-auto rounded-circle" src="../src/assets/img/team/01 103 _MSM8098.jpg.jpg" alt="..." />
                        <h4>Franklim Silva</h4>
                        <p class="text-muted">CEO e Desenvolvedor Full Stack</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/fek.tech/" aria-label="Parveen Anand Instagram Profile">
                                <i class="fa-brands fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/Franklim.Porfirio.Silva" aria-label="Parveen Anand Facebook Profile"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/franklim-silva/" aria-label="Parveen Anand LinkedIn Profile"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team-member fade-in-element">
                        <img class="mx-auto rounded-circle" src="../src/assets/img/team/K.jpg" alt="..." />
                        <h4>Karoline Silva</h4>
                        <p class="text-muted">CEO e Desing</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/fek.tech/" aria-label="Parveen Anand Instagram Profile">
                                <i class="fa-brands fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/karool.gouveiia"
                            aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/karoline-gouveia-silva/"
                            aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <!-- <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Queremos fazer parte da sua história e jutnos alavancarmos para um futuro com grandes conquistas.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients-->
    <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3 fade-in-element">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="../src/assets/img/logos/arl_logo.png"
                            alt="ARL" aria-label="ARL" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3 fade-in-element">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="../src/assets/img/logos/mbs_log.jpg"
                            alt="mbs_log" aria-label="mbs_log" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3 fade-in-element">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="../src/assets/img/logos/elvis_leme.png"
                            alt="elvis_leme" aria-label="elvis_leme" /></a>
                </div>
                <!-- <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg"
                            alt="..." aria-label="IBM Logo" /></a>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Nosso contato</h2>
                <h3 class="section-subheading text-muted">Tire suas dúvidas entre em contato.</h3>
            </div>
            <form id="contactForm" method="post" action="enviar.php">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="nome" type="text" placeholder="Seu nome*"
                                data-sb-validations="required" name="nome"/>
                            <div class="invalid-feedback" data-sb-feedback="nome:required">Informe seu nome.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Seu e-mail *"
                                data-sb-validations="required,email" name="email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">Informe seu e-mail</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">E-mail não é válido.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="telefone" type="tel" placeholder="Seu telefone *"
                                data-sb-validations="required" name="telefone" />
                            <div class="invalid-feedback" data-sb-feedback="telefone:required">Informe seu telefone.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="messagem" placeholder="Sua mensagem *"
                                data-sb-validations="required" name="mensagem"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="messagem:required">Conte-nos o que procura para começar a desenvolver seu site?
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase"
                        id="submitButton" type="submit">Enviar</button></div>
            </form>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; F & K TECH SOLUTIONS 2025</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <!-- <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                            class="fab fa-twitter"></i></a> -->
                     <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/fek.tech/" aria-label="Twitter">
                                    <i class="fa-brands fa-instagram"></i></a> 
                    <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/Franklim.Porfirio.Silva" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/franklim-silva/" aria-label="LinkedIn"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Politica de privacidade</a>
                    <a class="link-dark text-decoration-none" href="#!">Termos de uso</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">ARL LIMA TRANSPORTES LTDA</h2>
                                <p class="item-intro text-muted">Site institucional feito em 2025</p>
                                <img class="img-fluid d-block mx-auto" src="../src/assets/img/logos/arllima.jpeg" alt="arl_lima_logo" />
                                <p>Site da <a href="www.arllimatransportes.com.br"> ARL LIMA</a> conta com a tecnologia WordPress, hospedagem segura pela Hostinger e o dominio adiquirido pela mesma.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Cliente:</strong>
                                        ARL LIMA
                                    </li>
                                    <li>
                                        <strong>Ramo:</strong>
                                        Transportadora de produtos quimicos.
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <!-- <i class="fas fa-xmark me-1"></i> -->
                                    Fechar ❌
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">MBS LOG</h2>
                                <p class="item-intro text-muted">Site em construção.</p>
                                <img class="img-fluid d-block mx-auto" src="../src/assets/img/logos/mbs_log.jpg" alt="mbs_log_logo" />
                                <p>MBS LOG iniciou o processo para criação de seu site conosco! </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Cliente:</strong>
                                        MBS LOG TRANSPORTADORA
                                    </li>
                                    <li>
                                        <strong>Ramo:</strong>
                                        Transportadora de produtos quimicos.
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <!-- <i class="fas fa-xmark me-1"></i> -->
                                    Fechar ❌
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Elvis Leme Advogado</h2>
                                <p class="item-intro text-muted">Landing Page em contrução.</p>
                                <img class="img-fluid d-block mx-auto" src="../src/assets/img/logos/elvis_leme.png" alt="elvis_leme_logo" />
                                <p>Doutor Elvis Leme decidiu aumentar sua visibilidade na internet e nos procurou para agregarmos valor a seu trabalho!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Cliente:</strong>
                                        Elvis Leme Advogado
                                    </li>
                                    <li>
                                        <strong>Ramo:</strong>
                                        Advogacia
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <!-- <i class="fas fa-xmark me-1"></i> -->
                                    Fechar ❌
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">ARL LIMA TRASNPORTES</h2>
                                <p class="item-intro text-muted">WebApp.</p>
                                <img class="img-fluid d-block mx-auto" src="../src/assets/img/logos/arllima.jpeg" alt="arl_lima_logo_" />
                                <p>Após seu site, a ARL LIMA decidiu fazer um WebApp para comunicação entre seu escritório e seus motoristas, onde realizam a coleta e entrega !</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Cliente:</strong>
                                        ARL LIMA TRANSPORTES
                                    </li>
                                    <li>
                                        <strong>Ramo:</strong>
                                        Transportadora de produtos quimicos.
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <!-- <i class="fas fa-xmark me-1"></i> -->
                                Fechar ❌
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 5 modal popup-->
    <!-- <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                 Project details
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Southwest
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Website Design
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Portfolio item 6 modal popup-->
    <!-- <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Window
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Photography
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Bootstrap core JS-->
    <script src="../src/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="../src/js/sb-forms-0.4.1.js"></script>
    <script>
            document.addEventListener('DOMContentLoaded', () => {
        const elements = document.querySelectorAll('.fade-in-element');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target); // Optional: stop observing once visible
                }
            });
        }, {
            threshold: 0.5 // Trigger when 20% of the element is visible
        });

        elements.forEach(element => {
            observer.observe(element);
        });
    });
    </script>
</body>

</html>