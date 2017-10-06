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
          <h2 style="padding-bottom: 20px;">Ganhe dinheiro com ações na bolsa de valores</h2>
          <h6 style="padding-bottom: 40px;" class="item-intro text-muted">Hoje vamos te contar tudo o que você precisa saber sobre<br> bolsa de valores e como ganhar dinheiro nela.</h6>
          <img class="img-fluid d-block mx-auto" src="<?= base_url(); ?>/img/bolsa.png" alt="">
          <p class='text' align ="Justify"><br></p>

          <h6><i><u>O que é Bolsa de Valores?</u></i></h6>
          <p class='text' align ="Justify">A bolsa de valores refere-se ao ambiente onde são realizadas negociações envolvendo ações, moedas, commodities agropecuárias, etc. Neste artigo focamos em ações de empresas, que basicamente são papéis que representam pequenos pedaços da empresa. Em nosso <a href="http://tradechangers.com.br/ebook/">Ebook</a> focamos em ações de empresas, que basicamente são papéis que representam pequenos pedaços da empresa.</p>

          <h6><i><u>O que leva empresas a abrirem capital?</u></i></h6>
          <p class='text' align ="Justify">É uma forma de arrecadar dinheiro e conseguir uma quantia maior, sem contrair dívidas e pagar juros. Empresas com capital aberto possuem visão positiva diante do mercado e conseguem atrair melhores colaboradores através do pagamento em ações.</p>

          <h6><i><u>O sócio</u></i></h6>
          <p class='text' align ="Justify">Quando você compra ações de uma empresa, se torna sócio dela e tem <strong>direito a participação nos lucros</strong>. Existem dois tipos de papéis que garantem essa participação. O primeiro são as <strong>ações as ordinárias</strong> (ON), que concedem poder de voto nas assembleias e direitos especiais em caso de venda da empresa. As <strong>Ações preferenciais</strong> (PN) são as que possuem preferência no recebimento de dividendos e podem receber até no mínimo 10% a
          mais que as ONs. Esses papéis possuem subdivisões onde são classificados por classes,
          diferenciados pelas letras A, B e C.</p>

          <p class='text' align ="Justify">Existem identificações para os tipos de ações</p>
          <ul>
            <li>Ações ordinárias: Identificadas pelo número 3. Ex.: Vale3 (Vale), PETR3
            (Petrobras).</li>
            <li>Ações preferenciais: Identificadas pelo número 4. Ex.: PETR4 (Petrobras),
            (ITUB4 Itaunibanco).</li>
            <li>Subclasses de ações preferenciais:</li>
              <ul>
                <li>Classe A Identificadas pelo número 5. Ex.: USIM5 (Usiminas).</li>
                <li>Classe B Identificadas pelo número 6. Ex.: BRSR6 (Banrisul).</li>
                <li>Classe C Identificadas pelo número 7. Ex.: CELP7 (Celpa PNC).</li>
              </ul>
            <li>Ações UNIT, que seria um composto de ordinárias e preferenciais:
                Identificadas pelo número 11. Ex.: IBOV11 (Ibovespa IBO).</li>  
          </ul>

          <p class='text' align ="Justify">Então, uma maneira de se ganhar dinheiro em longo prazo na bolsa seria comprando ações para receber participação nos lucros. Com esse lucro você pode reinvestir em ações da própria empresa para aumentar a sua participação ou comprar papéis de outra empresa para ter maior segurança. Tal escolha vai depender de cada pessoa, mas o foco deve ser aumentar sua quantidade de ações para que no futuro possa receber dividendos mais significativos.</p>

          <p class='text' align ="Justify">Um aspecto importante do lucro através de ações é que você tem <strong>isenção de imposto de renda</strong>, tendo em vista que a empresa já pagou todos os impostos necessários.</p>

          <h6><i><u>O que é trade?</u></i></h6>
          <p class='text' align ="Justify">O trade seria a comercialização, compra e venda de ações, que ocorre na bolsa de valores. A pessoa que trabalha fazendo essas transações é chamada de trader. Esse profissional pode atuar de maneira presencial ou eletrônica através de Home Broker,
          que é um sistema oferecido pela maioria das corretoras para que se possam fazer
          transações de compra e venda de maneira remota.</p>

          <p class='text' align ="Justify">Existem duas modalidades de trade, day trade e Overnight Trade. O day trade é mais comum, caracteriza a comercialização de ações durante o dia, enquanto a bolsa de valores está aberta. Já o overnight trade ocorre quando você faz essa operação
          durante a noite, enquanto a bola de valores do seu país não está em funcionamento,
          mas as bolsas de outros países estão abertas.</p>

          <p class='text' align ="Justify">O trader atua basicamente através de duas maneiras, comprando ações que ele espera valorizar mais para revender, ou vendendo ações que estejam desvalorizando
          para comprar por um valor mais barato. Olhando de fora parece fácil, mas esse
          profissional necessita muita experiência para conseguir obter lucro. O melhor trader
          não é aquele que prevê melhor a variação no preço, mas sim aquele que reage melhor
          às mudanças dele.</p>

          <p class='text' align ="Justify">Assim como no jogo de pôquer, o mercado de valores exige muito estudo, uma boa estratégia e saber reconhecer quando se perde para que o prejuízo não seja
          maior. Seu objetivo não é ganhar todos os dias, mas você tem que manter um saldo
          positivo em relação às derrotas, podendo fazer isso de maneira segura ou de maneira
          arriscada.</p>

          <h6><i><u>O que são corretoras</u></i></h6>
          <p class='text' align ="Justify">As únicas entidades que podem intermediar a compra e venda de ações são bancos e corretoras. Independente se você que gerenciar a sua própria carteira de ações ou investir com auxílio de um especialista, você deve se associar a uma corretora para começar suas movimentações.</p>

          <p class='text' align ="Justify">A corretora então facilita o acesso dos investidores às ações e em contra partida cobra uma taxa sobre a comercialização dos papeis. Através de uma corretora você pode atuar de maneira independente, como trader, ou em grupos.</p>

          <p class='text' align ="Justify">Esses grupos seriam serviços adicionais na corretora, onde você investiria em um fundo de ações junto com outras pessoas e com a ajuda de um especialista que informa sobre riscos, ganhos e políticas de investimentos. Para que esse profissional te ajude é cobrada uma taxa administrativa e, claro, às vezes ele não consegue alcançar a meta estipulada. De maneira parecida existe o Clube de investimentos, mas com o diferencial de não precisar de um gestor certificado para efetuar as ordens de compra e venda.</p>

          <h6><i><u>Ganhando dinheiro de maneira automática</u></i></h6>
          <p class='text' align ="Justify">Agora já aprendemos todos os conceitos do mercado de ações, do funcionamento até as estratégias básicas. Vimos que atuar de forma independente no mercado de ações é a forma mais lucrativa, porém é a que demanda mais tempo e estudo. Tudo depende muito de
          tempo e estratégia, no final ganha mais quem sabe analisar e responder melhor.</p>

          <p class='text' align ="Justify">A partir dessa observação percebe-se que não há agente melhor para analisar e responder de acordo com as variações do mercado do que um robô (bot). Exatamente, a automação das transações surgiu a partir da necessidade de se ter uma reação mais rápida, além de conseguir analisar melhor os cenários. Um bot não tem o fator emoção envolvido e, por mais frio que um trader seja, às vezes age por um “felling” ou intuição. O bot é feito para atuar dentro dos parâmetros ordenados. Por mais que às vezes ele perca algumas
          oportunidades, essa automação faz com que você consiga aumentar seus ganhos.</p>

          <p class='text' align ="Justify">Mas pode ficar tranquilo, se você ainda sente que não manja nada de mercado financeiro e nem programação, existem algumas empresas que, além de fornecer uma
          consultoria para aprender mais sobre investimentos automatizados, oferecem também bots
          feitos por ela própria e outros usuários. Sendo assim, basta você colocar um ou mais bots para
          operarem para você, dentro dos parâmetros que você escolhe para ganhos e perdas, tudo isso
          com apoio de profissionais.</p>

          <h6><i><u>Ou seja...</u></i></h6>
          <p class='text' align ="Justify">Por mais incerto que o mercado de ações pareça, o que temos de ter em mente quando falamos sobre isso é:
          <ul>
            <li>Você não vai ficar rico da noite para o dia.</li>
            <li>Tenha em mente ganhos em longo prazo.</li>
            <li>O mercado de ações é um mercado de escalabilidade.</li>
            <li>Tenha uma meta e foque nela, mas não se esqueça de observar cada passo.</li>  
          </ul>
         </p>

         <h6>Para saber mais sobre o mercado de investimento, veja o nosso <a href="http://tradechangers.com.br/ebook/"> Ebook</a></h6>

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