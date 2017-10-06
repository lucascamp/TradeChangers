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
          <a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>">home</a>
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
          <h2 style="padding-bottom: 20px;">Perca seu medo de perder dinheiro</h2>
          <h6  style="padding-bottom: 40px;" class="item-intro text-muted">Muitas pessoas ainda usam o medo de perder dinheiro como desculpa para não fazer investimentos. O que muitos não sabem é que, ao deixar dinheiro na
          poupança, você está perdendo dinheiro. Independente da aplicação em investimento que você fizer, é possível manter boa parte dele protegido.<br></h6>
          <img class="img-fluid d-block mx-auto" src="<?= base_url(); ?>/img/medo.png" alt="">

          <p class='text' align ="Justify"><br></p>
          <h6><i><u>Segurança na bolsa</u></i></h6>
          <p class='text' align ="Justify">Para que você possa investir na bolsa de valores, é necessário que abra uma conta em uma corretora. A corretora serve, entre outras coisas, para executar as
          ações de compra e venda que você solicita, seja por telefone ou Home Broker. Além
          disso você tem uma opção que se chama Stop Loss, que atua como um sistema de
          segurança, onde você informa qual é o valor máximo que você aceita perder, então
          quando ocorre uma queda nas suas ações e ela alcança esse valor crítico, a corretora
          venderá todas as suas ações para poder diminuir o prejuízo. Por exemplo se o seu
          Stop Loss for de R$0,10 e você tem 100 ações de R$1,00, quando o valor dela chegar
          a R$0,90 todos seus papéis são vendidos e você permanece com R$9,00.</p>

          <p class='text' align ="Justify">
          Da mesma forma quem opera com bots (os robôs que surgiram para ajudar os
          investidores) é possível planejar um valor de Stop Loss para diminuir suas perdas.</p>

          <h6><i><u>Garantidas pelo FGC</u></i></h6>
          <p class='text' align ="Justify">O Fundo Garantidor de Créditos é uma entidade privada sem fins lucrativos mantido pelas instituições financeiras associadas, sendo que o Banco Central obriga
          bancos e outras determinadas instituições financeiras a se associarem ao fundo. Este
          fundo tem como objetivo proteger o dinheiro de correntistas, garantindo até
          R$250.000,00 por CPF/CNPJ por instituição financeira.</p>

          <p class='text' align ="Justify">Lista de créditos garantidos:</p>
          <ul>
            <li>Depósitos à vista ou sacáveis mediante aviso prévio;</li>
            <li>Depósitos de poupança;</li>
            <li>Letras de câmbio (LC);</li>
            <li>Letras imobiliárias (LI);</li> 

            <li>Letras hipotecárias (LH);</li>   
            <li>Letras de crédito imobiliário (LCI);</li>  
            <li>Letras de crédito do agronegócio (LCA);</li>  
            <li>Depósitos a prazo, com ou sem emissão de certificado RDB (Recibo de
            Depósito Bancário) e CDB (Certificado de Depósito Bancário);</li>  
            <li>Depósitos mantidos em contas não movimentáveis por cheques destinadas ao
            registro e controle do fluxo de recursos referentes à prestação de serviços de
            pagamento de salários, vencimentos, aposentadorias, pensões e similares;</li>  
            <li>Operações compromissadas que têm como objeto títulos emitidos após 8 de
            março de 2012 por empresa ligada;</li>  
          </ul>

          <h6><i><u>Tesouro Direto</u></i></h6>
          <p class='text' align ="Justify">No caso do Tesouro Direto, não existe garantia por parte do FGC, mas calma seu dinheiro não estará indefeso. Neste caso o garantidor é o Tesouro Nacional e a melhor parte é que 100% do valor é assegurado. Então mesmo que você tenha mais
          de 250 mil investidos, eles estarão seguros no tesouro direto.</p>

          <p class='text' align ="Justify">
          Agora que você já viu que não precisa mais ter medo de investir o seu dinheiro.
          Saiba mais sobre investimentos em nosso <a href="http://tradechangers.com.br/ebook/">Ebook</a>.</p>

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
        <script src="<?= base_url(); ?>/js/others.js"></script>
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