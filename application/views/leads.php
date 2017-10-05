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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.css"/>
 

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
      </div>
    </div>
  </nav>

  <section class="bg-light" id="conteudo">
    <div class="container">
      <div class="row">
      <table id="example" class="display table table-bordered table-hover" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Nome Completo</th>
                  <th>E-mail</th>
                  <th>Data Cadastro</th>
                  <th>Tipo</th>
                  <th>Produto</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Nome Completo</th>
                  <th>E-mail</th>
                  <th>Data Cadastro</th>
                  <th>Tipo</th>
                  <th>Produto</th>
                </tr>
              </tfoot>
              <tbody>

              <?php foreach ($query as $key => $value) {   ?>
                <tr>
                  <td><?= $value->nome_completo ?></td>
                  <td><?= $value->email ?></td>
                  <td><?= $value->datetime_cadastro ?></td>
                  <td><?= $value->tipo ?></td>
                  <td><?= $value->produto ?></td>
                </tr>
                <?php } ?> 
              </tbody> 
      </div>
    </div>
  </section>

  <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/vendor/popper/popper.min.js"></script>
  <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url(); ?>/js/main.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>/js/validation.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.js"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107353896-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments)
    };
    gtag('js', new Date());

    gtag('config', 'UA-107353896-1');
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable();
    } );
  </script>
</body>

</html>