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
  <link href="<?= base_url(); ?>/css/agency.css" rel="stylesheet">
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
          <h2>De olho nos juros!</h2>
          <p class="item-intro text-muted">Saiba como eles podem influenciar diretamente os seus investimentos.</p>
          <img class="img-fluid d-block mx-auto" src="<?= base_url(); ?>/img/juros.png" alt="">
          <p align="Justify">Um desafio presente no cotidiano dos brasileiros é a administração dos juros e
            as melhores maneiras de otimizar essas taxas. Até porque sempre nos
            deparamos com os juros no momento de realizar transações, pedir
            empréstimos ou até mesmo aplicar o nosso dinheiro. Mas muitos não sabem
            de fato o que está por trás das porcentagens ou os impactos que elas podem
            causar na nossa vida financeira.
            Antes de desbravar o universo dos juros, vamos primeiro esclarecer o que eles
            realmente são. Juros são todos os rendimentos obtidos sobre o empréstimo de
            dinheiro por um determinado período. Para o credor é a forma de compensar
            pelo tempo que ficará sem utilizar o dinheiro emprestado.
            Por esse motivo, quando é solicitado um empréstimo em instituições privadas,
            é incluso ao valor a taxa de juros. O mesmo acontece em situações de
            financiamento de veículos e imóveis. Entretanto, isso não se aplica apenas em
            ocasiões de empréstimos e financiamentos. Quando investimos de alguma
            maneira o nosso dinheiro, nos tornamos credores dos bancos ou do governo e,
            com isso, arcamos com os juros. Estas instituições emitem títulos e vendem
            para o mercado como forma de se financiar. É a maneira que eles encontraram
            para incentivar pessoas a investirem e, consequentemente, as instituições
            obtém recursos para realizar empréstimos com uma taxa de juros superior ao
            que está pagando ao credor.
            E como tudo isso impacta na decisão de investimos o nosso dinheiro?
            Se você tem acompanhado os jornais ou noticiários, saberá que o governo
            reduziu a taxa básica de juros da economia, que está operando abaixo da meta
            em uma taxa diária de 8,15%, sendo a meta 0,10% acima desse número. Isso
            significa que o pagamento pelos juros dos investimentos está sendo menor,
            levando em consideração que a remuneração em renda fixa, na maioria das
            vezes, é feita em cima desse indicador.
            Então isso quer dizer que investir não está sendo um bom negócio? Não
            exatamente!</p>

            <h6><i><u>Como a Taxa Selic impacta na inflação e nos investimentos?</u></i></h6>

            <p align="Justify">O Banco Central tem como competência e responsabilidade a emissão da
              moeda no Brasil, o que está diretamente atrelado à inflação. Para isso, eles
              possuem uma meta que precisa ser controlada, pois caso exista o risco do
              limite ser ultrapassado, os juros são elevados. O grande problema disso é que
              as altas taxas inibem o consumo, o que diminui a pressão de aumento sobre os
              preços, por não existir demanda.

              Em resumo, o governo precisa incentivar a oferta de empréstimos para que
              seja reduzida a Selic. Assim, é possível motivar o consumidor a movimentar a
              economia.
              Quando a economia está aquecida, para evitar o descontrole dos preços, o
              governo aumenta a taxa Selic. Isso leva pessoas a reduzirem seus gastos,
              fazendo com que o comércio diminua os preços dos produtos, para a inflação
              recuar.
              Portanto, a taxa Selic é a maneira que o governo encontrou para controlar a
              inflação. Se a taxa é elevada, isso significa que existe menos crédito disponível
              e, com isso, menos dinheiro no mercado e menos demanda por produtos à
              venda.
              Assim, se você está prestes a investir em algo, o mais adequado a fazer é
              consultar como estão sendo praticadas as taxa de juros pelo mercado e como
              está sendo o desempenho da inflação em relação à taxa Selic. Somente assim
              será possível prever os famosos “booms” de mercado, onde conseguimos
              identificar quando serão os maiores rendimentos.</p>

              <h6><i><u>Como a flutuação da taxa de juros afeta os investimentos?</u></i></h6>
              <p align="Justify">
                É comum no mercado financeiro ouvir que as taxas de inflação no Brasil eram
                flutuantes, o que garantia grande variação de preços no mesmo dia. Pela
                manhã 5 quilos de arroz custava R$ 10,00 e no fim do dia esse valor poderia
                estar R$ 2,00  mais barato ou até mesmo R$ 8,00 mais caro! Isso porque o
                governo estava combatendo a inflação, o que garantiu grande instabilidade
                financeira. Atualmente, temos isso melhor controlado, com políticas fiscais bem
                definidas e com metas melhores estabelecidas.
                Essas informações, contudo, não isentam investidores de pensar que aplicar os
                seus fundos se tornou menos ou mais atrativos. Ainda mais quando estamos
                em um cenário que a taxa nominal de juros sobe e cai diariamente, já que esta
                taxa não está atrelada à inflação no mesmo período.
                Mas não foi dito anteriormente que a taxa de juros era diretamente atrelada à
                inflação? Sim, você leu certo. Acontece que o indicador em que estávamos nos
                referindo ao longo deste texto se trata da taxa real de juros, que é o que
                realmente irá gerar retorno ao investidor, pois ela remunera acima da inflação,
                no momento em que está sendo avaliado o investimento.
                Já a taxa nominal é analisada sobre um período de tempo que não
                necessariamente está atrelado à taxa real, por isso ela costuma ser incluída em
                uma operação financeira, já que cede previsões de médio a longo prazo. Por
                exemplo, se uma instituição financeira nosoferecer um fundo de investimento
                que renderá 12% ao ano.</p>


                <h6><i><u>Quando e como eu devo investir?</u></i></h6>
                <p align="Justify">
                  Não existe período ou data certa para o investimento. Não existe sazonalidade
                  ou também garantia exata de retorno. Todo e qualquer investimento deve ser
                  analisado de acordo com as taxas, indicadores e juros previstos para o período
                  da aplicação. Por esse motivo, é importante entender os percalços que a
                  inflação e os juros podem gerar no momento de aplicar seu dinheiro no
                  mercado financeiro.</p>
                </p>
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
        <script src="<?= base_url(); ?>/js/agency2.js"></script>
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