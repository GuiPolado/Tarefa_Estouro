<?php
   use Lib\App;
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>INFO JR.</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">info jr.</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfólio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#mej">MEJ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

   <!-- HEADER -->
    <header class="masthead">
      <div class="header-content">
        <div class="header-content-inner">
          <<img src="<?= Lib\App::getRouter()->getResourceUrl('img/logo_final.png') ?>" class="img-fluid" alt=""> 
          <h2>Projetos, Assessoria e Consultoria</h2>
        </div>
      </div>
    </header>
   
  <!-- ABOUT -->
   <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Quem somos?</h2>
            <h3 class="section-subheading2 text-muted">"Inconformismo, visão para oportunidades, pensamento inovador e capacidade de realização são características que nos definem."</h3>
            <hr class="hr-blue">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box">
              <div class="icon-center">
                  <div class="icon-circle-b">
                <i class="fa fa-4x fa-code fa-blue sr-icons"></i>
                </div>
              </div>
              <h3 class="service-heading-blue">A Info Jr.</h3>
              <p class="text-blue">Empresa júnior formada por alunos de Ciências da Computação da Unesp Rio Claro, que tem por objetivo o desenvolvimento web.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box">
              <div class="icon-center">
                  <div class="icon-circle-b">
                <i class="fa fa-4x fa-user-o fa-blue sr-icons"></i>
                </div>
              </div>
              <h3 class="service-heading-blue">Nossa equipe</h3>
              <p class="text-blue">Atualmente com 21 membros em constante desenvolvimento e sempre empenhados a apresentar soluções inovadoras.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 text-center">
            <div class="service-box">
              <div class="icon-center">
                  <div class="icon-circle-b">
                <i class="fa fa-4x fa-flag fa-blue sr-icons"></i>
                </div>
              </div>
              <h3 class="service-heading-blue">20 anos de mercado</h3>
              <p class="text-blue">Há 20 anos propondo soluções inovadoras, proporcionando experiências e contando com satisfação de nossos clientes.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- <section class="bg-blue" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">We've got what you need!</h2>
            <hr class="light">
            <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
            <a class="btn btn-default btn-xl js-scroll-trigger" href="#services">Get Started!</a>
          </div>
        </div>
      </div>
    </section> -->

