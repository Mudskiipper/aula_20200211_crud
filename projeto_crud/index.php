<?php
  //codigo de controle de sessão
  session_start();
  if (empty($_SESSION["login"])) {
    echo "<script>alert('Faça o login primeiramente!')</script>";
    header("Location:login.php");
  }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>HOME</title>
</head>

<body style="background-image: url(img/background.jpg);">
  <?php include 'navBar.php' ?>
  <br>

  <!-- INICIO DO CARROSSEL -->
  <div class="container">
    <!-- 2.0 -->
    <div class="row">
      <!-- 2.1 -->
      <div class="col-sm">
        <!-- 2.2 -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <!-- 2.3 -->
          <ol class="carousel-indicators">
            <!-- 2.4 -->
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol><!-- 2.4 -->
          <div class="carousel-inner">
            <!-- 2.5 -->
            <div class="carousel-item active">
              <!-- 2.6 -->
              <img class="d-block w-100" src="img/slide1.png" alt="Primeiro Slide">
              <div class="carousel-caption d-none d-md-block">
                <!-- 2.7 -->
                <a href="https://www.euqueroinvestir.com/esta-com-muito-capital-para-investir-faca-seu-dinheiro-trabalhar-para-voce/" style="text-decoration:none;" target="_blank"><h1 style="color: white; text-shadow: -0.8px 0 black, 0 0.8px black, 0.8px 0 black, 0 -0.8px black;">Está com muito capital para investir?</h1>
                </a>
              </div> <!-- 2.7 -->
            </div> <!-- 2.4 -->
            <div class="carousel-item">
              <!-- 2.8 -->
              <img class="d-block w-100" src="img/slide2.png" alt="Segundo Slide">
              <div class="carousel-caption d-none d-md-block">
                <!-- 2.9 -->
                <a href="https://exame.abril.com.br/seu-dinheiro/especialistas-darao-dicas-de-investimentos-em-evento-online-e-gratuito/" style="text-decoration:none;" target="_blank"><h1 style="color: white; text-shadow: -0.8px 0 black, 0 0.8px black, 0.8px 0 black, 0 -0.8px black;">Especialistas darão dicas de investimentos em evento online e gratuito</h1>
                </a>
              </div> <!-- 2.9 -->
            </div> <!-- 2.8 -->
            <div class="carousel-item">
              <!-- 2.10 -->
              <img class="d-block w-100" src="img/slide3.png" alt="Terceiro Slide">
              <div class="carousel-caption d-none d-md-block">
                <a href="https://valorinveste.globo.com/mercados/cripto/noticia/2019/10/25/veja-como-investir-em-criptomoedas-e-reduzir-o-risco-de-golpes-e-perdas.ghtml" style="text-decoration:none;" target="_blank"><h1 style="color: white; text-shadow: -0.8px 0 black, 0 0.8px black, 0.8px 0 black, 0 -0.8px black;">Veja como investir em bitcoin e reduzir o risco de golpes e perdas</h1>
                </a>
              </div>
            </div> <!-- 2.10 -->
          </div> <!-- 2.5 -->
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <!-- 2.11 -->
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a> <!-- 2.11 -->
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <!-- 2.12 -->
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a> <!-- 2.12 -->
        </div> <!-- 2.3 -->
      </div> <!-- 2.2 -->
    </div> <!-- 2.1 -->
  </div> <!-- 2.0 -->
  <!-- FIM DO CARROSSEL -->
  <br><br>

  <!-- INICIO DOS CARDS -->
  <div class="container">
    <!-- 3.0 -->
    <div class="row">
      <!-- 3.1 -->
      <div class="col-sm">
        <!-- 3.2 -->
        <div class="card" style="width: 18rem;">
          <!-- 3.3 -->
          <img class="card-img-top" src="img/slide1.png" alt="Imagem de capa do card">
          <div class="card-body">
            <!-- 3.4 -->
            <h5 class="card-title">EU QUERO INVESTIR</h5>
            <p class="card-text">Faça seu dinheiro trabalhar para você.</p>
            <a href="https://www.euqueroinvestir.com/esta-com-muito-capital-para-investir-faca-seu-dinheiro-trabalhar-para-voce/" class="btn btn-primary" target="_blank">Visitar</a>
          </div> <!-- 3.5 -->
        </div> <!-- 3.3 -->
      </div> <!-- 3.2 -->
      <div class="col-sm">
        <!-- 3.6 -->
        <div class="card" style="width: 18rem;">
          <!-- 3.7 -->
          <img class="card-img-top" src="img/slide2.png" alt="Imagem de capa do card">
          <div class="card-body">
            <!-- 3.8 -->
            <h5 class="card-title">REVISTA EXAME</h5>
            <p class="card-text">Gestores darão indicações de ações em que investir além de debater outros assuntos como renda fixa, fundos de investimento e criptomoedas.</p>
            <a href="https://exame.abril.com.br/seu-dinheiro/especialistas-darao-dicas-de-investimentos-em-evento-online-e-gratuito/" class="btn btn-primary" target="_blank">Visitar</a>
          </div> <!-- 3.8 -->
        </div> <!-- 3.7 -->
      </div> <!-- 3.6 -->
      <div class="col-sm">
        <!-- 3.9 -->
        <div class="card" style="width: 18rem;">
          <!-- 3.10 -->
          <img class="card-img-top" src="img/slide3.png" alt="Imagem de capa do card">
          <div class="card-body">
            <!-- 3.11 -->
            <h5 class="card-title">VALOR INVESTE</h5>
            <p class="card-text">Compra direta, exchanges, gestoras de criptos e fundos dedicados aos ativos digitais, como o bitcoin: conheça cada modalidade de investimento nesta e em outras criptomoedas.</p>
            <a href="https://valorinveste.globo.com/mercados/cripto/noticia/2019/10/25/veja-como-investir-em-criptomoedas-e-reduzir-o-risco-de-golpes-e-perdas.ghtml" class="btn btn-primary" target="_blank">Visitar</a>
          </div> <!-- 3.11 -->
        </div> <!-- 3.10 -->
      </div> <!-- 3.9 -->
    </div> <!-- 3.1 -->
  </div> <!-- 3.0 -->
  <!-- FIM DOS CARDS -->

  <br><br>
  <div class="container">
    <!-- 4.0 -->
    <div class="row">
      <!-- 4.1 -->
      <div class="col-sm">
        <!-- 4.2 -->
        <div class="embed-responsive embed-responsive-16by9">
          <!-- 4.3 -->
          <iframe width="560" height="315" src="https://www.youtube.com/embed/H7lqFEUawdw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div> <!-- 4.3 -->
      </div> <!-- 4.2 -->
    </div> <!-- 4.1 -->
  </div> <!-- 4.0 -->

  <?php include 'footer.php' ?>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>