<?php
  session_start();
  include 'conexao.php';
  if (empty($_SESSION["login"])) {
    echo "<script>alert('Faça o login primeiramente!')</script>";
    header("Location:login.php");
  }

if (empty($_POST["senhaatual"]) || empty($_POST["novasenha"]) || empty($_POST["confirmasenha"])) {
echo "<script>alert('Não deixe campos vazios!')</script>";
}

else 
 {
    // recebendo as informações e colocando no var
    $senha_atual=$_POST["senhaatual"];
    $nova_senha=$_POST["novasenha"];
    $confirma_senha=$_POST["confirmasenha"];

    $login = $_SESSION["login"];
    $sql = "SELECT * FROM usuarios WHERE login='$login'";
    $resultado = mysqli_query($conexao,$sql);
    $vetor = mysqli_fetch_array($resultado);
    $senha_bd = $vetor["senha"];

    if($confirma_senha != $nova_senha){
      echo "<script>alert('Senhas diferentes !!')</script>";
    }
    else if ($senha_bd != md5 ($senha_atual)) {
      echo "<script>alert('Senhas está diferente do cadastro !!')</script>";
    }else if ($senha_bd == md5($nova_senha)){
      echo "<script>alert('Senha nova está igual a antiga senha !!')</script>";
    } 
    else{
      $nova_senha =  md5($nova_senha);
      $sql = "UPDATE usuarios SET senha = '$nova_senha' WHERE login = '$login'";

      if (mysqli_query($conexao,$sql)) {
        echo "<script>alert('Senha alterada com sucesso !!')</script>";
        header("Location:index.php");
      }else{
        echo "<script>alert('Erro na alteração da senha !!')</script>";
      }


    }

  }


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
        <a href="index.php">
        <img src="img/logo1.png" width="200" height="200" class="d-inline-block align-center" alt="">
      </a>
      </div> <!-- 1.2 -->
      <div class="col align-self-center">
        <!-- 1.3 -->
        <a href="index.php" style="text-decoration: none; color: black">
        <h3>King Investment News</h3>
      </a>
      </div> <!-- 1.3 -->
      <div class="col">
      </div>
    </div> <!-- 1.0 -->
    <!-- FIM DO TITULO E IMAGEM -->

    <!-- COMEÇO DO TITULO ALTERAR SENHA -->
    <div class="row">
      <!-- 2.0 -->
      <div class="col">
        <!-- 2.1 -->
      </div> <!-- 2.1 -->
      <div class="col-6">
        <!-- 2.2 -->
        <p><b>ALTERAR SENHA</b></p>
      </div> <!-- 2.2 -->
      <div class="col">
        <!-- 2.3 -->
      </div> <!-- 2.3 -->
    </div> <!-- 2.0 -->
    <!-- FIM DO TITULO ALTERAR SENHA -->


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
            <!-- 3.4 -->
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha atual" name="senhaatual">
          </div>
          <!-- 3.4 -->
          <br>
          <div class="form-group">
            <!-- 3.5 -->
            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Nova senha" name="novasenha">
          </div> <!-- 3.5 -->
          <br>
          <div class="form-group">
            <!-- 3.6 -->
            <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirmar nova senha" name="confirmasenha">
          </div>
          <!-- 3.6 -->
          <br>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
        </form> <!-- 3.3 -->
      </div> <!-- 3.2 -->
      <div class="col">
      </div>
    </div> <!-- 3.0 -->
  </form>
    <!-- FIM DO FORMULARIO -->
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