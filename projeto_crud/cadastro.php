<?php
  include 'conexao.php';

  if ($_POST) {
    $nome=$_POST["nome"];
    $login=$_POST["login"];
    $senha=md5($_POST["senha"]);

    $sql="SELECT * FROM usuarios WHERE login LIKE '$login'";
    $resultado=mysqli_query($conexao,$sql);

    if (mysqli_num_rows($resultado)>0) {
      echo "<script>alert('login já existe. Tente outro!')</script>";
    }else{
      $sql="INSERT INTO usuarios VALUES(NULL,'$nome','$login','$senha')";
      if (mysqli_query($conexao,$sql)) {
        echo "<script>alert('Cadastro realizado com sucesso!');
        //window.location.href = 'login.php';
        </script>";
      }else{
        die("Falha no cadastro");
      }
    }
  }//fim do $_POST


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title></title>
</head>

<body style="background-color: #FFBE38;">
  <div class="container">
    <!-- 0.0 -->
    <!-- INICIO DO TITULO E IMAGEM -->
    <div class="row">
      <!-- 1.0 -->
      <div class="col">
        <!-- 1.1 -->
      </div> <!-- 1.1 -->
      <div class="col-2">
        <!-- 1.2 -->
        <img src="img/logo1.png" width="200" height="200" class="d-inline-block align-center" alt="">
      </div> <!-- 1.2 -->
      <div class="col align-self-center">
        <!-- 1.3 -->
        <h3>King Investment News</h3>
      </div> <!-- 1.3 -->
      <div class="col">
      </div>
    </div> <!-- 1.0 -->
    <!-- FIM DO TITULO E IMAGEM -->

    <!-- COMEÇO DO TITULO CADASTRE-SE -->
    <div class="row">
      <!-- 2.0 -->
      <div class="col">
        <!-- 2.1 -->
      </div> <!-- 2.1 -->
      <div class="col-6">
        <!-- 2.2 -->
        <p><b>CADASTRE-SE</b></p>
      </div> <!-- 2.2 -->
      <div class="col">
        <!-- 2.3 -->
      </div> <!-- 2.3 -->
    </div> <!-- 2.0 -->
    <!-- FIM DO TITULO CADASTRE-SE -->


    <br>
    <!-- COMEÇO DO FORMULARIO -->
    <form method="POST" action="">
    <div class="row">
      <!-- 3.0 -->
      <div class="col">
        <!-- 3.1 -->
      </div> <!-- 3.1 -->
      <div class="col-6">
        <!-- 3.2 -->
        <form>
          <!-- 3.3 -->
          <div class="form-group">
            <!-- 3.6 -->
            <input type="text" class="form-control" id="exampleInputLogin1" aria-describedby="text"
              placeholder="Nome" name="nome">
          </div> <!-- 3.6 -->
          <br>
          <div class="form-group">
            <!-- 3.4 -->
            <input type="text" class="form-control" id="exampleInputLogin2" aria-describedby="text"
              placeholder="Login" name="login">
          </div> <!-- 3.4 -->
          <br>
          <div class="form-group">
            <!-- 3.5 -->
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="senha">
          </div> <!-- 3.5 -->
          <br>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
        </form> <!-- 3.3 -->
      </div> <!-- 3.2 -->
      <div class="col">
      </div>
    </div> <!-- 3.0 -->
  </form>
    <!-- FIM DO FORMULARIO -->
    <br>
    <!-- COMEÇO DO LINK FAÇA LOGIN -->
    <div class="row">
      <!-- 4.0 -->
      <div class="col">
        <!-- 4.1 -->
      </div>
      <div class="col-6">
        <!-- 4.2 -->
        <p>Já possui conta? <a href="login.php">Faça login</a></p>
      </div> <!-- 4.2 -->
      <div class="col">
        <!-- 4.3 -->
      </div> <!-- 4.3 -->
    </div> <!-- 4.0 -->
    <!-- FIM DO LINK FAÇA LOGIN -->
  </div> <!-- 0.0 -->






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