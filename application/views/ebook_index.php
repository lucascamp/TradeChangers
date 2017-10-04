<!DOCTYPE html>
<html lang="en">
<?php $this->load->helper('url'); ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>TradeChangers</title>
  <link href="<?= base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
            <a class="nav-link js-scroll-trigger" href="http://tradechangers.com.br/">Visite nosso Blog</a>
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
                <h4>Perca o medo de investir!</h4>
                <p>Receba nosso E-Book <strong>gratuitamente</strong> Com várias dicas de como aplicar e ter rendimentos em pouco tempo, sem mudar seu estilo de vida.</p>
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
                <button id="1" class="submit btn btn-xl btn-block">Receber E-Book</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

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

  <script src="<?= base_url(); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>vendor/popper/popper.min.js"></script>
  <script src="<?= base_url(); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url(); ?>js/main.js"></script>
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