<!DOCTYPE html>
<html lang="en">
<?php $this->load->helper('url'); ?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TradeChangers</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <link href="css/agency.css" rel="stylesheet">

</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img  class="img-fluid" id='logo' src="img/logo.png" alt=""></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Conteudo e E-Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Participar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Descubra a melhor forma de investir!</h4>
                                <p>Conectamos você as novidades do mercado financeiro. Receba nossos conteúdos <strong>gratuitamente</strong> e saiba como multiplicar o seu dinheiro.</p>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="nome1" type="text" placeholder="* Insira seu Nome Completo" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email1" type="email" placeholder="* Insira seu E-mail" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-6 text-right">
                            </div>
                            <div class="col-lg-6 text-right">
                                <div id="success1"></div>
                                <button id="1" class="submit btn btn-xl btn-block">Receber Novidades</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Serviços</h2>
                    <h3 class="section-subheading text-muted">O que você encontra aqui.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
                    <h4 class="service-heading">E-Books Gratis</h4>
                    <p class="text-muted">Os melhores materiais para você saber as tendências do mercado financeiro e as melhores maneiras de diversificar seus investimentos e ampliar os rendimentos.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
                    <h4 class="service-heading">Atualizações diárias</h4>
                    <p class="text-muted">Notícias do mercado financeiro e tudo aquilo que o impacta sempre atualizadas para você não perder nada!</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
                    <h4 class="service-heading">Analise Personalizada</h4>
                    <p class="text-muted">Nossos especialistas buscam sempre as informações mais qualificadas para que você possa tomar as melhores decisões sobre os seus investimentos.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Materiais</h2>
                    <h3 class="section-subheading text-muted">Esses são nossos conteúdos em destaque.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Investir FGTS</h4>
                        <p class="text-muted">MONEY MONEY</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Texto1</h4>
                        <p class="text-muted">Texto1</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Texto2</h4>
                        <p class="text-muted">Texto2</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Texto3</h4>
                        <p class="text-muted">Texto3</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Texto4</h4>
                        <p class="text-muted">Texto4</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Texto5</h4>
                        <p class="text-muted">Texto5</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="intro-text">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Não quer perder nada? Cadastre-se!</h4>
                                <p>Receba nossos Conteúdos e Reports Financeiros <strong>Gratuitamente</strong>!</p>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="nome2" type="text" placeholder="* Insira seu Nome Completo" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email2" type="email" placeholder="* Insira seu E-mail" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-6 text-right">
                            </div>
                            <div class="col-lg-6 text-right">
                                <div id="success2"></div>
                                <button id="2" class="submit btn btn-xl btn-block">Receber Novidades</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; TradeChangers 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
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

                </div>
            </div>
        </div>
    </footer>
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
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Threads</li>
                                    <li>Category: Illustration</li>
                                </ul>
                                <button class="btn btn-primary btn-modal" data-dismiss="modal" type="button" onclick="levarForm()">
                    <i class="fa fa-book"> </i>
                     BAIXAR AGORA</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Explore</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button class="btn btn-primary btn-modal" data-dismiss="modal" type="button" onclick="levarForm()">
                    <i class="fa fa-book"> </i>
                     BAIXAR AGORA</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Finish</li>
                                    <li>Category: Identity</li>
                                </ul>
                                <button class="btn btn-primary btn-modal" data-dismiss="modal" type="button" onclick="levarForm()">
                    <i class="fa fa-book"> </i>
                     BAIXAR AGORA!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Lines</li>
                                    <li>Category: Branding</li>
                                </ul>
                                <button class="btn btn-primary btn-modal" data-dismiss="modal" type="button" onclick="levarForm()">
                    <i class="fa fa-book"> </i>
                     BAIXAR AGORA</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Southwest</li>
                                    <li>Category: Website Design</li>
                                </ul>
                                <button class="btn btn-primary btn-modal" data-dismiss="modal" type="button" onclick="levarForm()">
				  <i class="fa fa-book"> </i> BAIXAR AGORA
				  </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
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
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>Client: Window</li>
                                    <li>Category: Photography</li>
                                </ul>
                                <button class="btn btn-primary btn-modal" data-dismiss="modal" type="button">
                    <i class="fa fa-book"> </i>
                     BAIXAR AGORA</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/others.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/agency.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            function validateEmail(email) {
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            }

            function validateNome(nome) {
                return nome.indexOf(' ') !== -1;
            }

            $(".submit").click(function(e) {

                id = this.id;
                nome = $('#nome' + id).val().trim();
                email = $('#email' + id).val().trim();

                var count_name = nome.length;

                if (!validateEmail(email)) {
                    $('#success' + id).html("<div class='alert alert-danger'>");
                    $('#success' + id + ' > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success' + id + ' > .alert-danger').append($("<strong>").text("E-mail Inválido, favor verificar."));
                    $('#success' + id + ' > .alert-danger').append('</div>');
                    $('#contactForm').trigger("reset");
                } else if (!validateNome(nome)) {
                    $('#success' + id).html("<div class='alert alert-danger'>");
                    $('#success' + id + ' > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success' + id + ' > .alert-danger').append($("<strong>").text("Por favor insira seu nome completo."));
                    $('#success' + id + ' > .alert-danger').append('</div>');
                    $('#contactForm').trigger("reset");
                } else {

                    if (count_name > 0) {
                        $.ajax({
                            dataType: 'json',
                            type: 'POST',
                            url: '<?= base_url() ?>' + 'index.php/Form/saveForm',
                            data: {
                                nome_completo: nome,
                                email: email
                            },
                            success: function(data) {
                                if (data.type == 1) {
                                    $('#success' + id).html("<div class='alert alert-success'>");
                                    $('#success' + id + ' > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                                        .append("</button>");
                                    $('#success' + id + ' > .alert-success')
                                        .append("<strong>E-mail Cadastrado com sucesso! </strong>");
                                    $('#success' + id + ' > .alert-success')
                                        .append('</div>');
                                    $('#contactForm').trigger("reset");
                                } else {
                                    $('#success' + id).html("<div class='alert alert-danger'>");
                                    $('#success' + id + ' > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                                        .append("</button>");
                                    $('#success' + id + ' > .alert-danger').append($("<strong>").text("Erro! Tente novamente mais tarde."));
                                    $('#success' + id + ' > .alert-danger').append('</div>');
                                    $('#contactForm').trigger("reset");
                                }
                            },
                            error: function(jqXHR, exception) {
                                $('#success' + id).html("<div class='alert alert-danger'>");
                                $('#success' + id + ' > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                                    .append("</button>");
                                $('#success' + id + ' > .alert-danger').append($("<strong>").text("Erro! Tente novamente mais tarde."));
                                $('#success' + id + ' > .alert-danger').append('</div>');
                                $('#contactForm').trigger("reset");
                            }
                        });
                    } else {
                        $('#success' + id).html("<div class='alert alert-danger'>");
                        $('#success' + id + ' > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        $('#success' + id + ' > .alert-danger').append($("<strong>").text("Por favor insira um nome"));
                        $('#success' + id + ' > .alert-danger').append('</div>');
                        $('#contactForm').trigger("reset");
                    }
                }

            });

        });
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107353896-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments)
        };
        gtag('js', new Date());

        gtag('config', 'UA-107353896-1');
    </script>
</body>

</html>