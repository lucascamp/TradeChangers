<!DOCTYPE html>
<html lang="en">
<?php $this->load->helper('url'); ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>TradeChangers</title>
  <link href="<?= base_url(); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link href="<?= base_url(); ?>/css/main.css" rel="stylesheet">
</head>

<body id="page-top">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
       <img class="img-fluid" id='logo' src="<?= base_url(); ?>/img/logo.png" alt=""></a>
       <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>ebook">E-Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#conteudo">Conteúdos</a>
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

  <section class="bg-light" id="conteudo">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Conteúdos</h2>
          <h3 class="section-subheading text-muted">Esses são nossos conteúdos em destaque.</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 col-sm-6 conteudo-item">
        <a class="conteudo-link" href="<?= base_url(); ?>conteudo/juros">
            <div class="conteudo-hover">
              <div class="conteudo-hover-content">
                <center>Saiba mais!</center>
              </div>
            </div>
            <img class="img-fluid" src="<?= base_url(); ?>/img/juros.png" alt="">
          </a>
          <div class="conteudo-caption">
            <h4>De olho nos juros</h4>
            <p class="text-muted">Veja como as diferentes taxas podem influenciar diretamente os seus investimentos.
            </p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 conteudo-item">
          <a class="conteudo-link" href="<?= base_url(); ?>conteudo/investirfgts">
            <div class="conteudo-hover">
              <div class="conteudo-hover-content">
                <center>Saiba mais!</center>
              </div>
            </div>
            <img class="img-fluid" src="<?= base_url(); ?>/img/fgts.png" alt="">
          </a>
          <div class="conteudo-caption">
            <h4>Maneiras inteligentes de investir meu FGTS</h4>
            <p class="text-muted">Saiba os caminhos para ter maior retorno sobre o seu FGTS, investindo no tesouro direto</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 conteudo-item">
          <a class="conteudo-link" href="<?= base_url(); ?>conteudo/futuroprevidencia">
            <div class="conteudo-hover">
              <div class="conteudo-hover-content">
                <center>Saiba mais!</center>
              </div>
            </div>
            <img class="img-fluid" src="<?= base_url(); ?>/img/previdencia.png" alt="">
          </a>
          <div class="conteudo-caption">
            <h4>Sem a Previdência social, o que irá garantir meu futuro?</h4>
            <p class="text-muted">Saia da zona de conforto e construa a sua aposentadoria por meio dos fundos de investimento.</p>
          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-md-4 col-sm-6 conteudo-item">
        <a class="conteudo-link" href="<?= base_url(); ?>conteudo/bolsavalores">
            <div class="conteudo-hover">
              <div class="conteudo-hover-content">
                <center>Saiba mais!</center>
              </div>
            </div>
            <img class="img-fluid" src="<?= base_url(); ?>/img/bolsa_sm.png" alt="">
          </a>
          <div class="conteudo-caption">
            <h4>Ganhe dinheiro com a bolsa de valores</h4>
            <p class="text-muted">Vamos te contar tudo o que você precisa saber sobre bolsa de valores e
            como ganhar dinheiro nela.</p>
          </div>
        </div>

        <div class="col-md-4 col-sm-6 conteudo-item">
        <a class="conteudo-link" href="<?= base_url(); ?>conteudo/percaomedo">
            <div class="conteudo-hover">
              <div class="conteudo-hover-content">
                <center>Saiba mais!</center>
              </div>
            </div>
            <img class="img-fluid" src="<?= base_url(); ?>/img/medo_sm.png" alt="">
          </a>
          <div class="conteudo-caption">
            <h4>Perca seu medo de perder dinheiro</h4>
            <p class="text-muted">Aprenda como você pode estar perdendo dinheiro e a manter ele protegido!</p>
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
              <a href="https://www.facebook.com/TradeChangersBr/">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/company/11301947/">
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

  <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/vendor/popper/popper.min.js"></script>
  <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url(); ?>/js/main.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>/js/validation.js"></script>
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