<!-- SERVICES -->
    <section id="services" class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading-green">O que podemos fazer por você?</h2>
            <h3 class="section-subheading2 text-muted">“Nosso grau de comprometimento determina nosso sucesso e supera expectativas de ambas as partes.”</h3>
            <hr class="primary">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box">
              <div class="icon-center">
                  <div class="icon-circle">
                <i class="fa fa-4x fa-picture-o fa-white sr-icons"></i>
                </div>
              </div>
              <h3 class="service-heading">Portfólios</h3>
              <p class="text-white">Sites portfólio que apresentam de maneira clara os seus produtos e serviços.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box">
              <div class="icon-center">
                  <div class="icon-circle">
                <i class="fa fa-4x fa-cogs fa-white sr-icons"></i>
                </div>
              </div>
              <h3 class="service-heading">Sistemas</h3>
              <p class="text-white">Sistemas desenvolvidos especialmente para atender às suas necessidades.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box">
              <div class="icon-center">
                  <div class="icon-circle">
                <i class="fa fa-4x fa-mobile fa-white sr-icons"></i>
                </div>
              </div>
              <h3 class="service-heading">Responsividade</h3>
              <p class="text-white">Seu site funcionando em qualquer dispositivo.</p>
            </div>
          </div>
         <!-- </div>
          <div class="row service-margin"> -->
          <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box">
              <div class="icon-center">
                  <div class="icon-circle">
                <i class="fa fa-4x fa-sliders fa-white sr-icons"></i>
                </div>
              </div>
              <h3 class="service-heading">Flexibilidade</h3>
              <p class="text-white">Ajustamos tudo para atender seu gosto e necessidade.</p>
            </div>
          </div>
           <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box">
              <div class="icon-center">
                  <div class="icon-circle">
                <i class="fa fa-4x fa-eye fa-white sr-icons"></i>
                </div>
              </div>
              <h3 class="service-heading">Supervisão</h3>
              <p class="text-white">Você pode acompanhar tudo durante o desenvolvimento.</p>
            </div>
          </div>
           <div class="col-lg-4 col-md-6 text-center">
            <div class="service-box">
              <div class="icon-center">
                  <div class="icon-circle hdshake">
                <i class="fa fa-4x fa-handshake-o fa-white sr-icons"></i>
                </div>
              </div>
              <h3 class="service-heading">Suporte</h3>
              <p class="text-white">Garantimos um tempo de suporte após a entrega do produto.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- PORTFOLIO -->
    <section id="portfolio" class="bg-white">
     <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Portfólio</h2>
            <h3 class="section-subheading2 text-muted">Conheça nossos trabalho mais recentes.</h3>
            <hr class="hr-blue">
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row no-gutter">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" data-toggle="modal" href="#portfolioModal1">
                <img class="img-fluid" src="<?= Lib\App::getRouter()->getResourceUrl('img/portfolio/01-thumbnail.png') ?>" alt="">  
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    <i class="fa fa-4x fa-wordpress fa-white sr-icons"></i>
                  </div>
                  <div class="project-name">
                    Engeali <br> Engenharia de Alimentos
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" data-toggle="modal" href="#portfolioModal2">
              <img class="img-fluid" src="<?= Lib\App::getRouter()->getResourceUrl('img/portfolio/02-thumbnail.png') ?>" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    <i class="fa fa-4x fa-wordpress fa-white sr-icons"></i>
                  </div>
                  <div class="project-name">
                    Núcleo UNESP
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" data-toggle="modal" href="#portfolioModal3">
              <img class="img-fluid" src="<?= Lib\App::getRouter()->getResourceUrl('img/portfolio/03-thumbnail.png') ?>" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    <i class="fa fa-4x fa-wordpress fa-white sr-icons"></i>
                  </div>
                  <div class="project-name">
                    V Welcomej
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Clients -->
    <section class="py-0 clients bg-white2">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?= Lib\App::getRouter()->getResourceUrl('img/logos/nucleo100.png') ?>" alt="">
            </a>
          </div>
          <div class="col-md-6 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="<?= Lib\App::getRouter()->getResourceUrl('img/logos/bj100.png') ?>" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

   <!-- Contrate uma EJ -->
    <section id="mej" class="bg-blue">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading-green">Por que contratar uma Empresa Júnior?</h2>
            <h3 class="section-subheading text-muted">"Somos apaixonados pelo nosso trabalho e trabalhamos por um movimento em que acreditamos. Nosso orgulho de ser júnior é o que nos faz gigantes pela própria natureza."</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?= Lib\App::getRouter()->getResourceUrl('img/about/1.png') ?>" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Orçamento flexível</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-white">Já pensou no quanto um bom site pode impulsionar seu negócio? E que tal um orçamento abaixo do mercado? Nós fazemos isso por você!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?= Lib\App::getRouter()->getResourceUrl('img/about/2.png') ?>" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Incentivo à liderança</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-white">Fazendo parte de uma empresa júnior os alunos são incentivados a ter postura de liderança e proatividade, contribuindo para um aperfeiçoamento que refletirá na atuação profissional após sua formação!</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?= Lib\App::getRouter()->getResourceUrl('img/about/3.png') ?>" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Incentivo à cultura empreendedora</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-white">Ligado ao Movimento Empresa Júnior os membros são encorajados a propor novas soluções para problemas e suprir as necessidades dos clientes, levando-os a ter uma postura empreendedora.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?= Lib\App::getRouter()->getResourceUrl('img/about/4.png') ?>" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Preparação profissional</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-white">Contratando uma empresa júnior você contribui com todo esse movimento e ajuda a nos prepararmos profissionalmente para o mercado de trabalho ainda na graduação!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Faça parte
                    <br>da nossa
                    <br>história!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
     <!-- Team -->
    <section class="bg-light bg-blue" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Nossa equipe</h2>
            <h3 class="section-subheading2 text-muted"></h3>
            <hr class="hr-blue">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?= Lib\App::getRouter()->getResourceUrl('img/team/bonato.jpg') ?>" alt="">
              <h4>Gabriel Bonato</h4>
              <p class="text-muted">Presidente</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?= Lib\App::getRouter()->getResourceUrl('img/team/andre.jpg') ?>" alt="">
              <h4>André Narita</h4>
              <p class="text-muted">Diretor de Relações Comerciais</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?= Lib\App::getRouter()->getResourceUrl('img/team/raphael.jpg') ?>" alt="">
              <h4>Raphael Trench</h4>
              <p class="text-muted">Diretor de Relações Humanas</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?= Lib\App::getRouter()->getResourceUrl('img/team/guilherme.jpg') ?>" alt="">
              <h4>Guilherme Guiger</h4>
              <p class="text-muted">Diretor de Projetos</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?= Lib\App::getRouter()->getResourceUrl('img/team/bruna.jpg') ?>" alt="">
              <h4>Bruna Beletti</h4>
              <p class="text-muted">Diretora de Marketing</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?= Lib\App::getRouter()->getResourceUrl('img/team/matheus.jpg') ?>" alt="">
              <h4>Matheus Freitas</h4>
              <p class="text-muted">Diretor de Jurídico/Financeiro</p>
            </div>
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
          </div>
        </div> -->
      </div>
    </section>
    
     <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading-green">Entre em contato!</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-xl" type="submit">Enviar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Info Jr 2017</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
             <!-- <li class="list-inline-item">
                <p>Made with &hearts; and Bootstrap</p>
              </li> -->
              <li class="list-inline-item">
                <a href="https://icons8.com">Icons by icons8</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
   
   <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Engeali</h2>
                  <p class="item-intro text-muted">Engenharia de Alimentos.</p>
                  <img class="img-fluid d-block mx-auto" src="<?= Lib\App::getRouter()->getResourceUrl('img/portfolio/01-thumbnail.png') ?>" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <!-- <li>Data: January 2017</li>
                    <li>Client: Threads</li> -->
                    <li>Categoria: Site porfólio</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Fechar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Núcleo UNESP</h2>
                  <p class="item-intro text-muted">O maior núcleo de empresas juniores do Brasil.</p>
                  <img class="img-fluid d-block mx-auto" src="<?= Lib\App::getRouter()->getResourceUrl('img/portfolio/02-thumbnail.png') ?>" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <!-- <li>Data: January 2017</li>
                    <li>Client: Threads</li> -->
                    <li>Categoria: Site porfólio</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Fechar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>V Welcomej</h2>
                  <p class="item-intro text-muted">Evento de boa-vindas ao novos empresários juniores.</p>
                  <img class="img-fluid d-block mx-auto" src="<?= Lib\App::getRouter()->getResourceUrl('img/portfolio/03-thumbnail.png') ?>" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <!-- <li>Data: January 2017</li>
                    <li>Client: Threads</li> -->
                    <li>Categoria: Site porfólio</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Fechar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>
</html>

